<?php

namespace App\Http\Controllers;

use App\Models\Dominio;
use Illuminate\Http\Request;

class DominioController extends Controller
{
    protected $model;

    public function __construct(Dominio $dominio)
    {
        $this->model = $dominio;
    }

    public function index()
    {
        return view('dominio.index');
    }
}
