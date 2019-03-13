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
                {!! Form::open(['method' => 'POST']) !!}
                    <div class="form-group">
                        {{ Form::label('book-name', trans('content.name_book')) }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('task-name', trans('content.review')) }}
                        {!! Form::textarea('name', '', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('task-name', trans('content.status')) }}
                        {!! Form::radio('name', '1', true, ['class' => 'radio-inline']) !!}
                        {{ Form::label('task-name', trans('content.status')) }}
                        {!! Form::radio('name', '2', false, ['class' => 'radio-inline']) !!}
                    </div>
                    {!! Form::submit( trans('content.add'), ['class' => 'btn btn-default']) !!}
                    {!! Form::reset(trans('content.reset'), ['class' => 'btn btn-default']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
