<div class="single-sidebar-widget p-30">
    <div class="section-heading">
        <h5>@lang('content.news_letter')</h5>
    </div>

    <div class="newsletter-form">
        <p>@lang('content.notification')</p>
        {!! Form::open(['method' => 'POST','files' => true]) !!}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
            {!! Form::submit( trans('content.add_task'), ['class' => 'btn mag-btn w-100']) !!}
        {!! Form::close() !!}
    </div>
</div>
