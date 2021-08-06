@extends('layouts.app')

@section('title')
	Manage Category
@endsection

@section('mainContent')
	<div class="content">
	    <!-- BEGIN PAGE TITLE -->
	    <div class="page-title">
	        <h2>Manage Category</h2>
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
	                        <a href="/category/create" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
	                    </div>
	                </div>
	                    
	                <br>
	                   <table class="table table-bordered table-hover">
	                    <thead>
	                        <tr>
	                            <th style="width:1%">
	                                <div class="checkbox check-default">
	                                    <input id="checkbox" type="checkbox" value="1" class="checkall">
	                                    <label for="checkbox"></label>
	                                </div>
	                            </th>
	                            <th style="width:40%">Title</th>
	                            <th style="width:10%">Status</th>
	                            <th style="width:10%">Manage</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        	@foreach ($categories as $category)
	                        <tr>
	                            <td>
	                                <div class="checkbox check-default">
	                                    <input id="checkbox" type="checkbox" value="1" class="checkall">
	                                    <label for="checkbox"></label>
	                                </div>
	                            </td>
	                            <td>{{$category->title}}</td>
	                            <td>
	                            	@if ($category->status == 'Deactive')
	                                <a class="singleStatus" href="/category/status/{{$category->id}}" > <span class="label label-important btn-small"><i class="fa fa-thumbs-o-down"></i></span></a>
	                                @else
	                                   <a class="singleStatus" href="/category/status/{{$category->id}}"> <span class="label label-info btn-small"><i class="fa fa-thumbs-o-up"></i></span> </a>
	                            	@endif
	                            </td>
	                            <td>
	                                <a href="/category/edit/{{$category->id}}" class="label label-info">Edit&nbsp; <i class="fa fa-edit"></i></a> <br>	
	                                <form action="/category/delete/{{$category->id}}" method="POST" accept-charset="utf-8" class="form-inline">
	                                	@csrf
	                                <button type="submit" class="label label-important singleDelete" onclick="return confirm('Do you want to delete? ')"> <i class="fa fa-trash-o"></i></button>
	                                	
	                                </form>
	                            </td>
	                        </tr>
	                        	@endforeach
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	    <!-- END PLACE PAGE CONTENT HERE -->
	</div>
@endsection