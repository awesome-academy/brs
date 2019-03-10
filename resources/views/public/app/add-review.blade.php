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

                    <div class="video-info mt-30">
                        {!! Form::open(['method' => 'POST','files' => true]) !!}
                            <div class="form-group">
                                {{ Form::label('task-name', trans('content.task')) }}
                                {{ Form::file('file', ['class' => 'form-control-file']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('task-name', trans('content.task')) }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('task-name', trans('content.task')) }}
                                <textarea name="video-description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                {{ Form::label('task-name', trans('content.task')) }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('task-name', trans('content.task')) }}
                                {{ Form::select('video-catagory', ['key' => 'value'], ['class' => 'form-control']) }}
                            </div>
                            {!! Form::submit( trans('content.add_task'), ['class' => 'btn mag-btn mt-30']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
