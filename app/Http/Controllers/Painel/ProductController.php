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
        $title = 'Listagem dos Produtos';
        $products = $this->product->all();
        return view('painel.products.index', compact('products','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Novo Produto';
        $categorys = ['eletronic','fitment','clenning','bath'];
        return view('painel.products.create',compact('title','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Pega todos os campos do formulario
        $dataForm = $request->all();

        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;

        //Faz o cadastro
        $insert = $this->product->create($dataForm);

        if ($insert) {
            return redirect()->route('product.index');
        } else {
            return redirect()->back();
        }
        
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
        /*
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
        */
        //$prod = $this->product->find(2);
        //$delete = $prod->delete();
        //$delete = $prod->destroy([2,3,4]);
        $delete = $this->product
            ->where('number',425234)
            ->delete();

        if ($delete) {
            return "Deletado com sucesso.";
        } else {
            return "Falha ao deletar.";
        }
    }
}
