@extends('business.layouts.app')
@section('content')
<div class="main-product-thumbnail ptb-100 ptb-sm-60">
    <div class="container">
        <div class="thumb-bg">
            <div class="row">
                <div class="col-lg-5 mb-all-40">
                    <div class="tab-content">
                        <div id="thumb1" class="tab-pane fade show active">
                            <a data-fancybox="images" href="{{ $detail->image_name }}"><img src="{{ $detail->image_path }}" alt="product-view"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="thubnail-desc fix">
                        <h3 class="product-header">{{ $detail->book_title }}</h3>
                        <div class="rating-summary fix mtb-10">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="rating-feedback">
                                <a href="#">@lang('content.add_review')</a>
                            </div>
                        </div>
                        <p class="mb-20 pro-desc-details">{{ $detail->content_book }}</p>
                        <div class="box-quantity d-flex hot-product2">
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="" data-original-title="Add to Cart">@lang('content.add_wishlist')</a>
                                </div>
                                <div class="actions-primary">
                                    <a href="cart.html" title="" data-original-title="Add to Cart">@lang('content.mark')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="thumnail-desc pb-100 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="main-thumb-desc nav tabs-area" role="tablist">
                    <li><a class="active" data-toggle="tab" href="#dtail">@lang('content.book_detail')</a></li>
                    <li><a data-toggle="tab" href="#review">@lang('content.review')</a></li>
                </ul>
                <div class="tab-content thumb-content border-default">
                    <div id="dtail" class="tab-pane fade show active">
                        <p>{{ $detail->content_book }}</p>
                    </div>

                    <div id="review" class="tab-pane fade">
                        @foreach($list as $review )
                            <div class="review border-default universal-padding">
                                <div class="group-title">
                                    <h2>@lang('content.customer')</h2>
                                </div>
                                <h4 class="review-mini-title">@lang('content.title')</h4>
                                <ul class="review-list">
                                    <li>
                                        <span>@lang('content.rating')</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <label>{{ $review->name }}</label>
                                    </li>
                                </ul>
                                <p>{{ $review->content_review }}</p>
                            </div>
                        @endforeach

                        <div class="review border-default universal-padding mt-30">
                            <h2 class="review-title mb-30">@lang('content.review') <br><span>{{ $detail->book_title }}</span></h2>
                            <p class="review-mini-title">@lang('content.rating')</p>
                            <ul class="review-list">
                                <li>
                                    <span></span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                            </ul>

                            <div class="riview-field mt-40">
                                {!! Form::open(['method' => 'POST','files' => true]) !!}
                                    <div class="form-group">
                                        {{ Form::label('name', trans('content.name'), ['class' => 'req']) }}
                                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('content', trans('content.content')) }}
                                        {{ Form::textarea('content', null, ['class' => 'form-control']) }}
                                    </div>
                                    {!! Form::submit( trans('content.add_task'), ['class' => 'return-customer-btn']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
