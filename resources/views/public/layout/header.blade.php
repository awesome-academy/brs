<header class="header-area">
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">

            <nav class="classy-navbar justify-content-between" id="magNav">

                <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
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
                                <li class="active"><a href="index.html">@lang('content.home')</a></li>
                                <li><a href="archive.html">@lang('content.archive')</a></li>
                                <li><a href="#">@lang('content.pages')</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">@lang('content.home')</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">@lang('content.mega')</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">@lang('content.home')</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="about.html">@lang('content.profile')</a></li>
                                <li><a href="contact.html">@lang('content.suggest')</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="top-meta-data d-flex align-items-center">
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="submit-video.html" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">@lang('content.submit')</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
