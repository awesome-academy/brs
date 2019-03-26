<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Review;
use App\Model\Book;
use App\Model\Categories;
use Illuminate\Support\Facades\View;

class ReviewBookController extends Controller
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
        $books = DB::table('books')->orderBy('id', 'DESC')->paginate(config('setting.pagination'));

        return view('business.app.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $detail = DB::table('books')->select('books.*', 'reviews.*')->join('reviews', 'books.id', '=', 'reviews.book_id')->where('books.id', $id)->first();

        $list = DB::table('books')->select('books.*', 'reviews.*', 'users.*')->join('reviews', 'books.id', '=', 'reviews.book_id')->join('users', 'users.id', '=', 'reviews.user_id')->where('books.id', $id)->get();

        return view('business.app.detail', compact('detail', 'list'));
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
