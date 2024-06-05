<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.createPost', ['posts'=>$posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'nickname' => 'required',
        'name' => 'required',
        'description' => 'required',
        'date' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Получаем объект пользователя, если он аутентифицирован
    $user = Auth::user();

    // Проверяем, что объект пользователя существует
    if ($user) {
        // Добавляем ID пользователя к данным, которые будут сохранены
        $data['user_id'] = $user->id;
    } else {
        // Если пользователь не аутентифицирован, выполните необходимые действия
        return redirect()->back()->withErrors(['message' => 'User is not authenticated']);
    }

    // Обработка загрузки изображения и сохранение поста...

    // Создаем пост с данными
    Post::create($data);

    // Перенаправляем пользователя с сообщением об успешном создании поста
    return redirect()->route('dashboard')->with('success', 'Post created successfully!');
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $postId = Post::where($id)->first();

        if($postId){
            $postId->nickname = $request->name;
            $postId->name = $request->name;
            $postId->description = $request->description;
            $postId->date = $request->description;
            $postId->image = $request->image;
        }

        $data = $request->validate([
            'nickname' => 'required',
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::findOrFail($id);

        if($request->hasFile('image')){

            if($post->image){

                $oldImagePath = public_path('storage/images/' . $post->image);

                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $data['image'] = $imageName;
    
            $request->image->move(public_path('storage/images'), $imageName);
        }

        $post->update($data);

        $posts = Post::all();
        return view('post.createPost', ['posts'=>$posts]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if($post){
            $post->delete();
        }

        $posts = Post::all();
        return view('post.createPost', ['posts'=>$posts]);
    }
}
