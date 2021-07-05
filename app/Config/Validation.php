<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $mhs_tambah = [
		'nim'				=> 'required|is_unique[tb_mahasiswa.nim]',
		'nama'				=> 'required',
		'jk'		    	=> 'required',
		'jurusan'			=> 'required',
	];

	public $mhs_tambah_errors = [
		'nim'   => [
			'required'  => 'NIM wajib diisi.',
			'is_unique' => 'NIM sudah dipakai'
		],
		'nama'   => [
			'required'  => 'Nama wajib diisi.'
		],
		'jk'   => [
			'required'  => 'Jenis kelamin wajib dipilih.'
		],
		'jurusan' => [
			'required'  => 'Jurusan wajib dipilih.'
		],
	];

	public $mhs_edit = [
		'nim'				=> 'required',
		'nama'				=> 'required',
		'jk'		    	=> 'required',
		'jurusan'		=> 'required',
	];

	public $mhs_edit_errors = [
		'nim'   => [
			'required'  => 'NIM wajib diisi.'
		],
		'nama'   => [
			'required'  => 'Nama wajib diisi.'
		],
		'jk'   => [
			'required'  => 'Jenis kelamin wajib dipilih.'
		],
		'jurusan' => [
			'required'  => 'Jurusan wajib dipilih.'
		],
	];

	public $jrs_tambah = [
		'kd_jurusan'				=> 'required|is_unique[tb_jurusan.kd_jurusan]',
		'nama_jurusan'				=> 'required',
	];

	public $jrs_tambah_errors = [
		'kd_jurusan'   => [
			'required'  => 'Kode Jurusan wajib diisi.',
			'id_unique' => 'Kode Jurusan sudah dipakai'
		],
		'nama_jurusan'   => [
			'required'  => 'Nama Jurusan wajib diisi.'
		],
	];

	public $jrs_edit = [
		'kd_jurusan'				=> 'required',
		'nama_jurusan'				=> 'required',
	];

	public $jrs_edit_errors = [
		'kd_jurusan'   => [
			'required'  => 'Kode Jurusan wajib diisi.'
		],
		'nama_jurusan'   => [
			'required'  => 'Nama Jurusan wajib diisi.'
		],
	];
}
