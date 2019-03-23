<header>
    <div class="header-top-area">
        <div class="container">
            <div class="header-top">
                <ul>
                    <li><span>@lang('content.language')</span> <a href="#">@lang('content.english')<i class="lnr lnr-chevron-down"></i></a>
                        <ul class="ht-dropdown">
                            <li><a href="#"><img src="img/header/1.jpg" alt="language-selector">@lang('content.english')</a></li>
                            <li><a href="#"><img src="img/header/2.jpg" alt="language-selector">@lang('content.vietnam')</a></li>
                        </ul>
                    </li>
                    <li><a href="#">@lang('content.my_accout')<i class="lnr lnr-chevron-down"></i></a>
                        <ul class="ht-dropdown">
                            <li><a href="login.html">@lang('content.login')</a></li>
                            <li><a href="register.html">@lang('content.register')</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-middle ptb-15">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-3 col-md-12">
                    <div class="logo mb-all-30">
                        <a href="index.html"><img src="img/logo/logo.png" alt="logo-image"></a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                    <div class="categorie-search-box">
                        <form action="#">
                            <div class="form-group">
                                <select class="bootstrap-select" name="poscats">
                                    <option value="0">@lang('content.categories')</option>
                                </select>
                            </div>
                            <input type="text" name="search" placeholder="I’m shopping for...">
                            <button><i class="lnr lnr-magnifier"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="cart-box mt-all-30">
                        <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                            <li><a href="#"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro">2</span><span>@lang('content.wishlist')</span></span></a>
                            </li>
                            <li><a href="#"><i class="lnr lnr-heart"></i><span class="my-cart"><span>@lang('content.wishlist')</span><span>@lang('content.wishlist')</span></span></a>
                            </li>
                            <li><a href="#"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong>@lang('content.sign_in')</strong></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom  header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <span class="categorie-title">@lang('content.title')</span>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 ">
                    <nav class="d-none d-lg-block">
                        <ul class="header-bottom-list d-flex">
                            @foreach($categories as $cate)
                                @if($cate->parent_id == config('setting.number_default'))
                                <li><a href="index.html">{{ $cate->cate_name }}<i class="fa fa-angle-down"></i></a>
                                    <ul class="ht-dropdown">
                                        @foreach($categories as $cate_parent)
                                            @if($cate_parent->parent_id == $cate->id)
                                            <li><a href="index.html">{{ $cate_parent->cate_name }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                            @endforeach
                            <li><a href="about.html">@lang('content.about')</a></li>
                            <li><a href="contact.html">@lang('content.contact')</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
