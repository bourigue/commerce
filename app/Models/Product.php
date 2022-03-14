<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    public function index()
    {
       $article=Product::paginate(6);
       return view('article')->with(["articles"=>$article]);
    }
    
}
