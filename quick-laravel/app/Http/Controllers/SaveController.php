<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class SaveController extends Controller
{
  public function create()
  {
    return view('save.create');
  }
  public function register(Request $req)
  {
    $b=[
      'name'=>$req->name,
      'total_pages'=>$req->total_pages,
      'finished_pages'=>$req->finished_pages,];
      DB::insert('insert into users (name,total_pages,finished_pages) values (:name,:mail,:age)',$b);
    return redirect('/Goal_view/register');
  }

  public function show($id)
  {
    return view('save.show', [
      'b' => Book::findOrFail($id)
    ]);
  }

  public function edit($id)
  {
    return view('save.edit', [
      'b' => Book::findOrFail($id)
    ]);
  }

  public function update(Request $req, $id)
  {
    $b = Book::findOrFail($id);
    $b->fill($req->except('_token', '_method'))->save();
    return redirect('hello/list');
  }

  // public function details($id)
  // {
  // return view('save.details', [
  //     'b' => Book::findOrFail($id)
  // ]);
  // }

  public function destroy($id)
  {
    $b = Book::findOrFail($id);
    $b->delete();
    return redirect('hello/list');
  }
}
