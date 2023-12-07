<?php

namespace App\Controllers;

use App\Core\Controller;

class Gaji extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Gaji();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('gaji/index', $data);
	}

	public function input()
	{
		$this->dashboard('gaji/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/gaji');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('gaji/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/gaji');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/gaji');
	}
}
