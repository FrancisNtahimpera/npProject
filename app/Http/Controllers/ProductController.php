<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts=Product::all();
        //dd($posts);

        return view('products' ,[
            'posts' => $posts
        ] );    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        Product::create([
            'title' => $request->title ,
            'content' => $request->content ,
            'image' => $request->image ,
            'price' => $request->price ,
            'category' => $request->category ,

        ]);
        // $post = new Product();
         

        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->image = $request->image;
        // $post->price = $request->price;
        // $post->category = $request->category;

        // $post->save;
        dd('post cre');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Product::findOrFail($id);
       
        return view('details' , [
            'post' =>$post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post =Product::find($id);
        //dd($post);
        return view('update' ,[
            'post' => $post
        ] );
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          
        $post =Product::find($id);
        //dd($post);
        $post->title =  $request->title;
        $post->image =  $request->image;
        $post->content =  $request->content;
        $post->price =  $request->price;
        $post->update();

        return redirect('details')->with('status', 'modification ok okaaaay');

       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post= Product::find($id);
        $post->delete();

        dd($post);


    }
}
