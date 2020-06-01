<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;
/**
 * This is the model class for table "berita".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $detail
 * @property string|null $date
 * @property int|null $published
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int $created_at
 * @property int $updated_at
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            BlameableBehavior::className(),
            TimestampBehavior::className(),
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                // 'slugAttribute' => 'slug',
                // 'slugAttribute' => 'alias', // jika nama field di table bukan slug
                'immutable' => true,
                'ensureUnique'=>true,
            ],
        ];
    }
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['title', 'slug', 'created_at', 'updated_at'], 'required'],
            [['title'], 'required'],
            [['detail'], 'string'],
            [['date'], 'safe'],
            [['published', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'detail' => 'Detail',
            'date' => 'Date',
            'published' => 'Published',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
