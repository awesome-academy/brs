<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Book;
use App\Model\Review;
use App\Model\Categories;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Auth;

class BookReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajax()
    {
        $cat_id = Request::get('cat_id');
        $book = Book::where('category_id', '=', $cat_id)->get();

        return $book;
    }

    public function index()
    {
        $categories = Categories::all('cate_name');

        return view('public.app.add-review', compact('categories'));
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
    public function store(ReviewRequest $request)
    {
        $user = Auth::user();

        $review = new Review;
        $review->content_review = $request->content_review;
        $review->book_id = $request->book_id;
        $review->user_id = $request->user()->id;
        $review->status = $request->status;
        $review_add = $review->save();

        if($review_add > 0){

            return redirect()->route('book.index')->with('add_success', trans('content.add_success'));
        } else {

            return redirect()->route('add-review.index')->with('add_fail', trans('content.add_fail'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
