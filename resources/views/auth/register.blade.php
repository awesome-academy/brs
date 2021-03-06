@extends('layouts.app')

@section('content')
<div class="mag-login-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="login-content bg-white p-30 box-shadow">
                    <div class="section-heading">
                        <h5>@lang('content.back')</h5>
                    </div>

                    @include('common.errors')

                    {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}
                        <div class="form-group row">
                            {{ Form::label('name', trans('content.name_login'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::text('name', old('name'), ['class' => ['form-control', $errors->has('name') ? ' is-invalid' : ''], 'id' => 'name', 'required' => 'required', 'autofocus' => 'autofocus']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('email', trans('content.email_address'), ['class' => 'col-md-4 col-form-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('email', old('email'), ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'id' => 'email', 'required' => 'required']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password', trans('content.btn_password'), ['class' => 'col-md-4 col-form-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'id' => 'password', 'required' => 'required']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password-confirm', trans('content.confirm_pw'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'required' => 'required']) }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit( trans('content.btn_login'), ['class' => 'btn mag-btn mt-30']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
