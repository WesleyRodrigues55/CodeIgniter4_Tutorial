<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// inicia o projeto com esses elementos
		return  view('templates/header') . view('news/overview') . view('templates/footer');
	}
}
