@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@lang('content.category')
                    <small>@lang('content.add')</small>
                </h1>
            </div>
            <div class="col-lg-7">
                {!! Form::open(['method' => 'POST']) !!}
                    <div class="form-group">
                        {{ Form::label('task-name', trans('content.category_parent')) }}
                        {!! Form::select('name', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('task-name', trans('content.name_category')) }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    {!! Form::submit(trans('content.add'), ['class' => 'btn btn-default']) !!}
                    {!! Form::reset(trans('content.reset'), ['class' => 'btn btn-default']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
