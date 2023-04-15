<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Post;
use Intervention\Image\Facades\Image;
class PostController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }


    public function create(){
        return view('posts.create');
    }


    public function store(){

        $data = request()->validate([
            'caption' =>['required', 'string'],
            'image' =>['required', 'image'],
        ]);

        $imagepath = request('image')->store('uploads','public');

        $image = Image::Make(public_path("/storage/{$imagepath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create(
            [
            'caption' => $data['caption'],

            'image' => $imagepath
            ]
        );
        return redirect()->route('profiles.show',['user'=>auth()->user()]);
    }
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }
}
