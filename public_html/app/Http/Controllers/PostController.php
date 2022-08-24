<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    private $limit = 10;

    public function index() {
        return response()->json(Post::with('user')->take($this->limit)->get());
    }

    public function save(Request $request) {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        Post::create($data);
    }
}
