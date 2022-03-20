@extends('welcome')
@section('content')<br><br><br><br>
<div id="content" class="p-4 pt-5 p-md-5 ">
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
<div class="mt-2 mb-3 container-fluid">
    <div class="row no-gutters">
        <div class="pr-2 col-md-5">
            <div class="card">
                <div class="demo">
                    <ul id="lightSlider">
                        <li data-thumb="{{ $post ->image }}"> <img src="{{ $post ->image }}" /> </li>
                        <li data-thumb="{{ $post ->image }}"> <img src="{{ $post ->image }}" /> </li>
                        <li data-thumb="{{ $post ->image }}"> <img src="{{ $post ->image }}" /> </li>
                        <li data-thumb="{{ $post ->image }}"> <img src="{{ $post ->image }}" /> </li>
                        <li data-thumb="{{ $post ->image }}"> <img src="{{ $post ->image }}" /> </li>                        
                    </ul>
                </div>
            </div>
            <div class="mt-2 card">
                
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                @csrf
                <div class="about"> <h1 class="font-weight-bold text-red-50">{{ $post->title }}</h1>
                    <h4 class="font-weight-bold">{{ $post->price }} euros</h4>
                </div>
                @auth
                <div class="buttons"> <button class="btn btn-outline-warning btn-long cart">Add to Cart</button> 
                    <button class="btn btn-warning btn-long buy">Buy it Now</button>
                    <a href="{{route('update' , [ 'id' => $post->id ] ) }}" class="btn btn-warning btn-long buy">Edit</a>
                    <a href="{{route('delete' , [ 'id' => $post->id ] ) }}" class="btn btn-warning btn-long buy">erase</a>
                     <button class="btn btn-light wishlist"> <i class="fa fa-heart"></i> </button> 
                     <button class="btn btn-light wishlist"> <i class="fa fa-heart"></i> </button> 
                    </div>
                @endauth
                <hr>
                <div class="product-description">
                    <div><span class="font-weight-bold"> </span><span>  </span></div>
                    <div class="my-color">  </div>
                    <div class="flex-row d-flex align-items-center">   </div>
                    <div class="mt-2"> <span class="font-weight-bold">Description</span>
                        <p>{{ $post ->content }}</p>
                        
                    </div>
                    
                </div>
            </div>
            <div class="mt-2 card"> {{ $post ->content }}
                
            </div>
        </div>
    </div>
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
</script>
     
</div>

@endsection