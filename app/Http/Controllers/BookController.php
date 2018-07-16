<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
	//add user book to database
    public function book() {
             
            
        Book::create(request()->except('_token'));

        return redirect('books');
    }

    // get all users books
    public function user_books() {

          $books = User::find(auth()->user()->id)->books;
    	  //$hotel = Book::find(3)->hotel;
    	 return view('home.book.showbooks', compact('books'));
    }

    public function delete_book($id) {

        Book::find($id)->delete();

        return back();
    }
}
