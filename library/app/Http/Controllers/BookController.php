<?php

namespace App\Http\Controllers;

use id;
use App\Models\book;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class BookController extends Controller
{
    //SHOW ALL BOOKS
    public function index()
    {
        return view('books.index', [
            'books' => book::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    //SHOW SINGLE BOOK
    public function show(book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }

    //SHOW CREATE FORM
    public function create()
    {
        return view('books.create');
    }

    public function delete($id)
    {
        $book = book::find($id);
        $book->delete();
        return view('layout');
    }


    //STORE BOOK DATA
    public function store(Request $request)
    {
        // dd(($request->all()));
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'release_date' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        book::create($formFields);

        return redirect('/');
    }

    //SHOW EDIT FORM
    public function edit(book $book)
    {
        // dd($book);
        return view('books.edit', ['book' => $book]);
    }

     //UPDATE BOOK DATA
     public function update(Request $request, book $book)
     {
         $formFields = $request->validate([
             'title' => 'required',
             'author' => 'required',
             'release_date' => 'required',
             'status' => 'required',
             'description' => 'required',
         ]);
 
         $book->update($formFields);
 
         return back();
     }
}
