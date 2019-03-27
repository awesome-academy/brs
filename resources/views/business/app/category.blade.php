@extends('business.layouts.app')
@section('content')
<div class="blog ptb-100  ptb-sm-60">
    <div class="container">
        <div class="main-blog">
            <div class="row">
                @foreach($book_cate as $item)
                <div class="col-lg-6 col-sm-12">
                    <div class="single-latest-blog">
                        <div class="blog-img">
                            <a href="#"><img src="{{ $item->image_path }}" alt="{{ $item->image_name }}"></a>
                        </div>
                        <div class="blog-desc">
                            <h4><a href="">{{ $item->book_title }}</a></h4>
                            <p>{{ $item->author }}</p>
                            <a class="readmore" href="single-blog.html">@lang('content.readmore')</a>
                            <a class="readmore" href="{{ route('wishlist', [$item->id, $item->book_title]) }}">@lang('content.add_wishlist')</a>
                        </div>
                        <div class="blog-date">
                            <span>{{ $item->publication_date }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $book_cate->links() }}
        </div>
    </div>
</div>
@endsection
