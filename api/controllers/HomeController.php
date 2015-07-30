<?php namespace controllers; 

/**
 * Class UserController
 * @package controllers
 */
class HomeController extends base\Controller
{

	public function __construct()
	{

	}

	public function index()
	{
		json('The API is working OK!');
	}

}