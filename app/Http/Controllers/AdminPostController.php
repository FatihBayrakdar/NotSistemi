<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'Yazili1' => 'required',
            'Yazili2' => 'required',
            'Yazili3' => 'required',
            'Performans1' => 'required',
            'Performans2' => 'required',
            'Proje' => 'required',
            'Ortalama' => 'required',
        ]);

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'Yazili1' => 'required',
            'Yazili2' => 'required',
            'Yazili3' => 'required',
            'Performans1' => 'required',
            'Performans2' => 'required',
            'Proje' => 'required',
            'Ortalama' => 'required',
        ]);

        $post->update($attributes);

        return back()->with('Başarılı', 'Notlar Güncellendi!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('Başarılı', 'Öğrenci Silindi!');
    }


}
