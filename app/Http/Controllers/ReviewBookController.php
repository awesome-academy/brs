<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Review;
use App\Model\Book;
use App\Model\Categories;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class ReviewBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        /*$content = Cart::content();

        View::share('content', $content);*/
    }

    public function checkFail($check)
    {
        if($check > 0){

            return redirect()->back()->with('success', trans('content.success'));
        } else {

            return redirect()->back()->with('fail', trans('content.fail'));
        }
    }

    public function index()
    {
        $books = DB::table('books')->orderBy('id', 'DESC')->paginate(config('setting.pagination'));

        $content = Cart::content();

        return view('business.app.index', compact('books', 'content'));
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
        $user = Auth::user();

        $review = new Review;

        $review->content_review = $request->content_review;
        $review->book_id = $request->book_id;
        $review->rating_point = $request->rating_point;
        $review->user_id = $request->user()->id;
        $review->status = $request->status;
        $review_add = $review->save();

        return $this->checkFail($review_add);
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

        $list = DB::table('books')->select('books.*', 'reviews.*', 'users.*', 'reviews.id')->join('reviews', 'books.id', '=', 'reviews.book_id')->join('users', 'users.id', '=', 'reviews.user_id')->where('books.id', $id)->get();

        $content = Cart::content();

        return view('business.app.detail', compact('detail', 'list', 'content'));
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
        $edit = Review::findOrFail($id);

        $edit->content_review = $request->content_review;
        $edit->book_id = $request->book_id;
        $edit->rating_point = $request->rating_point;
        $edit->user_id = $request->user()->id;
        $edit->status = $request->status;
        $review_edit = $edit->update();

        return $this->checkFail($review_edit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $delete_review = $review->delete();

        return $this->checkFail($delete_review);
    }

    public function bookCategory($id)
    {
        $content = Cart::content();

        $book_cate = DB::table('books')->select('books.*')->where('books.category_id', $id)->paginate(config('setting.pagination'));

        return view('business.app.category', compact('book_cate', 'content'));
    }

    public function deleteWish($id)
    {
        $content = Cart::content();

        Cart::remove($id);

        return redirect()->back();
    }

    public function addWish($id)
    {
        $book_wishlist = DB::table('books')->select('books.*')->where('id', $id)->first();
        Cart::add(['id' => $id, 'name' => $book_wishlist->book_title, 'qty' => 1, 'price' => 0]);
        $content = Cart::content();

        return redirect()->back();
    }

    public function wishList()
    {
        $content = Cart::content();

        $wishList = Cart::content();

        return view('business.app.wishlist', compact('wishList', 'content'));
    }
}
