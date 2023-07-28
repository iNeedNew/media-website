<?php

namespace App\Http\Controllers\Site\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostDetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('site.post');
    }
}
