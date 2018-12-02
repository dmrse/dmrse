<?php

namespace Dmrse\Http\Controllers\Contest;

use Carbon\Carbon;
use Dmrse\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Dmrse\Video;
use Dmrse\Statistics;
use Illuminate\Support\Facades\Auth;

class ContestController extends Controller
{
    public function index()
    {
        $videos =  Video::select(['video.id', 'statistics.number_voices', 'video.video'])->join('statistics', 'video.id', '=', 'statistics.id_video')->get();



        return view('contest.index' ,compact('videos'));
    }

    public function create()
    {
        return view('contest.create');
    }

    public function update(Request $request)
    {
        $id_video = $request->id_video;

        Statistics::where('id_video',$id_video)->increment('number_voices');
        $result = Statistics::where('id_video',$id_video)->value('number_voices');

        return $result;
    }

    public function upload(Request $request)
    {

            $file = $request->file('userfile');
            $upload_folder = 'public/folder';
            $extension =  $file->getClientOriginalExtension();
            $filename = hash('sha256',$file->getClientOriginalName()).'.'.$extension;

            Storage::putFileAs($upload_folder, $file, $filename);


                $video = new Video();

                $video->video = $filename;
                $video->user_id = Auth::user()->id;

                $video->save();

                $statistics = new Statistics();

                $statistics->id_video = $video->id;
                $statistics->number_voices = 0;

            $statistics->save();



        return redirect('contest');
    }
}
