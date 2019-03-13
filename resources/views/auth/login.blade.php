@extends('public.layout.app')
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

                    {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
                        <div class="form-group row">
                            {{ Form::label('email', trans('content.name_login'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::text('email', old('email'), ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'id' => 'name', 'required' => 'required', 'autofocus' => 'autofocus']) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('email', trans('content.name_login'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'id' => 'password', 'required' => 'required']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    {{ Form::checkbox('remember', old('remember') ? 'checked' : '', true, ['class' => ['custom-control-input'] ,'id' => 'customControlAutosizing'] )}}

                                    {{ Form::label('remember', trans('content.remember_me'), ['class' => 'custom-control-label']) }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit( trans('content.btn_login'), ['class' => 'btn mag-btn mt-30']) !!}

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ trans('content.forgot_pw') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
