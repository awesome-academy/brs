@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@lang('content.book')
                    <small>@lang('content.add')</small>
                </h1>
            </div>
            <div class="col-lg-7">
                {!! Form::open(['route' => 'addb', 'method' => 'POST', 'files' => true]) !!}
                    <div class="form-group">
                        {{ Form::label('book_title', trans('content.name_book')) }}
                        {{ Form::text('book_title', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('author', trans('content.author')) }}
                        {{ Form::text('author', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('number_page', trans('content.number_page')) }}
                        {{ Form::text('number_page', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('content.book', trans('content.book')) }}
                        {{ Form::select('category_id', $select, null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('content.image', trans('content.image')) }}
                        {{ Form::file('image', ['class' => 'name']) }}
                    </div>
                    {!! Form::submit( trans('content.add'), ['class' => 'btn btn-default']) !!}
                    {!! Form::reset(trans('content.reset'), ['class' => 'btn btn-default']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
