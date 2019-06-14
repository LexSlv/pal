<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meta".
 *
 * @property int $id
 * @property string $alias
 * @property string $title_ru
 * @property string $title_kz
 * @property string $description_ru
 * @property string $description_kz
 * @property string $keywords_ru
 * @property string $keywords_kz
 */
class Meta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_ru', 'description_kz', 'keywords_ru', 'keywords_kz'], 'string'],
            [['alias', 'title_ru', 'title_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'title_ru' => 'Title Ru',
            'title_kz' => 'Title Kz',
            'description_ru' => 'Description Ru',
            'description_kz' => 'Description Kz',
            'keywords_ru' => 'Keywords Ru',
            'keywords_kz' => 'Keywords Kz',
        ];
    }
}
