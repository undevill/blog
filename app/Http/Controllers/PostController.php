<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->search) {
            $posts = Post::join('users', 'author_id', '=', 'users.id')
                ->where('title', 'like', '%'.$request->search.'%')
                ->orWhere('descr','like', '%'.$request->search.'%')
                ->orWhere('name','like', '%'.$request->search.'%')
                ->get();
            return view('news.index', compact('posts'));

        }
        $posts = Post::join('users', 'author_id', '=', 'users.id')
                 ->paginate(6);
        return view('news.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->descr = $request->descr;
        $post->author_id = Auth::user()->id;

        $post->save();
        return redirect()->route('news.index')->with('success','Новость успешно создана');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::join('users', 'author_id', '=', 'users.id')
                ->find($id);
        return view('news.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if ($post->author_id != \Auth::user()->id){
            return redirect()->route('news.index')->withErrors('Вы не можете редактировать
             данную новость');
        }
        return view('news.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        if ($post->author_id != Auth::user()->id) {
            return redirect()->route('news.index')->withErrors('Вы не можете редактировать
             данную новость');
        }
        $post->title = $request->title;
        $post->descr = $request->descr;

        $post->update();
        $id = $post->post_id;
        return redirect()->route('news.show', compact('id'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if ($post->author_id != Auth::user()->id) {
            return redirect()->route('news.index')->withErrors('Вы не можете редактировать
             данную новость');
        }
        $post->delete();
        return redirect()->route('news.index');
    }
}
