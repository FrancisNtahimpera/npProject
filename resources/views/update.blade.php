@extends('welcome')
@section('content')
    <div id="content" class="p-4 p-md-5 pt-5  ">
        <h1 class="text-lg-center">UPDATE </h1>

        <div class="container-fluid mt-2 mb-3">
            <form class="row no-gutters " method="POST" action=" ">
                @csrf
                @method('PUT')
                <div class="col-md-5 pr-2">
                    <div class="mb-3">
                        <label for="title" class="form-label">TITLE</label>
                        <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="title"
                            placeholder="big house">
                    </div>
                    <div>
                        <label for="title" class="form-label">Price</label>
                        <input type="text" name="price" value="{{ $post->price }}" class="form-control" id="title"
                            placeholder="45622 euros">
                    </div> 
                    <div>
                        <label for="category" class="form-label">category</label>
                        <input type="text" name="category" value="{{ $post->category }}" class="form-control" id="category"
                            placeholder="appartment, house , ">
                    </div> 
                    
                    
                </div>
                <div class="col-md-7">
                    <div class="mb-3">
                        <label for="content" class="form-label">Description</label>
                        <input col="10" row="6" class="form-control " value="{{ $post->content }}" name="content" id="content" rows="3"></input>
                    </div>
                    <div class="card mt-2"> 
                         
                            <label for="image" class="form-label">IMAGE</label>
                            <input type="text" value="{{ $post->image }}" name="image" class="form-control" id="image1"
                                placeholder="img link  ">
                        

                    </div><button type="submit" class=" btn btn-primary">modifier</button>
                </div>
                 
            </form>
        </div>



    </div>
@endsection
