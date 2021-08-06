<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Message;
class MessageController extends Controller
{
    public function index()
    {
    	$category = Category::join('message','category.id','=','message.category_id')->get(['category.title','message.title','message.id','message.status']);
    	return view('message.index',compact('category'));
    }

     public function create()
    {
    	$category = Category::All();
    	return view('message.create',compact('category'));
    }

    public function store(Request $request)
    {
    	$data = $request->all();

    	$message = new Message ;

    	$message->title = $data['title'];
    	$message->slug = $data['slug'];
    	$message->category_id = $data['category_id'];
    	$message->message = $data['message'];
    	$message->meta_description = $data['meta_description'];
    	$message->meta_keyword = $data['meta_keyword'];
    	$message->status = 'Active';
    	$message->save();

    	return redirect('/message');
    }

     public function edit($edit_id)
    {
    	$category = Category::All();
    	$message = Message::find($edit_id)
;    	return view('message.edit',compact('message','category'));
    }

    public function editstore(Request $request)
    {
    	$data = $request->all();
    	$id = $data['id'];
    	$message = Message::find($id);

    	$message->title = $data['title'];
    	$message->slug = $data['slug'];
    	$message->category_id = $data['category_id'];
    	$message->message = $data['message'];
    	$message->meta_description = $data['meta_description'];
    	$message->meta_keyword = $data['meta_keyword']; 

    	$message->update();

    	return redirect('/message');
    }

    public function status($status_id)
    {
    	$message = Message::find($status_id);
    	$newStatus = ($message->status == 'Active') ? 'Deactive' : 'Active' ;
    	$message->status = $newStatus;
    	$message->update();
    	return redirect('/message'); 
    }

    public function delete($delete_id)
    {
    	$message = Message::find($delete_id);
    	$message->delete();
    	return redirect('/message');
    }
}
