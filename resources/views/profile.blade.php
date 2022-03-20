@extends('welcome')
@section('content')
    <div id="content" class="container p-4 pt-5 m-auto p-md-5 col-m-3 col-sm-12">
        <br><br>
        <h1>PROFILE</h1><br><br>
        <p> Bonjour {{ Auth::user()->name }} et bienvenu sur ton profil utilisateur</p>
        <form action="/profile-update" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">NAME</label>
                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter name">

            </div><br><br>
            <div class="form-group">
                <label for="exampleInputPassword1">EMAIL</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="exampleInputPassword1"
                    placeholder="email">
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">modifier </button><br><br>
            <a href="/" class="btn btn-primary">continuer la visite  </a>
        </form>

    </div>
@endsection
