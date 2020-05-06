<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');

        $this->middleware('auth')
            ->only(['contato','categoria']);
    }

    public function index(){
        $teste = 123;
        $teste2 = 67;
        $teste3 = 897;
        //return view('teste',['teste' => $teste]);
    	return view('site.home.home',compact('teste','teste2','teste3'));
    }

    public function contato(){
    	return 'Página de contato';
    }

    public function categoria($idCat){
    	return "Categoria {$idCat}";
    }

    public function categoriaOp($idCat = 1){
    	return "Categoria {$idCat}";
    }
}
