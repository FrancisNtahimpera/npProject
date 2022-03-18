@extends('welcome')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5  ">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.villanovo.fr/photos/3491/phuket-villa-paradiso-1749451736599d13676d73e9.59993880.1920.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://d1ovmfk4rp967b.cloudfront.net/wp-content/uploads/2014/10/Casita378_17.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://fairmonttaghazoutbay.com/wp-content/uploads/2019/05/villa-saphir-projet.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- <img src="https://www.john-taylor.fr/vente-villa-dubailand-ori100-V0058DU-55746666.jpg?datetime=2020-05-11" class=" img-fluid" alt="..."> -->

    <div class=" p-md-3   row row-cols-lg-auto g-3 align-items-center">
      
    @if ($posts->count() > 0 )
       @foreach ( $posts  as $post )
           
      
        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card text-center">
                <img name="gallery" src="{{ $post ->image }}"
                    alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" name="name"> {{ $post ->title }}</h5>
                    <p class="card-text"name="description"> {{ $post ->content }}</p>
                        <span name="price">{{ $post ->price }} euros</span>
                        <p name ="category">{{ $post ->category }}</p>
                    <a href="{{route('details' , [ 'id' => $post->id ] ) }}" class="btn btn-primary">details</a>
                </div>
            </div>
            
           
        </div>
        @endforeach
        @else
            <span>pas de donnée verifier connection </span>
        @endif
         
    </div>
 

@endsection