<?php

/**
 * This is the model class for table "produk".
 *
 * The followings are the available columns in table 'produk':
 * @property integer $id
 * @property string $nama_produk
 * @property string $deskripsi
 * @property string $stok
 * @property string $harga
 * @property integer $kategori_id
 */
class Produk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_produk, stok, harga, kategori_id', 'required'),
			array('kategori_id', 'numerical', 'integerOnly' => true),
			array('nama_produk, stok, harga', 'length', 'max' => 100),
			array('deskripsi', 'safe'),
			array('id, nama_produk, deskripsi, stok, harga, kategori_id', 'safe', 'on' => 'search'),
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
			'idKategori' => array(self::BELONGS_TO, 'Kategori', 'kategori_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_produk' => 'Nama Produk',
			'deskripsi' => 'Deskripsi',
			'stok' => 'Stok',
			'harga' => 'Harga',
			'kategori_id' => 'Kategori',
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
		$criteria->compare('nama_produk', $this->nama_produk, true);
		$criteria->compare('deskripsi', $this->deskripsi, true);
		$criteria->compare('stok', $this->stok, true);
		$criteria->compare('harga', $this->harga, true);
		$criteria->compare('kategori_id', $this->kategori_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Produk the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
