@extends('welcome')
@section('content')
    <div id="content" class="p-4 pt-5 p-md-5 "><br><br><br><br>
        <h1 class="text-lg-center">CREATE A NEW POST</h1><br><br>

        <div class="mt-2 mb-3 container-fluid">
            <form class="row no-gutters " method="POST" action="{{ route('store') }}">
                @csrf
                <div class="pr-2 col-md-5 ">
                    <div class="mb-3">
                        <label for="title" class="form-label">TITLE</label>
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="big house">
                    </div><br><br>
                    <div>
                        <label for="title" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="title"
                            placeholder="45622 euros">
                    </div> <br><br>
                    <div>
                        <label for="category" class="form-label">category</label>
                        <input type="text" name="category" class="form-control" id="category"
                            placeholder="appartment, house , ">
                    </div> <br><br>
                    
                    
                </div>
                <div class="col-md-7">
                    <div class="mb-3">
                        <label for="content" class="form-label">Description</label>
                        <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                    </div><br><br>
                    <div class="mt-2 card"> 
                         
                            <label for="image" class="form-label">IMAGE</label>
                            <input type="text" name="image" class="form-control" id="image1"
                                placeholder="img link  "><br><br><br><br>
                        

                    </div>
                </div><br><br><button type="submit" class=" btn btn-primary">CREATE</button>
                 
            </form>
        </div>



    </div>
@endsection
