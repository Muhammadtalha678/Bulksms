@extends('layouts.app')

@section('title')
	Create Category
@endsection

@section('mainContent')
	<div class="content">
	    <!-- BEGIN PAGE TITLE -->
	    <div class="page-title">
	        <h2>Add Category</h2>
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
	        </div>
	        <form action="/category/store" method="POST" >
	        	@csrf
	        <div class="grid-body no-border">
	          <div class="row column-seperation">
	            <div class="col-md-6">
	              <h4>Basic Information</h4>    
	                <div class="row form-row">
	                  <div class="col-md-12">
	                    <input name="title" id="inputTitle" type="text"  class="form-control" placeholder="Title">
	                  </div>
	                </div>
	                <div class="row form-row">
	                  <div class="col-md-12">
	                    <input name="slug" id="inputSlug" type="text"  class="form-control" placeholder="Slug" readonly>
	                  </div>
	                </div>
	            </div>
	            <div class="col-md-6">
	    
	              <h4>Meta Information</h4>
	                <div class="row form-row">
	                  <div class="col-md-12">
	                    <textarea name="meta_description" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions"></textarea>
	                  </div>
	                </div>
	                <div class="row form-row">
	                  <div class="col-md-12">
	                    <input type="text" name="meta_keyword" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput">
	                  </div>
	                </div>
	                <input type="HIDDEN" name="status" value="Active">
	            </div>
	          </div>
	        </div>
	      </div>
	   <div class="form-actions">
	      <button id="submit" class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
	      <a href="/category" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
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