<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(){
        $books=Book::all();
        return view('books.book',['books'=>$books]); 
    }
    public function index2(){
        $books=Book::all();
        return view('borrowed_books.view',['books'=>$books]); 
    }
    public function show($id){
         $book=Book::find($id);
         return view('books.show',['book'=>$book]);
    }
    public function create(){
        return view('books.create');
    }
    public function store(Request $request){
        $book=$request->all();
        Book::create($book);
        // dd(Auth::user()->name);
        return redirect('books');
    }
    public function edit($id){
        $book=Book::find($id);
        return view('books.edit',['book'=>$book]);
    }
    public function update(Request $request,$id){
        $book=Book::find($id);
        $book->book_name=$request['book_name'];
        $book->author_name=$request['author_name'];
        $book->decription=$request['decription'];
        $book->save();
        return redirect('books');
    }
    public function destroy($id){
        Book::destroy($id);
        return redirect('books');
    }
    public function search(){
        $search_text=$_GET['query'];
        $books=Book::where('book_name','LIKE','%'.$search_text.'%')->get();
        return view('books/search',compact('books'));
    }
    public function index1(){
        $books=Book::all();
        return view('students.student',['books'=>$books]);
        
    }
    public function show1($id){
        $book=Book::find($id);
        return view('books.show',['book'=>$book]);
   }
   public function create1(){
       return view('students.create');
   }
   public function search1(){
    $search_text=$_GET['query'];
    $books=Book::where('book_name','LIKE','%'.$search_text.'%')->get();
    return view('students/search',compact('books'));
}
public function addToCart($id){
    $book=Book::find($id);
    $cart=session()->get('cart');
    $cart[$id]=[
        'id'=>$book->id,
        'book_name'=>$book->book_name,
        'author_name'=>$book->author_name,
        'decription'=>$book->decription,
       
    ];
    session()->put('cart',$cart);
    return redirect()->back()->with('success','you borrowed book');
}
public function backToShelf($id){
    $book=Book::find($id);
    return redirect()->back()->with('success','you borrowed book');
}
}
