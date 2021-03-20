<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_element".
 *
 * @property integer $id
 * @property string $element_type
 * @property string $element_key
 * @property string $value_eng
 * @property string $value_cht
 * @property string $value_chs
 * @property string $value_jap
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class FormElement extends \common\models\BaseAR {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'form_element';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['element_type', 'element_key', 'value_eng', 'value_cht', 'value_chs', 'value_jap'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['element_type'], 'string', 'max' => 50],
            [['element_key', 'value_eng', 'value_cht', 'value_chs', 'value_jap'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'element_type' => 'Element Type',
            'element_key' => 'Element Key',
            'value_eng' => 'Value Eng',
            'value_cht' => 'Value Cht',
            'value_chs' => 'Value Chs',
            'value_jap' => 'Value Jap',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public static function getFormArray($elementType) {
        return self::find()
                        ->select(['element_key as id', 'value_' . Yii::$app->language . ' as itemname'])
                        ->where([
                            'element_type' => $elementType,
                            'status' => 1
                        ])
                        ->orderBy(['element_key' => SORT_ASC])
                        ->asArray()
                        ->all();
    }
    
    public function name($lang = null) {
        if(!$lang)
            $lang = Yii::$app->language;
        
        switch ($lang) {
            case "eng":
                return $this->value_eng;
                break;
            case "cht":
                return $this->value_cht;
                break;
            case "chs":
                return $this->value_chs;
                break;
            case "jap":
                return $this->value_eng;
                break;
        }
    }

}
