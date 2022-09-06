<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Info;

class BSHomeController extends Controller
{
  public function home()
  {
      return view('all.home.home',
          ['books' => Book::orderBy('id' , 'DESC')->latest()->get()]);
  }

  public function details($id)
  {
      return view('all.details.details',
          ['books' => Book::find($id)]);
  }

  public function info($id)
  {
      return view('all.details.info',
          ['books' => Book::find($id)]);
  }

  public function addinfo(Request $request ,$id)
  {
        Info::newinfo($request,$id);
        return redirect('/dashboard')->with('message', 'Your Order SubmitEd.... please wait SomeTime , your order Given Within 7 days');
  }
}
