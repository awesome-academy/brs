<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categories;
use App\Model\Review;
use App\Model\Book;
use Illuminate\Support\Facades\View;
use DB;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $categories = Categories::all();
        View::share('categories', $categories);
    }

    public function index()
    {
        $books = Review::select('book_title', 'content_review')
        ->join('books', 'books.id', '=', 'reviews.book_id')->get();

        return view('public.app.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bookCategory($id)
    {
        $book_cate = DB::table('books')
        ->select('books.*', 'reviews.*')
        ->join('reviews', 'books.id', '=', 'reviews.book_id')
        ->where('books.category_id', $id)->paginate(config('setting.pagination'));

        return view('public.app.category', compact('book_cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = DB::table('books')
        ->select('books.*', 'reviews.*')
        ->join('reviews', 'books.id', '=', 'reviews.book_id')
        ->where('books.id', $id)->first();

        return view('public.app.detail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
