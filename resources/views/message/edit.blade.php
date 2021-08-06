@extends('layouts.app')

@section('title')
	Manange Message
@endsection

@section('mainContent')
	<div class="content">
	                    <!-- BEGIN PAGE TITLE -->
	                    <div class="page-title">
	                        <h2>Edit SMS</h2>
	                    </div>
	                    <!-- END PAGE TITLE -->
	                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
	                    <div class="col-md-14">
	                        <div class="grid simple">
	                            <div class="grid-body no-border">
	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <div class="grid simple">
	                                            <div class="grid-title no-border">
	                                                &nbsp;
	                                            </div>
	                                            <form action="/message/editstore" method="POST" accept-charset="utf-8">
	                                            	@csrf
	                                            <div class="grid-body no-border">
	                                                <div class="row column-seperation">
	                                                    <div class="col-md-6">
	                                                        <h4>Basic Information</h4>
	                                                        <div class="row form-row">
	                                                            <div class="col-md-12">
	                                                                <input name="title" id="inputTitle" type="text"  class="form-control" placeholder="Title" value="{{$message->title}}">
	                                                            </div>
	                                                        </div>
	                                                        <div class="row form-row">
	                                                            <div class="col-md-12">
	                                                                <input name="slug" id="inputSlug" type="text"  class="form-control" placeholder="Slug" readonly value="{{$message->slug}}">
	                                                            </div>
	                                                        </div>
	                                                        <div class="row form-row">
	                                                            <div class="col-md-12">
	                                                                <select name="category_id" id="dropdownCategory" class="form-control">
	                                                                	@foreach ($category as $cat)
	                                                                    <option>-- Select Category --</option>
	                                                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
	                                                                	@endforeach
	                                                                </select>
	                                                                
	                                                            </div>
	                                                        </div>
	                                                        
	                                                        <div class="row form-row">
	                                                            <div class="col-md-12">
	                                                                <textarea name="message" id="inputSMS" rows="8" class="form-control" placeholder="SMS">{{$message->message}}</textarea>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="col-md-6">
	                                                        
	                                                        <h4>Meta Information</h4>
	                                                        <div class="row form-row">
	                                                            <div class="col-md-12">
	                                                                <textarea name="meta_description" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions">{{$message->meta_description}}</textarea>
	                                                            </div>
	                                                        </div>
	                                                        <div class="row form-row">
	                                                            <div class="col-md-12">
	                                                                <input type="text" name="meta_keyword" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="{{$message->meta_keyword}}">
	                                                            </div>
	                                                        </div>
	                                                        <input type="HIDDEN" name="id" value="{{$message->id}}">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-actions">
	                                            <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
	                                            <a href="/message" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
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