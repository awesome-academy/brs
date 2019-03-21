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
                    @foreach($activities->comments as $comment)
                    <li class="single_comment_area">
                        <div class="comment-content d-flex">
                            <div class="comment-author">
                            </div>
                            <div class="comment-meta">
                                <a href="#" class="comment-date">{{ $comment->updated_at }}</a>
                                <h6>{{ $comment->user->name }}</h6>
                                <p>{{ $comment->body_comment }}</p>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="like">@lang('content.like')</a>
                                    <a href="#" class="reply">@lang('content.reply')</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>

            <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                <div class="section-heading">
                    <h5>@lang('content.reply')</h5>
                </div>

                <div class="contact-form-area">
                    {!! Form::open(['route' => 'comment.add', 'method' => 'POST']) !!}
                        <div class="row">
                            <div class="col-12">
                                {{ Form::textarea('body_comment', null, ['class' => 'form-control']) }}
                                {{ Form::hidden('review_id', $detail->book_id, ['id' => 'invisible_id']) }}
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
