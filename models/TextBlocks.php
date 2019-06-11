<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "text_blocks".
 *
 * @property int $id
 * @property string $alias
 * @property string $ru
 * @property string $kz
 */
class TextBlocks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'text_blocks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ru', 'kz'], 'required'],
            [['alias'], 'unique'],
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
            'ru' => 'Ru',
            'kz' => 'Kz',
        ];
    }


    public function show($alias)
    {
        $text_block = TextBlocks::find()->where(['alias' => $alias])->one();
        $lang = Yii::$app->language;
        return $text_block->$lang;
    }

}
