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
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <label>{{ $review->name }}</label>
                                    </li>
                                </ul>
                                <p>{{ $review->content_review }}</p>
                                <p>
                                    {!! Form::open(['route' => ['book.destroy', $review->id], 'method' => 'DELETE', 'files' => true]) !!}
                                        {!! Form::submit( trans('content.delete'), ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                </p>
                                <p>
                                {{ Form::button('Edit', ['id' => 'Mybtn', 'class' => 'btn btn-primary']) }}
                                {!! Form::open(['route' => ['book.update', $review->id], 'method' => 'PUT', 'id' => 'MyForm']) !!}
                                    <div class="rating">
                                        {{ Form::radio('rating_point', '5', null, ['id' => 'star5']) }}
                                        {{ Form::label('star5', null) }}
                                        {{ Form::radio('rating_point', '4', null, ['id' => 'star4']) }}
                                        {{ Form::label('star4', null) }}
                                        {{ Form::radio('rating_point', '3', null, ['id' => 'star3']) }}
                                        {{ Form::label('star3', null) }}
                                        {{ Form::radio('rating_point', '2', null, ['id' => 'star2']) }}
                                        {{ Form::label('star2', null) }}
                                        {{ Form::radio('rating_point', '1', null, ['id' => 'star1']) }}
                                        {{ Form::label('star1', null) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::hidden('book_id', $detail->book_id) }}
                                        {{ Form::hidden('status', config('setting.number_default')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('content', trans('content.content')) }}
                                        {{ Form::textarea('content_review', null, ['class' => 'form-control']) }}
                                    </div>
                                    {!! Form::submit( trans('content.edit'), ['class' => 'return-customer-btn']) !!}
                                {!! Form::close() !!}
                                </p>
                            </div>
                        @endforeach

                        <div class="review border-default universal-padding mt-30">
                            <h2 class="review-title mb-30">@lang('content.review') <br><span>{{ $detail->book_title }}</span></h2>
                            <p class="review-mini-title">@lang('content.rating')</p>
                            <ul class="review-list">
                                <li>
                                    <span></span>
                                    <h1>@lang('content.rating')</h1>
                                </li>
                            </ul>

                            <div class="riview-field mt-40">
                                {!! Form::open(['route' => 'book.store','method' => 'POST']) !!}
                                    <div class="form-group">
                                        {{ Form::hidden('book_id', $detail->book_id) }}
                                        {{ Form::hidden('status', config('setting.number_default')) }}
                                        <div class="stars">
                                            {{ Form::radio('rating_point', '5', null, ['id' => 'star-5', 'class' => 'star star-5']) }}
                                            {{ Form::label('star-5', null, ['class' => 'star star-5']) }}
                                            {{ Form::radio('rating_point', '4', null, ['id' => 'star-4', 'class' => 'star star-4']) }}
                                            {{ Form::label('star-4', null, ['class' => 'star star-4']) }}
                                            {{ Form::radio('rating_point', '3', null, ['id' => 'star-3', 'class' => 'star star-3']) }}
                                            {{ Form::label('star-3', null, ['class' => 'star star-3']) }}
                                            {{ Form::radio('rating_point', '2', null, ['id' => 'star-2', 'class' => 'star star-2']) }}
                                            {{ Form::label('star-2', null, ['class' => 'star star-2']) }}
                                            {{ Form::radio('rating_point', '1', null, ['id' => 'star-1', 'class' => 'star star-1']) }}
                                            {{ Form::label('star-1', null, ['class' => 'star star-1']) }}
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('content', trans('content.content')) }}
                                        {{ Form::textarea('content_review', null, ['class' => 'form-control']) }}
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
