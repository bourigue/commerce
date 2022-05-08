@extends('layouts.app')
@section('content')


<div class="row">

    @foreach ($product as $item)
 
      <div class="col s4" >
        
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img style="width: 200px;height:200px" class="activator" src="image/{{$item["image"] }}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">{{Str::limit($item["name"],8)  }}<i class="material-icons right">more_vert</i></span>
            <p>{{$item["price"] }}</p>
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{ $item["id"] }}" name="id">
              <input type="hidden" value="{{ $item["name"] }}" name="name">
              <input type="hidden" value="{{$item["price"] }}" name="price">
              <input type="hidden" value="{{$item["image"] }}" name="image">
              <input type="hidden" value="1" name="quantity">
              
              <button class="px-2 pb-2 ml-2 text-white bg-blue-800 rounded btn btn-primary"><i class="material-icons m-2">add_shopping_cart</i>Add To Cart</button>
            </form>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">{{ $item["name"] }}<i class="material-icons right">close</i></span>
            <p>{{ $item["description"] }}</p>
          </div>
        </div>
    
 
    </div>
   
     @endforeach 
    
    </div>

@endsection

