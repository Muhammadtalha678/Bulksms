<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
    	$categories = Category::orderby('id','asc')->get();
    	return view('category.index',compact('categories'));
    }

    public function create()
    {
    	return view('category.create');
    }

    
    public function store(Request $request)
    {
    	// $request->validate([
    	// 	'title' => 'required',
    	// 	'slug' => 'required',
    	// 	'meta_description' => 'required',
    	// 	'meta_keyword' => 'required',
    	// ]);
    	$data = $request->all();
    	$category = new Category;

    	$category->title = $data['title'];
    	$category->slug = $data['slug'];
    	$category->status = $data['status'];
    	$category->meta_description = $data['meta_description'];
    	$category->meta_keyword = $data['meta_keyword'];
    	$category->save();

    	return redirect('/category');
    }

     public function edit($edit_id)
    {
    	$category = Category::find($edit_id) ;
    	return view('category.edit',compact('category'));
    }
    public function editstore(Request $request)
    {
    	$data = $request->all();
    	$id = $data['id'];
    	$edit = Category::find($id);
    	$edit->title = $data['title'];
    	$edit->slug = $data['slug'];
    	$edit->meta_description = $data['meta_description'];
    	$edit->meta_keyword = $data['meta_keyword'];

    	$edit->update();
    	return redirect('/category');
    }
    public function status($status_id)
    {
    	$status = Category::find($status_id);
    	$newStatus = ($status->status == 'Active') ? 'Deactive' : 'Active' ;
    	// $values = ['status' => $newStatus];
    	$status->status = $newStatus;
    	$status->update();

    	return redirect('/category');
    }
    public function delete($delete_id)
    {
    	$delete = Category::find($delete_id);
    	$delete->delete();
    	return redirect('/category');
    }
}
