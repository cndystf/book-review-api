<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Comment;

class BookController extends Controller
{
    function index($id = null) 
    {
        return $id ?
        Book::find($id)
        :
        Book::all();
    }

    function store(Request $request)
    {
        $data = new Book;
        $data->title = $request->title;
        $data->author = $request->author;
        $data->about_author = $request->about_author;
        $data->review = $request->review;
        $data->price = $request->price;
        $data->rating = $request->rating;
        $data->picture = $request->picture;
        $result = $data->save();
        if ($result) {
            return  ["Result" => "data has been saved"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }

    function update(Request $request, $id)
    {
        $data = Book::find($id);
        $data->title = $request->title;
        $data->author = $request->author;
        $data->about_author = $request->about_author;
        $data->review = $request->review;
        $data->price = $request->price;
        $data->rating = $request->rating;
        $data->picture = $request->picture;
        $result = $data->save();
        if ($result) {
            return  ["Result" => "data has been updated"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }

    function delete($id)
    {
        $data = Book::find($id);
        $result = $data->delete();
        if ($result) {
            return  ["Result" => "data has been deleted"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }

    function comment($id)
    {
        return Comment::where('book_id', '=', $id)->get();
    }
}
