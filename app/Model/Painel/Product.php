<?php

namespace App\Model\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','number','active','category','description'];
    //protected $guarded = [];

    public $rules = [
    	'name' => 'required|min:3|max:100',
    	'number' => 'required|numeric',
    	'category' => 'required',
    	'description' => 'min:3|max:100'
    ];
}
