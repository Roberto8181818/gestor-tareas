<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function Create() {
        return view('categorias.create');
    }
    public function List() {
        return view('categorias.list');
    }
    public function Edit() {
        return view('categorias.edit');
    }
    public function Delete() {
        return view('categorias.delete');
    }
}
