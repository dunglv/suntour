<div class="overlay overlay-simplegenie">
            <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
            <nav>
                <ul>
                    <li><a href="{{ route('ui.home') }}"><i class="fa fa-home"></i> 
                        <div class="i-a">
                            <span data-hover="Home">Home</span>
                        </div>
                    </a>
                    </li>
                    <li>
                        <a href="{{ route('ui.blog') }}" class="scroll">
                        <i class="fa fa-book"></i> 
                        <div class="i-a">
                            <span data-hover="Blog">Blog</span>
                        </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <section class="header-w3ls">
            <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <div class="contact-bnr-w3-agile">
                <div class="bottons-agileits-w3layouts">
                    <div class="fn page-scroll search-scroll">
                        <input type="text" placeholder="Search..." class="search-i-top">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="fn page-scroll lang-scroll">
                        <span><i class="fa fa-globe"></i> {{ trans('ui_admin.lang_label.'.app()->getLocale()) }}</span>
                        <ul>
                            <li><a href="{{ route('ad.lang.set', ['lang' => 'en']) }}"><span style="    background-position: 2px -40px;"></span>{{ trans('ui_admin.lang_label.en') }}</a></li>
                            <li><a href="{{ route('ad.lang.set', ['lang' => 'ja']) }}" ><span style="    background-position: 2px -40px;"></span>{{ trans('ui_admin.lang_label.ja') }}</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <h1><a href="{{ route('ui.home') }}">
                <img src="{{ url('/') }}/images/ui/logo.png" alt="">
            </a></h1>
            <div class="clearfix"> </div>
            
        </section>