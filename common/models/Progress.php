<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "progress".
 *
 * @property int $id
 * @property string $progress_name
 * @property int $status
 * @property int $order
 */
class Progress extends \yii\db\ActiveRecord {

    const OPEN = 1;
    const CONFIRM_BUG = 2;
    const AWAITING_REVIEW = 3;
    const NOT_FIXED = 4;
    const CLOSE = 5;

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'progress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['id', 'progress_name', 'order', 'status'], 'required'],
            [['id', 'order', 'status'], 'integer'],
            [['progress_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'progress_name' => 'Progress',
            'order' => 'Order',
            'status' => 'Status',
        ];
    }

    public function getCrmRecords() {
        return $this->hasMany(CrmRecord::className(), ['idprogress' => 'id']);
    }

    public function getCrmRecordCount() {
        return CrmRecord::find()->select([
                            new \yii\db\Expression("count(1)")
                        ])
                        ->where(['idprogress' => $this->id])->scalar();
    }

}
