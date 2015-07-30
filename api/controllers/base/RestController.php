<?php namespace controllers\base;

/**
 * Class ObjectController
 * @package controllers
 */
class RestController extends Controller
{
	
	// --------------------------------------------------------------------------------
	// variables

		protected $model;


	// --------------------------------------------------------------------------------
	// public methods

		public function __construct($type = 'object')
		{
			$this->type	= $type;
		}


	// --------------------------------------------------------------------------------
	// public methods

		public function all()
		{
			$data = [];
			for($i = 0; $i < 3; $i++)
			{
				$data[] = $this->getModel($i);
			}
			json("view all {$this->type}s", $data);
		}

		public function one($id)
		{
			json("view {$this->type} $id", $this->getModel($id));
		}

		public function add()
		{
			json("add {$this->type}", $this->getModel(rand(0, 500)));
		}

		public function update($id)
		{
			json("update {$this->type} $id");
		}

		public function delete($id)
		{
			json("delete {$this->type} $id");
		}


	// --------------------------------------------------------------------------------
	// protected methods

		protected function getModel($id)
		{
			$model	= '\\models\\' .ucfirst($this->type). 'Model';
			return new $model($id);
		}
}