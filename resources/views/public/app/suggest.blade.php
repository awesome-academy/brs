@extends('public.layout.app')
@section('content')
@include('public.layout.title')

<section class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="contact-content-area bg-white mb-30 p-30 box-shadow">
                    <div class="map-area mb-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
                    </div>

                    <div class="section-heading">
                        <h5>@lang('content.suggest')</h5>
                    </div>

                    <div class="contact-form-area">
                        {!! Form::open(['method' => 'POST','files' => true]) !!}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{ Form::textarea('name', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-12">
                                    {!! Form::submit( trans('content.add_task'), ['class' => 'btn mag-btn mt-30']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    <div class="single-sidebar-widget p-30">
                        <div class="social-followers-info">
                            <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>@lang('content.fans')</span></a>
                            <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>@lang('content.followers')</span></a>
                            <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>@lang('content.followers')</span></a>
                        </div>
                    </div>

                    <div class="single-sidebar-widget p-30">
                        <div class="section-heading">
                            <h5>@lang('content.category')</h5>
                        </div>

                        <ul class="catagory-widgets">
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> @lang('content.news_letter')</span> <span>35</span></a></li>
                        </ul>
                    </div>

                    <div class="single-sidebar-widget">
                        <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
                    </div>

                    @include('public.layout.news')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
