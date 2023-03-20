@extends('layouts.app')

@section('head_title','Home')

@section('content')
<div class="container row">
    <h4>Home page</h4>
    @foreach($products as $index => $product)

    <div class="card col-3 m-3" style="width: 18rem;">
        <img class="card-img-top" src="{{$product->image}}" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->descrption}}</p>
            <p class="card-price">{{$product->price}}</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
</div>
@endforeach

</div>

@endsection