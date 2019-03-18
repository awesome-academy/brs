@extends('public.layout.app')
@section('content')
@include('public.layout.title')
<div class="archive-post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                    @foreach($book_cate as $item)
                    <div class="single-catagory-post d-flex flex-wrap">

                        <div class="post-thumbnail bg-img">
                            <a href="#" class="video-play"><i class="fa fa-play"></i></a>
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">{{ $item->publication_date }}</a>
                                <a href="#">{{ $item->book_title }}</a>
                            </div>
                            <a href="#" class="post-title">{{ $item->author }}</a>
                            <p>
                                {{ $item->content_review }}
                            </p>
                        </div>
                    </div>
                    @endforeach

                    <nav>
                        <ul class="pagination">
                            <li class="page-item active">
                                {{ $book_cate->links() }}
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
