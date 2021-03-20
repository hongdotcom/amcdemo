<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\CrmRecord;
use common\models\CrmActivity;
use common\controllers\MasterController;

/**
 * Site controller
 */
class SiteController extends MasterController {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'contact'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
        ];
    }

    public function actionError() {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception instanceof \yii\web\NotFoundHttpException) {
            // all non existing controllers+actions will end up here
            return $this->render('pnf'); // page not found
        } else {
            return $this->render('error', ['exception' => $exception]);
        }
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('dashboard');
    }

    public function actionDashboard2() {
        return $this->render('dashboard2');
    }

    public function actionDashboard() {
        return $this->render('dashboard');
    }

    public function actionDeadlines() {
        return $this->render('deadlines');
    }

    public function actionContactInfo() {
        return $this->render('contact-info');
    }

    public function action3d() {
        return $this->render('3d');
    }

    public function actionPickStand() {
        return $this->render('pick-stand');
    }

    public function actionShopItem() {
        return $this->render('shop-item');
    }

    public function actionServices() {
        return $this->render('services');
    }

    public function actionFaq() {
        return $this->render('faq');
    }

    public function actionFaq2() {
        return $this->render('faq2');
    }

    public function actionNews() {
        return $this->render('news');
    }

    public function actionConfigurator() {
        return $this->render('configurator');
    }

    public function actionCart() {
        return $this->render('cart');
    }

    public function actionOrders() {
        return $this->render('orders-with-total');
    }

    public function actionPick($cat) {
        return $this->render('shop-items', [
                    'models' => $cat,
        ]);
    }

    public function actionForm($refno) {
        return $this->render('form', [
                    'refno' => $refno,
        ]);
    }

    public function actionForms($refno = 'form4a') {
        return $this->render('forms', [
                    'refno' => $refno,
        ]);
    }

    public function actionTestimonial() {
        return $this->render('testimonial', [
        ]);
    }

    public function actionTickets() {
        return $this->render('tickets');
    }

    public function actionTicket() {
        return $this->render('ticket');
    }

    public function actionManual() {
        return $this->render('manual');
    }

    public function actionContactus() {
        return $this->render('contactus');
    }

    public function actionInvitation() {
        return $this->render('invitation');
    }

    public function actionMailingList() {
        return $this->render('mailing-list');
    }

    public function actionContractorOrders() {
        return $this->render('contractor-orders');
    }

    public function actionContractorWorker() {
        return $this->render('contractor-worker');
    }

    public function actionContractorOrder() {
        return $this->render('contractor-order');
    }

    public function actionCalcintro() {
        return $this->render('calcintro');
    }

    public function actionWorker() {
        return $this->render('worker');
    }

    public function actionWorkerOrder() {
        return $this->render('worker-order');
    }

    public function actionWorkerOrders() {
        return $this->render('worker-orders');
    }
    
    public function actionAccountExport() {
        return $this->render('account-export');
    }
    public function actionInventoryDashboard() {
        return $this->render('inventory-dashboard');
    }
//    public function actionContractorAssignments() {
//        return $this->render('contractor-assignments');
//    }

    public function actionContractorStatement() {
        return $this->render('contractor-statement');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
//    public function actionContact() {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
//                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
//            } else {
//                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
//            }
//
//            return $this->refresh();
//        } else {
//            return $this->render('contact', [
//                        'model' => $model,
//            ]);
//        }
//    }
    /*
      public function actionTracker() {
      $model = new CrmRecord();
      if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
      Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
      } else {
      Yii::$app->session->setFlash('error', 'There was an error sending your message.');
      }

      return $this->refresh();
      } else {
      return $this->render('tracker', [
      'model' => $model,
      ]);
      }
      }
     */

    public function actionActivity() {
        $model = new CrmActivity();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('activity', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
//    public function actionAbout() {
//        return $this->render('about');
//    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                /*  if (Yii::$app->getUser()->login($user)) {
                  return $this->goHome();
                  } */
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

}
