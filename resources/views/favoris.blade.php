@extends('welcome')
@section('content')
<br><br><br>

<h1>Voici votre liste de favoris </h1>
<br>
<div class="container-fluid">
    
    <div class="list-group">
        @foreach ( $prod as $prod )
        
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $prod->product_id }} </h5>
            <small>3 days ago</small>
            <img width=" "src="https://cdn-appvillas.pressidium.com/wp-content/uploads/2019/03/Villa-Irida-private-villa-with-pool-corfu-greece-7.jpg" alt="" style="width:100px; height:auto" class="float-right img-thumbnail">
          </div>
          <p class="mb-1">Lorem ipsum dolor sit amet consectetur
               adipisicing elit. Aliquam et quisquam cupiditate
                earum enim dolorum unde, recusandae labore 
                consequuntur delectus temporibus. Placeat 
                recusandae enim repudiandae voluptates ex
                 architecto vero rem?.</p>
          <small>And some small print.</small>
          <button class="btn btn-danger"> effacer</button>
          <button class="btn btn-warning"> modifier</button>
        </a>
        
        @endforeach

        
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
            <img width=" "src="https://cdn-appvillas.pressidium.com/wp-content/uploads/2019/03/Villa-Irida-private-villa-with-pool-corfu-greece-7.jpg" alt="" style="width:100px; height:auto" class="float-right img-thumbnail">
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small class="text-muted">And some muted small print.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small class="text-muted">And some muted small print.</small>
        </a>
      </div>
</div>






@endsection