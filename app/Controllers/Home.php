<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Home extends BaseController
{
	protected $db_mhs;

	public function __construct()
	{
		$this->db_mhs = new Mahasiswa_model();
	}

	public function index()
	{
		$data = [
			'title' => 'Home',
		];
		return view('v_home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About',
		];
		return view('v_about', $data);
	}
}
