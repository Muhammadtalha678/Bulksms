@extends('layouts.app')

@section('title')
	Manage Media
@endsection

@section('mainContent')
	<div class="content">
	                    <!-- BEGIN PAGE TITLE -->
	                    <div class="page-title">
	                        <h2>Manage Media</h2>
	                    </div>
	                    <!-- END PAGE TITLE -->
	                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
	                    <div class="col-md-14">
	                        <div class="grid simple ">
	                            <div class="grid-body no-border">
	                                <br>
	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <a href="#" id="activeAll" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
	                                        <a href="#" id="deactiveAll" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
	                                        <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
	                                        <a href="/media/create" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
	                                    </div>
	                                </div>
	                                
	                                <br>
	                                <table class="table table-bordered table-hover">
	                                	@if ($media)
	                                    <thead>
	                                        <tr>
	                                            <th style="width:1%">
	                                                <div class="checkbox check-default">
	                                                    <input id="checkbox10" type="checkbox" value="1" class="checkall">
	                                                    <label for="checkbox10"></label>
	                                                </div>
	                                            </th>
	                                            <th style="width:40%">Title</th>
	                                            <th style="width:15%">Media Type</th>
	                                            <th style="width:15%">Media Image</th>
	                                            <th style="width:15%">Status</th>
	                                            <th style="width:20%">Manage</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    	@foreach ($media as $medias)
	                                    		
	                                        <tr>
	                                            <td>
	                                                <div class="checkbox check-default">
	                                                    <input id="checkbox10" type="checkbox" value="1" class="checkall">
	                                                    <label for="checkbox10"></label>
	                                                </div>
	                                            </td>
	                                            <td>{{$medias->title}}</td>
	                                            <td>{{$medias->media_gallery}}</td>
	                                            <td>
	                                            	<img src="/uploads/img/{{$medias->media_img}}" alt="" width="50" height="50">
	                                            </td>
	                                            <td>
	                                            	@if ($medias->status == 'Deactive')
	                                                <a class="singleStatus" href="/media/status/{{$medias->id}}" > <span class="label label-important btn-small"><i class="fa fa-thumbs-o-down"></i></span></a>
	                                            	@else
	                                                <a class="singleStatus" href="/media/status/{{$medias->id}}"> <span class="label label-info btn-small"><i class="fa fa-thumbs-o-up"></i></span> </a>
	                                            	@endif
	                                            </td>
	                                            <td>
	                                                <a href="/media/edit/{{$medias->id}}" class="label label-info"> <i class="fa fa-edit"></i></a>
	                                                <a href="/media/delete/{{$medias->id}}" class="label label-important singleDelete" onclick="return confirm('Are You want to Delete')"> <i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                    	@endforeach
	                                    </tbody>
	                                    @else
	                                    <div class="alert alert-danger">
	                                      No record Found
	                                    </div>
	                                	@endif
	                                </table>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END PLACE PAGE CONTENT HERE -->
	                </div>

@endsection