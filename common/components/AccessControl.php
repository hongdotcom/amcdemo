<?php

namespace common\components;

use common\models\Permission;
use common\models\WebLang;
use common\helpers\Url;
use yii\base\ActionFilter;
use Yii;
use yii\di\Instance;
use yii\web\ForbiddenHttpException;
use yii\web\User;

class AccessControl extends ActionFilter {

    /**
     * @var User|array|string the user object representing the authentication status or the ID of the user application component.
     * Starting from version 2.0.2, this can also be a configuration array for creating the object.
     */
    public $user = 'user';

    /**
     * @var callable a callback that will be called if the access should be denied
     * to the current user. If not set, [[denyAccess()]] will be called.
     *
     * The signature of the callback should be as follows:
     *
     * ```php
     * function ($rule, $action)
     * ```
     *
     * where `$rule` is the rule that denies the user, and `$action` is the current [[Action|action]] object.
     * `$rule` can be `null` if access is denied because none of the rules matched.
     */
    public $denyCallback;
    private $request;
    private $currentRoute;

    public function init() {
        parent::init();
        $this->user = Instance::ensure($this->user, User::className());

        $this->request = Yii::$app->request;
    }

    public function beforeAction($action) {
        $user = $this->user;
        $this->currentRoute = Url::normalizeRoute($action->id);

        /** @var Permission $route */
        $permission = $this->checkPrivateRoute();

        if ($permission) {
//            if ($permission->status <> 1) {
//                $this->denyAccess($action);
//            }
            if (!$user->isGuest) {
                if (!$permission->rolePermission) {
                    Yii::error("rolePermission not exist");
                    $this->denyAccess($action);
                }
            } else {
                call_user_func($this->denyCallback, null, $action); // call back defined in config/main 'as access'
            }
//        } else {
//            $this->denyAccess($action);
        } else {
            Yii::error($this->currentRoute . " is public");
        }

        return parent::beforeAction($action);
    }

    /**
     * Get permission by route, ignore module, permission.status
     * @return bool|Permission
     */
    private function checkPrivateRoute() {
        $permission = Permission::getByRoute($this->currentRoute, Yii::$app->params['interface']);

        return $permission != NULL ? $permission : FALSE;
    }

    protected function denyAccess($action) {
//        Yii::error("Denied access due to no permission");
//        throw new ForbiddenHttpException(WebLang::getByLocaleId('no_permission'));
        if ($this->request->isAjax) {
            $data['success'] = FALSE;
            $data['msg'] = WebLang::t('no_permission');
            echo json_encode($data);
            exit();
        } else {
            Yii::$app->response->content = Yii::$app->controller->render('@common/views/error', [
                'message' => WebLang::t('no_permission')
            ]);

            Yii::$app->end();
        }
    }

}
