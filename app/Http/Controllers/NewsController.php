<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use App\Http\Requests;

class NewsController extends Controller
{
    public function getNewsList(Post $post)
    {
        $this->data['posts'] = $post->paginate(10);
        $this->data['latest_posts'] = $post->getLatestPosts(3);
        return view('news.list', $this->data);
    }

    public function getPost($id, Post $post)
    {
        $this->data['post'] = Post::find($id);
        $this->data['latest_posts'] = $post->getLatestPosts(3);
        return view('news.detail', $this->data);
    }
}
