<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('welcome',compact('books'));
    }
    public function create(){
        return view('create');
    }

     public function store(Request $request){
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'pages' => 'required|numeric|gt:0',
            'year' =>'required',
        ]);
        Book::create([
            'title' => $request->title,
            'author' =>$request->author,
            'pages' => $request->pages,
            'year' => $request->year,
        ]);
        return redirect('/');
    }
    public function edit(){ 
        $books = Book::all();
        return view('dataupdate',compact('books'));
    }

    public function update($id){
        $book = Book::findOrFail($id);
        return view('update',compact('book'));
    }

    public function destroy($id){
        Book::destroy($id);
        return back();
    }

    public function show($id){
        $book = Book::findOrFail($id);
        return view('show',compact('book'));
    }
    public function storeupdate(Request $request, $id){
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'pages' => 'required|numeric|gt:0',
            'year' =>'required',
        ]);
        Book::findorFail($id)->update([
            'title' => $request->title,
            'author' =>$request->author,
            'pages' => $request->pages,
            'year' => $request->year,
        ]);
        return redirect('/editbook');
    }
}
