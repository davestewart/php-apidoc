<?php namespace models\base; 

use \Faker;
/**
 * Class Model
 * @package models\base
 */
class Model
{
	public $id;
	protected $type;

	protected $faker;

	public function __construct($type, $id)
	{
		// parameters
		$this->type		= $type;
		$this->id		= (int) $id;

		// faker
		$this->faker	= Faker\Factory::create();
		$this->faker->seed($id);
	}
}