<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCommentRequest $request)
    {
        $data = $request->validated();
        // dd($data);
        $comment = Comment::create([
            "name" => $data["name"],
            "country" => $data["country"],
            "text" => $data["comment"],
            "video_id" => $data["video_id"],
        ]);

        if(!$comment)
        {
            return redirect()->back()->with("error", "خطأ في اضافة التعليق");
        }

        return redirect()->back()->with("success", "تم اضافة التعليق بنجاح");
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        //
    }
}
