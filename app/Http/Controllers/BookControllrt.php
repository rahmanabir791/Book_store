<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookControllrt extends Controller
{
  public function sellbook()
  {
      return view('all.add.addbook');
  }

  public function addbook(Request $request)
  {
    Book::newbook($request);
    return redirect()->back()->with('message' , 'Your Book Submitted ');
  }
  public function details($id)
  {

  }
}
