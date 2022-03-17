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
        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card text-center">
                <img name="gallery" src="https://www.villanovo.fr/photos/4635/algarve-villa-isaya-17743459165c70017d4d54e8.58529773.1920.jpg"
                    alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" name="name">Appartement</h5>
                    <p class="card-text"name="description">lorem zeijiofz zijfez ozi zjoizejfz jfiojiozjfzojfozij ziefjezoefj
                        zioefjziojiezj fjozejifj zfjzoeifj</p>
                        <span name="price">5245 euros</span>
                        <p name ="category">categorie</p>
                    <a href="#" class="btn btn-primary">details</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card text-center">
                <img src="http://d1ovmfk4rp967b.cloudfront.net/wp-content/uploads/2014/10/Casita378_17.jpg" alt=""
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Appartement</h5>
                    <p class="card-text">lorem zeijiofz zijfez ozi zjoizejfz jfiojiozjfzojfozij ziefjezoefj
                        zioefjziojiezj fjozejifj zfjzoeifj</p>
                    <a href="#" class="btn btn-primary">details</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card text-center">
                <img src="https://www.villanovo.fr/photos/1624/ile-maurice-est-villa-heaven-28995237158063baee94746.02526971.1920.jpg"
                    alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Appartement</h5>
                    <p class="card-text">lorem zeijiofz zijfez ozi zjoizejfz jfiojiozjfzojfozij ziefjezoefj
                        zioefjziojiezj fjozejifj zfjzoeifj</p>
                    <a href="#" class="btn btn-primary">details</a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection