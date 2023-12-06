<?php

namespace App\Controllers;

use App\Core\Controller;

class Makanan extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Makanan();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('makanan/index', $data);
	}

	public function input()
	{
		$this->dashboard('makanan/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/makanan');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('makanan/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/makanan');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/makanan');
	}
}
