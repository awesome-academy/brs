<header class="header-area">
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">

            <nav class="classy-navbar justify-content-between" id="magNav">

                <a href="#" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="/book">@lang('content.home')</a></li>
                                @foreach($categories as $cate)
                                    @if($cate->parent_id == config('setting.number_default'))
                                        <li><a href="{{ route('category', [$cate->id]) }}">{{ $cate->cate_name }}</a>
                                            <ul class="dropdown">
                                                @foreach($categories as $cate_parent)
                                                    @if($cate_parent->parent_id == $cate->id)
                                                        <li><a href={{ route('category', [$cate_parent->id]) }}>{{ $cate_parent->cate_name }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach
                                <li><a href="#">@lang('content.profile')</a></li>
                                <li><a href="/suggest">@lang('content.suggest')</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="top-meta-data d-flex align-items-center">
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <a href="/login" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="/add" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span><span class="video-text">@lang('content.submit')</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
