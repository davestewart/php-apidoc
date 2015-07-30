<?php namespace models;
use models\base\Model;

/**
 * Class UserModel
 * @package models
 */
class UserModel extends Model
{

	public $id;
	public $firstName;
	public $lastName;

	public function __construct($id)
	{
		parent::__construct('user', $id);
		$this->firstName	= $this->faker->firstName;
		$this->lastName		= $this->faker->lastName;
	}

}