<?php

namespace App\Http\Controllers;

use App\Models\videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        $videos = videos::all();
        return $videos;
    }

    public function store(Request $request)
    {
        $video = videos::create($request->all());
        return $video;
    }

    public function edit(videos $videos)
    {
        //
    }

    public function update(Request $request, videos $videos)
    {
        //
    }

    public function delete($idvideo)
    {
        $video = videos::find($idvideo);
        $video->delete();

        return $video;
    }
}
