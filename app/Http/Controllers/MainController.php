<?php

namespace App\Http\Controllers;
use Illuminate\Http\request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function list()
    {
      // $data=DB::table('LS_001_SUBSCR')
      $data=DB::table('Uyeler')->get();
      // dd($data);

      // foreach($data as $key)
      // {
      // echo $key->TcKimlik."<br>";
      // }

      // ->where('FIRSTNAME','CEM İLKER')
      // ->orderBy('content','ASC')

      // foreach ($books as $key) {
      // echo $key->book_name."<br>";
      // dd($data);
      return view('list')->with('data',$data);
      }
    //
    // public function bookInsert()
    // {
    //   return view('bookInsert');
    // }
    //
    // public function test(Request $request)
    // {
    //   echo "selam";
    //   dd($request);
    // }
    //
    // public function bookInsertPost(Request $request)
    // {
    //
    //   if ($request->has('book_name')) {
    //     echo "Değer geldi!";
    // } else {
    //   echo "Cem İlker Karaduman";
    // }
    //
    //
    // //   $request->validate([
    // //     'book_name'=>'required',
    // //     'content'=>'required',
    // //     'author'=>'required',
    // //     'number_of_pages'=>'required',
    // //     'type'=>'required'
    // //   ]);
    // //
    // //   DB::table('books')-insert([
    // //     'book_name'=>$request->book_name,
    // //     'content'=>$request->content,
    // //     'author'=>$request->author,
    // //     'number_of_page'=>$request->number_of_page,
    // //     'type'=>$request->type
    // // ]);
    //
    //   //
    //   // return $request->all();
    // }
}
