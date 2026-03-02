<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFornecedores extends Controller
{
        public function index(){
        $fornecedores =\App\Models\Fornecedores::all();
        return view('fornecedores.index', compact('fornecedores'));
    }
}
