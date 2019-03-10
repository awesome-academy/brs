@extends('public.layout.app')
@section('content')
@include('public.layout.title')

<section class="post-details-area">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-8">
            <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                <div class="blog-thumb mb-30">
                    <img src="img/bg-img/50.jpg" alt="">
                </div>
                <div class="blog-content">
                    <div class="post-meta">
                        <a href="#">MAY 8, 2018</a>
                        <a href="archive.html">@lang('content.archive')</a>
                    </div>
                    <h4 class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</h4>
                    <div class="post-meta-2">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur sita adipiscing elit. Proin molestie accumsan orci suneget placerat. Etiama faucibuss orci quis posuere vestibulu. Ut id purusos ultricies, dictumax quam id, ullamcorper urna. Curabitur sitdown nisi vitae nisi vestotana vestibul ut non massa. Aliquam erat volutpat. Morbi nect nunc et orci euismode finibus. Donec lobortis venenatis turpis. Aenean act congue arcu, nect porttitor magna. Nam consequa ligula nibh, in maximus gravida. Vivamus nuornare masa. Quisque sed honcus leo, ullamcorper auctor mi. Maecenas mollis purus, mattis nisl condimentum. Nam eros elementu, congue diam imperdiet, interdum tellus.</p>

                    <p>Mauris dapibus turpis vel ialis tempor. Morbi turpis leon, pulvinar vitae convallis vitae, scelerisque necto eros. Suspendisse vitae pharetra risus. Pellentesque varius, felis in lacinia faucibus, ipsum liula aliquam nulla, non honcus nunc ipsum eu risus. Nunc finibus euismod magna sagittis. Sed dictum libero consectetur.</p>

                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <p>Vivamus nisl metus, dictum sit amet porttitor sit amet, lobortis sit amet ipsum. Mauris ut quam non magna gravida egestas. Sed rutrum sapien eget lorem bibendum ullamcorper.</p>
                            <ul>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Duis blandit maximus tellus, sagittis volutpat tellus sandi.</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Etiam vel auctor elit. Usaceros suscipit, lobortis felis non.</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Integer sagittis finibus nequer, euster tincidunt misult.</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Pellentesque euismod semeget diam ege</li>
                            </ul>
                            <p>Aliquam venenatis dui elit, et viverra mi maximus quis. Etiam vel auctor elit. Ut ac eros suscipit, lobortis felison, vulputate tellus. Suspendisse hendrerit aliquet lectus.</p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <img class="mb-15" src="img/bg-img/51.jpg" alt="">
                        </div>
                    </div>

                    <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>

                    <blockquote>
                        <h6 class="quote-text">“Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it's really how it works. The design of the Mac wasn't what it looked like, although that was part of it.”</h6>
                        <h6 class="quote-name">STEVE JOBS</h6>
                    </blockquote>

                    <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>

                    <div class="like-dislike-share my-5">
                        <h4 class="share">240<span>@lang('content.share')</span></h4>
                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> @lang('content.share') on Facebook</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> @lang('content.share') on Twitter</a>
                    </div>

                    <div class="post-author d-flex align-items-center">
                        <div class="post-author-thumb">
                            <img src="img/bg-img/52.jpg" alt="">
                        </div>
                        <div class="post-author-desc pl-4">
                            <a href="#" class="author-name">Alan Shaerer</a>
                            <p>Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia est.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                <div class="section-heading">
                    <h5>@lang('content.related_book')</h5>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post style-4 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/29.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post style-4 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/30.jpg" alt="">
                                <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                                <span class="video-duration">09:27</span>
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Will The Democrats Be Able To Reverse</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post style-4 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/28.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                <div class="section-heading">
                    <h5>@lang('content.comment')</h5>
                </div>

                <ol>
                    <li class="single_comment_area">
                        <div class="comment-content d-flex">
                            <div class="comment-author">
                                <img src="img/bg-img/53.jpg" alt="author">
                            </div>
                            <div class="comment-meta">
                                <a href="#" class="comment-date">27 Aug 2019</a>
                                <h6>Tomas Mandy</h6>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="like">@lang('content.like')</a>
                                    <a href="#" class="reply">@lang('content.reply')</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                <div class="section-heading">
                    <h5>@lang('content.reply')</h5>
                </div>

                <div class="contact-form-area">
                    {!! Form::open(['method' => 'POST']) !!}
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-12 col-lg-6">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-12">
                                {{ Form::textarea('name', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-12">
                                {!! Form::submit( trans('content.conmment'), ['class' => 'btn mag-btn mt-30']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
