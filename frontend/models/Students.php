<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $name
 * @property string $secname
 * @property string $middlename
 * @property string $birthday
 * @property int $reg_id
 * @property string $email
 * @property int $phone
 * @property int $county_id
 * @property string $university
 * @property string $faculty
 *
 * @property Country $county
 * @property Region $reg
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'secname', 'middlename', 'birthday', 'reg_id', 'email', 'phone', 'county_id', 'university', 'faculty'], 'required'],
            [['birthday'], 'safe'],
            [['reg_id', 'phone', 'county_id'], 'integer'],
            [['name', 'secname', 'middlename'], 'string', 'max' => 250],
            [['email', 'university', 'faculty'], 'string', 'max' => 100],
            [['county_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['county_id' => 'id']],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['reg_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'secname' => 'Secname',
            'middlename' => 'Middlename',
            'birthday' => 'Birthday',
            'reg_id' => 'Regioni',
            'email' => 'Email',
            'phone' => 'Phone',
            'county_id' => 'County',
            'university' => 'University',
            'faculty' => 'Faculty',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCounty()
    {
        return $this->hasOne(Country::className(), ['id' => 'county_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Region::className(), ['id' => 'reg_id']);
    }
}
