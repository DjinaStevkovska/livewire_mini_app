<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'Controller@home');

Route::get('/post/{post}', function (Request $request, Post $post)
{    
    return view('post', [
        'post' => $post,
    ]);

});

Route::get('/post/{post}/edit', function (Post $post)
{
    return view('edit-post', [
        'post' => $post,
    ]);

});




// Route::post('/post/{post}', function (Request $request, Post $post)
// {
//     $request->validate([
//         'title' => 'required',
//         'content' => 'required',
//         'photo' => 'nullable|sometimes|image|max:5000'
//     ]);
//     $post->update([
//         'title' => $request->title,
//         'content' => $request->content,
//         'photo' => $request->photo ? $request->file('photo')->store('photos', 'public') : $post->photo,
//     ]);

//     return back();
//     // ->with('success', 'Post updated successfully!');
// })->name('post.update');