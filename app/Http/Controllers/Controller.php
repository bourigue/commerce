<?php

namespace App\Http\Controllers;

use App\Models\Models\Product as ModelsProduct;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
   
   
   
    public function index()
    {
       return view('hom');
    } 
}
