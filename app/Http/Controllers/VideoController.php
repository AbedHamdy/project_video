<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = video::with('coverImage')
            ->orderBy('created_at', 'desc')
            ->paginate();
        // dd($videos);
        
        return view('user.views.video' , compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.views.videos.create_video');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $video = video::with('coverImage' , "contentImages" , "comments" , "category")
            ->where('id', $id)
            ->first();
        // dd($video);
        
        if (!$video) 
        {
            return redirect()->back()->with('error', 'Video not found');
        }

        $relatedVideos = Video::with('coverImage')
            ->where('category_id', $video->category_id)
            ->where('id', '!=', $video->id)
            ->latest()
            ->take(4)
            ->get();
        // dd($relatedVideos);
        return view('user.views.show_video' , compact('video' , "relatedVideos"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(video $video)
    {
        //
    }
}
