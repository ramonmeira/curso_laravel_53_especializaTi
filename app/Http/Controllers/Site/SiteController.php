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
    	return 'Home page do site';
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
