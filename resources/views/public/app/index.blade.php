@extends('public.layout.app')
@section('content')
<section class="mag-posts-area d-flex flex-wrap">
<div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">

</div>

<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
    <div class="sports-videos-area">
        <div class="section-heading">
            <h5>@lang('content.book')</h5>
        </div>
        @foreach($books as $books)
        <div class="sports-videos-slides owl-carousel mb-30">
            <div class="single-featured-post">
                <div class="post-thumbnail mb-50">
                    <img src="https://salt.tikicdn.com/cache/550x550/media/catalog/product/1/0/10_dieu_ran_danh_cho_doanh_nhan_copy_.jpg" alt="">
                    <a href="{{ route('book.detail', [$books->id]) }}" class="video-play"><i class="fa fa-play"></i></a>
                </div>

                <div class="post-content">
                    <div class="post-meta">
                        <a href="#">MAY 8, 2018</a>
                        <a href="archive.html">lifestyle</a>
                    </div>
                    <a href="{{ route('book.detail', [$books->id]) }}" class="post-title">
                        {{ $books->book_title }}
                    </a>
                    <p>
                        {{ $books->content_review }}
                    </p>
                </div>

                <div class="post-share-area d-flex align-items-center justify-content-between">

                    <div class="post-meta pl-3">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                    </div>

                    <div class="share-info">
                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>

                        <div class="all-share-btn d-flex">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
@endsection
