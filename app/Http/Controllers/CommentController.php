<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->book_id = $request->book_id;
        $result = $comment->save();
        if ($result) {
            return  ["Result" => "data has been created"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }

    function update(Request $request)
    {
        $comment = Comment::find($request->id);
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->book_id = $request->book_id;
        $result = $comment->save();
        if ($result) {
            return  ["Result" => "data has been update"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }

    function delete(Request $request)
    {
        $data = Comment::find($request->id);
        $result = $data->delete();
        if ($result) {
            return  ["Result" => "data has been deleted"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }
}
