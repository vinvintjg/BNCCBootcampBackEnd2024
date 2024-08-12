<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
     // getBooks buat tampilan isinya

    // buat tampilan form
    public function getCreatePage(){

        return view('create');
    }
    // buat function post book
    public function createBook(Request $request){

        Book::create([
            'title'=> $request->title,
            'author'=> $request->author,
            'price'=> $request->price,
            'release'=> $request->release,
        ]);

        return redirect(route('getBooks'));
    }

    public function getBooks(){
        $books = Book::all();
        return view('view', compact('books'));
    }


   
}
