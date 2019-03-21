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
                            <img src="https://salt.tikicdn.com/cache/550x550/media/catalog/product/1/0/10_dieu_ran_danh_cho_doanh_nhan_copy_.jpg" alt="">
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">{{ $item->publication_date }}</a>
                                <a href="{{ route('book.detail', [$item->book_id]) }}">{{ $item->author }}</a>
                            </div>
                            <a href="{{ route('book.detail', [$item->book_id]) }}" class="post-title">{{ $item->book_title }}</a>
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
