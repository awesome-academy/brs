@extends('public.layout.app')
@section('content')
@include('public.layout.title')

<section class="post-details-area">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-8">
            <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                <div class="blog-thumb mb-30">
                    <img src="img/bg-img/50.jpg" alt="">
                </div>
                <div class="blog-content">
                    <div class="post-meta">
                        <a href="#">{{ $detail->publication_date }}</a>
                        <a href="archive.html">@lang('content.archive')</a>
                    </div>
                    <h4 class="post-title">{{ $detail->book_title }}</h4>

                    <blockquote>
                        <h6 class="quote-text">{{ $detail->content_review }}</h6>
                        <h6 class="quote-name">{{ $detail->author }}</h6>
                    </blockquote>

                    <div class="like-dislike-share my-5">
                        <h4 class="share"><span>@lang('content.share')</span></h4>
                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> @lang('content.share')</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> @lang('content.share')</a>
                    </div>

                </div>
            </div>

            <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                <div class="section-heading">
                    <h5>@lang('content.related_book')</h5>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post style-4 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/28.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                <div class="section-heading">
                    <h5>@lang('content.comment')</h5>
                </div>

                <ol>
                    <li class="single_comment_area">
                        <div class="comment-content d-flex">
                            <div class="comment-author">
                                <img src="img/bg-img/53.jpg" alt="author">
                            </div>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                <div class="section-heading">
                    <h5>@lang('content.reply')</h5>
                </div>

                <div class="contact-form-area">
                    {!! Form::open(['method' => 'POST']) !!}
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-12 col-lg-6">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-12">
                                {{ Form::textarea('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-12">
                                {!! Form::submit( trans('content.conmment'), ['class' => 'btn mag-btn mt-30']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
