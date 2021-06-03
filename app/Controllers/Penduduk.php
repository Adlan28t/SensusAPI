<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Penduduk extends ResourceController
{

    protected $modelName = 'App\Models\PendudukModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
}
