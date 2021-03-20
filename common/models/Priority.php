<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $priority_name
 * @property int $status
 * @property int $order
 */
class Priority extends \yii\db\ActiveRecord
{
    const TOP_URGENT = 1;
    const URGENT = 2;
    const HIGH = 3;
    const NORMAL = 4;
    const LOW = 5;
    const NICE_TO_HAVE = 6;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'priority';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'priority_name', 'order', 'status'], 'required'],
            [['id', 'order', 'status'], 'integer'],
            [['priority_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'priority_name' => 'Priority',
            'order' => 'Order',
            'status' => 'Status',
        ];
    }
    
    public function getCrmRecords()
    {
        return $this->hasMany(CrmRecord::className(), ['idpriority' => 'id']);
    }
}
