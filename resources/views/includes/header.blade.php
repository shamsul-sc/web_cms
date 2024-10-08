<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body header-body-bottom-border border-top-0">
        <div class="header-top">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <ul class="list list-unstyled list-inline mb-0">
                                <li class="list-inline-item text-color-dark me-md-4 mb-0">
                                    <i
                                        class="icons icon-phone text-color-primary text-4 position-relative top-2 me-1"></i>
                                    <a href="tel:+8801516130562"
                                        class="text-color-dark text-color-hover-primary text-decoration-none">
                                        <strong>+88 01516-130562</strong>
                                    </a>
                                </li>
                                <li class="list-inline-item text-color-dark me-4 mb-0 d-none d-md-inline-block">
                                    <i
                                        class="icons icon-envelope text-color-primary text-4 position-relative top-4 me-1"></i>
                                    <a href="mailto:info@tcf.org.bd"
                                        class="text-color-dark text-color-hover-primary text-decoration-none text-2">
                                        info@tcf.org.bd
                                    </a>
                                </li>
                                <li class="list-inline-item text-color-dark text-2 mb-0 d-none d-lg-inline-block">
                                    <i
                                        class="icons icon-calendar text-color-primary text-3-5 position-relative top-1 me-1"></i>
                                    Sun - Thurs 10am - 5pm
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons social-icons-clean d-none d-lg-block">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                        title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                        title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank"
                                        title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <ul class="nav">
                                <li
                                    class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                    <a class="nav-link" href="#" role="button" id="dropdownLanguage"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/blank.gif') }}" class="flag {{ __('locale.flag') }} mx-1"
                                            alt="{{ __('locale.alt') }}"> {{ __('locale.locale') }} <i
                                            class="fas fa-angle-down mx-1"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguage" style="">
                                        <a class="dropdown-item" href="locale/en" data-lang="English"
                                            data-flag="flag-us"><img src="{{ asset('img/blank.gif') }}"
                                                class="flag flag-us custom-font-size-1" alt="English"> English</a>
                                        <a class="dropdown-item" href="locale/bn" data-lang="বাংলা"
                                            data-flag="flag-bd"><img src="{{ asset('img/blank.gif') }}"
                                                class="flag flag-bd custom-font-size-1" alt="Bangla"> বাংলা</a>
                                    </div>
                                </li>
                            </ul><a href="{{ url('/faqs') }}" class="btn btn-secondary btn-px-4 py-3 font-weight-bold text-2 rounded-0">
                                FAQs
                            </a>
                            <a href="#" class="btn btn-primary btn-px-4 py-3 font-weight-bold text-2 rounded-0">
                                JOIN US
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('img/demos/law-firm-2/logo.png') }}" class="" width="" height="70"
                                    data-sticky-height="50" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div
                                class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a href="{{ url('/') }}" class="nav-link active">{{ __('custom_lang.home')
                                                }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/about') }}" class="nav-link">{{ __('custom_lang.about') }}</a>
                                        </li>
                                        
                                        <!-- <li class="dropdown">
                                            <a href="demo-law-firm-2-practice-areas.html"
                                                class="dropdown-item dropdown-toggle">Committees</a>
                                            <ul class="dropdown-menu border-radius-0">
                                                <li>
                                                    <a href="demo-law-firm-2-practice-areas-detail.html"
                                                        class="nav-link">Family Law</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="demo-law-firm-2-practice-areas.html"
                                                class="dropdown-item dropdown-toggle">Members</a>
                                            <ul class="dropdown-menu border-radius-0">
                                                <li>
                                                    <a href="demo-law-firm-2-practice-areas-detail.html"
                                                        class="nav-link">Family Law</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        
                                        <li class="dropdown">
                                            <a href="{{ url('/projects') }}" class="dropdown-item dropdown-toggle">{{ __('custom_lang.projects') }}</a>
                                            <ul class="dropdown-menu border-radius-0">   
                                                @if($projectCategories && $projectCategories->count())
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{ url('project/categories') }}">Category ({{ $projectCategories->count() }})</a>
                                                    <ul class="dropdown-menu  border-radius-0">
                                                        @foreach ($projectCategories as $category)
                                                            <li>
                                                                <a class="dropdown-item" href="{{ url('project/category',$category->slug) }}">{{ app()->getLocale() == 'en' ? $category->category_name : $category->category_name_bn }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endif

                                                @if($projects && $projects->count())
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{ url('/projects') }}">{{ __('custom_lang.projects') }} ({{ $projects->count() }})</a>
                                                    <ul class="dropdown-menu  border-radius-0">
                                                        @foreach ($projects as $project)
                                                            <li>
                                                                <a class="dropdown-item" href="{{ url('project',$project->slug ) }}">{{ app()->getLocale() == 'en' ? $project->project_title : $project->project_title_bn }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endif
                                                <li>
                                                    <a href="{{ url('/joint-projects') }}"
                                                        class="nav-link">Joint Project</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ url('/case-studies') }}" class="nav-link">{{ __('custom_lang.case_study') }}</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#"
                                                class="dropdown-item dropdown-toggle">{{ __('custom_lang.media') }}</a>
                                            <ul class="dropdown-menu border-radius-0">
                                                <li>
                                                    <a href="{{ url('/albums') }}"
                                                        class="nav-link">{{ __('custom_lang.albums') }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link">{{ __('custom_lang.contact') }}</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                            data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>