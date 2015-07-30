<?php namespace models;

use models\base\Model;

/**
 * Class UserModel
 * @package models
 */
class PostModel extends Model
{

	public $id;
	public $type;
	public $title;
	public $body;
	public $date;

	public function __construct($id)
	{
		parent::__construct('post', $id);
		$this->title		= $this->faker->words(10, true);
		$this->body			= $this->faker->text();
		$this->date			= $this->faker->date();
	}

}