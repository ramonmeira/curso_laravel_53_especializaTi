<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Painel\Product;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product){
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();
        return view('painel.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tests(){
        /*
        $prod = $this->product;
        $prod->name = "Shampoo";
        $prod->number = 234234;
        $prod->active = true;
        $prod->category = "bath";
        $prod->description = "Antes do condicionador.";
        $insert = $prod->save();
        */
        /*
        $insert = $this->product->insert([
            'name' => "Pasta de dente",
            'number' => 425234,
            'active' => true,
            'category' => "bath",
            'description' => "Para os dentes."
        ]);
        */
        /*
        $insert = $this->product->create([
            'name' => "Pasta de dente",
            'number' => 425234,
            'active' => true,
            'category' => "bath",
            'description' => "Para os dentes."
        ]);

        if ($insert) {
            return "Inserido com sucesso. ID: {$insert->id}";
        } else {
            return "Falha ao inserir.";
        }
        */
        /*
        $prod = $this->product->find(5);
        $prod->name = "UPDATE";
        $prod->number = 234234;
        $prod->active = false;
        $prod->category = "bath";
        $prod->description = "Desc Update";
        $update = $prod->save();
        */
        //$prod = $this->product->find(6);
        $prod = $this->product->where('number','>=','425234');
        $update = $prod->update([
            'name' => "Update 3",
            'number' => 425234,
            'active' => true,
            'category' => "bath",
            'description' => "22222"
        ]);

        if ($update) {
            return "Alterado com sucesso.";
        } else {
            return "Falha ao alterar.";
        }
    }
}
