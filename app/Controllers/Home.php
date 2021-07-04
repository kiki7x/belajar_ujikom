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
			'tampilmhs' => $this->db_mhs->getMhs(),
		];
		return view('home', $data);
	}
}
