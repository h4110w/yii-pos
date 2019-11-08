<?php

class User extends CActiveRecord
{
	public $password2;
	public $verifyCode;

	public function tableName()
	{
		return 'user';
	}

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, username, password, saltPassword, level_id', 'required', 'message' => '{attribute} Tidak Boleh Kosong'),
			array('level_id', 'numerical', 'integerOnly' => true),
			array('username', 'length', 'max' => 20),
			array('password, saltPassword', 'length', 'max' => 50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, saltPassword, level_id', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idLevel' => array(self::BELONGS_TO, 'Level', 'level_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'saltPassword' => 'Salt Password',
			'level_id' => 'Level',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('saltPassword', $this->saltPassword, true);
		$criteria->compare('level_id', $this->level_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public function validatePassword($password)
	{
		return $this->hashPassword($password, $this->saltPassword) === $this->password;
	}

	public function hashPassword($password, $salt)
	{
		return md5($salt . $password);
	}

	public function generateSalt()
	{
		return uniqid('', true);
	}
}
