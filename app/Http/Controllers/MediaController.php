<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::All();
        return view('media.index',compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'embed_code' => 'required',
            'media_img' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required'
        ]);
        $imageName = time().'.'.$request->media_img->extension();  
        $request->media_img->move(public_path('/uploads/img'), $imageName);

        $media = new Media;
        $media->title = $request->title;
        $media->slug = $request->slug;
        $media->media_gallery = $request->media_gallery;
        $media->description = $request->description;
        $media->embed_code = $request->embed_code;
        $media->media_img = $imageName;
        $media->meta_description = $request->meta_description;
        $media->meta_keyword = $request->meta_keyword;
        $media->status = 'Active';
        $media->save();

        return redirect('/media');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    // public function show(Media $media)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit($media_id)
    {
        $media = Media::find($media_id);
        return view('media.edit',compact('media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'embed_code' => 'required',
            'media_img' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required'
        ]);
        $id = $request->id;
        $media = Media::find($id);
        $imageName = time().'.'.$request->media_img->extension();  
        $request->media_img->move(public_path('/uploads/img'), $imageName);
        if (file_exists(public_path('/uploads/img/'.$media->media_img))) {
            unlink(public_path('/uploads/img/'.$media->media_img));
        }
        $media->title = $request->title;
        $media->slug = $request->slug;
        $media->media_gallery = $request->media_gallery;
        $media->description = $request->description;
        $media->embed_code = $request->embed_code;
        $media->media_img = $imageName;
        $media->meta_description = $request->meta_description;
        $media->meta_keyword = $request->meta_keyword;
        $media->update();
        return redirect('/media')->with('success','Media Updated Successfuly');
        // var_dump($media);exit();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($media_id)
    {
        $media  = Media::find($media_id);
        if (file_exists(public_path('/uploads/img/'.$media->media_img))) {
            unlink(public_path('/uploads/img/'.$media->media_img));
        }
        $media->delete();
        return redirect('/media');
    }
    public function status($status_id)
    {
        $media = Media::find($status_id);
        $newstatus = ($media->status == 'Active') ? 'Deactive' : 'Active' ;
        $media->status = $newstatus;
        $media->update();
        return redirect('/media');
    }
}
