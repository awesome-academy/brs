@extends('business.layouts.app')
@section('content')
<div class="blog ptb-100  ptb-sm-60">
    <div class="container">
        <div class="main-blog">
            <div class="row">
                @foreach($books as $book)
                <div class="col-lg-6 col-sm-12">
                    <div class="single-latest-blog">
                        <div class="blog-img">
                            <a href="#"><img src="{{ $book->image_path }}" alt="{{ $book->image_name }}"></a>
                        </div>
                        <div class="blog-desc">
                            <h4><a href="">{{ $book->book_title }}</a></h4>
                            <p>{{ $book->author }}</p>
                            <a class="readmore" href="single-blog.html">@lang('content.readmore')</a>
                            <a class="readmore" href="{{ route('wishlist', [$book->id, $book->book_title]) }}">@lang('content.add_wishlist')</a>
                        </div>
                        <div class="blog-date">
                            <span>{{ $book->publication_date }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $books->links() }}
        </div>
    </div>
</div>
@endsection
