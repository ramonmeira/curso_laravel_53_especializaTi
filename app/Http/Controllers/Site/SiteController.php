<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');

        $this->middleware('auth')
            ->only(['categoria']);
    }

    public function index(){
        $title = 'Home';
        $var1 = 67;
        $arrayData = [1,2,3,4,5,6,7,8,9];
        //return view('teste',['teste' => $teste]);
        return view('site.home.index',compact('title','var1','arrayData'));
    }

    public function contato(){
        $title = 'Contato';
        $xss = '<script>alert("Ataque XSS");</script>';
    	return view('site.contact.index', compact('title','xss'));
    }

    public function categoria($idCat){
    	return "Categoria {$idCat}";
    }

    public function categoriaOp($idCat = 1){
    	return "Categoria {$idCat}";
    }
}
