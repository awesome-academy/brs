@extends('public.layout.app')
@section('content')
@include('public.layout.title')

<div class="video-submit-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="video-submit-content mb-50 p-30 bg-white box-shadow">
                    <div class="section-heading">
                        <h5>@lang('content.submit') @lang('content.book')</h5>
                    </div>

                    @include('common.errors')
                    @include('common.message')

                    <div class="video-info mt-30">
                        {!! Form::open(['method' => 'POST','files' => true]) !!}
                            <div class="form-group">
                                {{ Form::label('content_review', trans('content.content_review')) }}
                                {{ Form::textarea('content_review', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('content.category', trans('content.category')) }}
                                {!! Form::select('category', $category, null, ['class'=>'form-control', 'id' => 'category']) !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('content.book', trans('content.book')) }}
                                {!! Form::select('book_id', $category, null, ['class'=>'form-control', 'id' => 'book']) !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('content.status', trans('content.status')) }}
                                {!! Form::select('status',['0' => 'Chua Doc','1'=>'Da Doc'], null, ['class'=>'form-control', 'id' => 'category']) !!}
                            </div>
                            {!! Form::submit( trans('content.add'), ['class' => 'btn mag-btn mt-30']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
