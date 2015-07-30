<?php namespace controllers\base;

/**
 * Class Controller
 */
class Controller
{

	// --------------------------------------------------------------------------------
	// properties

		protected $type;


	// --------------------------------------------------------------------------------
	// instantiation

		public function __construct()
		{
			$this->type = 'default';
		}

	}

