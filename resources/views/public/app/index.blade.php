@extends('public.layout.app')
@section('content')
<section class="mag-posts-area d-flex flex-wrap">
<div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
    <div class="single-sidebar-widget p-30">
        <div class="section-heading">
            <h5>@lang('content.popular')</h5>
        </div>

        <div class="single-blog-post d-flex">
            <div class="post-thumbnail">
                <img src="img/bg-img/4.jpg" alt="">
            </div>
            <div class="post-content">
                <a href="single-post.html" class="post-title">Global Travel And Vacations Luxury Travel</a>
                <div class="post-meta d-flex justify-content-between">
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                </div>
            </div>
        </div>
    </div>

    <div class="single-sidebar-widget">
        <a href="#" class="add-img"><img src="img/bg-img/add.png" alt=""></a>
    </div>

    <div class="single-sidebar-widget p-30">
        <div class="section-heading">
            <h5>@lang('content.lastest')</h5>
        </div>

        <div class="single-blog-post d-flex">
            <div class="post-thumbnail">
                <img src="img/bg-img/9.jpg" alt="">
            </div>
            <div class="post-content">
                <a href="single-post.html" class="post-title">Coventry City Guide Including Coventry</a>
                <div class="post-meta d-flex justify-content-between">
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">

    <div class="most-viewed-videos mb-30">
        <div class="section-heading">
            <h5>@lang('content.most_view')</h5>
        </div>

        <div class="most-viewed-videos-slide owl-carousel">

            <div class="single-blog-post style-4">
                <div class="post-thumbnail">
                    <img src="img/bg-img/29.jpg" alt="">
                    <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                    <span class="video-duration">09:27</span>
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                    <div class="post-meta d-flex">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sports-videos-area">
        <div class="section-heading">
            <h5>@lang('content.book')</h5>
        </div>
        @foreach($books as $books)
        <div class="sports-videos-slides owl-carousel mb-30">
            <div class="single-featured-post">
                <div class="post-thumbnail mb-50">
                    <img src="img/bg-img/22.jpg" alt="">
                    <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                </div>

                <div class="post-content">
                    <div class="post-meta">
                        <a href="#">MAY 8, 2018</a>
                        <a href="archive.html">lifestyle</a>
                    </div>
                    <a href="video-post.html" class="post-title">
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

<div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
    <div class="single-sidebar-widget p-30">
        <div class="social-followers-info">
            <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>@lang('content.fan')</span></a>
            <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>@lang('content.followers')</span></a>
            <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>@lang('content.subscribe')</span></a>
            <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>@lang('content.followers')</span></a>
        </div>
    </div>

    <div class="single-sidebar-widget p-30">
        <div class="section-heading">
            <h5>@lang('content.category')</h5>
        </div>

        <ul class="catagory-widgets">
            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> @lang('content.featured')</span> <span>35</span></a></li>
        </ul>
    </div>

    <div class="single-sidebar-widget">
        <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
    </div>

    <div class="single-sidebar-widget p-30">
        <div class="section-heading">
            <h5>@lang('content.followers')</h5>
        </div>

        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="img/bg-img/14.jpg" alt="">
            </div>
            <div class="youtube-channel-content">
                <a href="single-post.html" class="channel-title">@lang('content.name_user')</a>
                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> @lang('content.subscribe')</a>
            </div>
        </div>

    </div>

    @include('public.layout.news')
</div>
</section>
@endsection
