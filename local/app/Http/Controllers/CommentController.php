<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{
    public function add() {
    	$book_id = $_POST['book_id'];
    	$comment = new Comment;
    	$query = $comment->insert([
    		'book_id' = $request->input('book_id');
    		'user_id' = Auth::user()->id;
    		'description' = $request->input('description');
    	]);
    	if ($query > 0) {
            $alert = ['passes' => 'Thêm thành công'];
        }
        else {
            $alert = ['error' => 'Lỗi! Chưa lưu được thông tin!'];
        }
        
        return redirect()->back()->with($alert);
    }
}
