@extends('master')
@section('content')

<div class="custom-product">


    <div class="col-sm-10">
            <div class="trending-wrapper">
              <h2>Results for Products</h2>
              <a class="btn btn-success" href="ordernow">Order Now</a> <br><br>
              @foreach ($products as $item)
              <div class=" row search-item cart-divider">
               <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}"">
                    
                    </a>
               </div>

               
               <div class="col-sm-4">
                  <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                  </div>
               </div>

               <div class="col-sm-3">
                   <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"> Remove</a>
               </div>
              </div>
              @endforeach
            </div>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br><br>
    </div>
</div>
    
@endsection