<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function Create() {
        return view('tareas.create');
    }
    public function List() {
        return view('tareas.list');
    }
    public function Edit() {
        return view('tareas.edit');
    }
    public function Delete() {
        return view('tareas.delete');
    }

}
