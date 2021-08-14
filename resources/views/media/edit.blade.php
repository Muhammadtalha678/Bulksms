@extends('layouts.app')

@section('title')
	Edit Media
@endsection

@section('mainContent')
	<div class="content">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h2>Edit Media</h2>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <div class="col-md-14">
                        @include('layouts.flash')
                        <div class="grid simple">
                            <div class="grid-body no-border">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="grid simple">
                                            <div class="grid-title no-border">
                                                &nbsp;
                                            </div>
                                            <div class="grid-body no-border">
                                                <div class="row column-seperation">
                                                    <div class="col-md-6">
                                                        <h4>Basic Information</h4>
                                                        <form action="/media/update" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                                                            @csrf
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <input name="title" id="inputTitle" type="text"  class="form-control" placeholder="Title" value="{{$media->title}}">
                                                            </div>
                                                        </div>
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <input name="slug" id="inputSlug" type="text"  class="form-control" placeholder="Slug"readonly value="{{$media->slug}}">
                                                            </div>
                                                        </div>
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <select name="dropdownMedia" id="dropdownMedia">
                                                                    <option>-- Select Media --</option>
                                                                    <option @if ($media->media_gallery == 'slideshow') {{'selected'}} @endif value="slideshow">Slideshow</option>
                                                                    <option  @if ($media->media_gallery == 'gallery') {{'selected'}} @endif value="gallery">Gallery</option>
                                                                    <option  @if ($media->media_gallery == 'video') {{'selected'}} @endif value="video">Video</option>
                                                                    <option  @if ($media->media_gallery == 'audio') {{'selected'}} @endif value="audio">Audio</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <textarea name="description" id="inputDescription" rows="8" class="form-control" placeholder="Description">{{$media->description}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <textarea name="embed_code" id="inputEmbedCode" rows="8" class="form-control" placeholder="Embed Code">{{$media->embed_code}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        
                                                        <h4>Meta Information</h4>
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <input type="file" name="media_img" id="file">
                                                            </div>
                                                        </div>
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <textarea name="meta_description" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions">{{$media->meta_description}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row form-row">
                                                            <div class="col-md-12">
                                                                <input type="text" name="meta_keyword" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="{{$media->meta_keyword}}">
                                                            </div>
                                                        </div>
                                                        <input type="HIDDEN" name="id" value="{{$media->id}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                                            <a href="/media" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
@endsection