<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_kz
 * @property string $link
 * @property int $position
 * @property int $hide
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru', 'title_kz', 'link', 'position', 'hide'], 'required'],
            [['position', 'hide'], 'integer'],
            [['title_ru', 'title_kz', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'title_kz' => 'Title Kz',
            'link' => 'Link',
            'position' => 'Position',
            'hide' => 'Hide',
        ];
    }
}
