<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\locations;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {
        return view('admin.books.index',[
            'active' => 'books',
            'books' => Books::all()
        ]);
    }

    public function create()
    {
        return view('admin.books.forms.create',[
            'active' => 'books',
            'locations' => locations::all()
        ]);
    }

    public function store(Request $request)
    {

       $data =  $request->validate([
            'title' => 'required|string|min:3',
            'author' => 'required| string| min:3',
            'quantity' => 'required|integer',
            'location_id' => 'required'
        ]);
       Books::create($data);
       return redirect()->route('book.index')->with([
           'message' => 'Book added Successfully',
           'classes' => 'green rounded'
       ]);
    }

    public function edit(Books $book)
    {
        $active = 'books';
        $locations = locations::all();
        return view('admin.books.forms.edit',compact('book','active','locations'));
    }

    public function update(Request $request, Books $book)
    {
        $data =  $request->validate([
            'title' => 'required|string|min:3',
            'author' => 'required| string| min:3',
            'quantity' => 'required|integer',
            'location_id' => 'required'
        ]);
        $book->update($data);
        return redirect()->route('book.index')->with([
            'message' => 'Book Updated Successfully',
            'classes' => 'green rounded'
        ]);
    }


    public function destroy(Books $book)
    {
        $book->delete();
        return  redirect()->route('book.index')->with([
            'message' => 'Deleted successfully',
            'classes' => 'green rounded'
        ]);
    }

    public function show()
    {
        return view('admin.books.forms.inventory',[
            'active' => 'books',
            'books' => Books::all(),
        ]);
    }
}
