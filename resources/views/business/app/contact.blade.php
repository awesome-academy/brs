@extends('business.layouts.app')
@section('content')
<div class="contact-area ptb-100 ptb-sm-60">
    <div class="container">
        <h3 class="mb-20">@lang('content.suggest')</h3>
        {!! Form::open(['route' => 'mail.send', 'method' => 'POST','files' => true]) !!}
            <div class="address-wrapper row">
                <div class="col-md-6">
                    <div class="address-email">
                        {{ Form::label('mail', trans('content.mail')) }}
                        {{ Form::text('mail', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address-web">
                        {{ Form::label('book_title', trans('content.book_title')) }}
                        {{ Form::text('book_title', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="address-subject">
                        {{ Form::label('author', trans('content.author')) }}
                        {{ Form::text('author', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="address-textarea">
                        {{ Form::label('content', trans('content.content')) }}
                        {{ Form::textarea('content', null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <p class="form-message"></p>
            <div class="footer-content mail-content clearfix">
                <div class="send-email float-md-right">
                    {!! Form::submit( trans('content.add_task'), ['class' => 'return-customer-btn']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
