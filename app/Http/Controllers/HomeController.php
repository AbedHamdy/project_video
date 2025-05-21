<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::with('coverImage')
            ->where('feature', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view('user.views.home' , compact('videos'));
    }
}
