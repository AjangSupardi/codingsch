<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light navbar-absolute-top navbar-show-hide"
    data-hs-header-options='{"fixMoment": 0,"fixEffect": "slide"}'>
    <div class="container">
        <nav class="js-mega-menu navbar-nav-wrap">
            <!-- Default Logo -->
            <a class="navbar-brand" href="{{ url('') }}" aria-label="Unify">
                <img class="navbar-brand-logo" src="{{ asset('unify') }}/svg/logos/logo.svg" alt="Image Description">
            </a>
            <!-- End Default Logo -->

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-default">
                    <i class="bi-list"></i>
                </span>
                <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                </span>
            </button>
            <!-- End Toggler -->

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-absolute-top-scroller">
                    <ul class="navbar-nav nav-pills">
                        <!-- Landings -->
                        <li class="hs-has-mega-menu nav-item"
                            data-hs-mega-menu-item-options='{"desktop": {"maxWidth": "40rem"}}'>
                            <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle "
                                aria-current="page" href="#" role="button" aria-expanded="false">Landings</a>

                            <!-- Mega Menu -->
                            <div class="hs-mega-menu dropdown-menu" aria-labelledby="landingsMegaMenu"
                                style="min-width: 25rem;">
                                <!-- Main Content -->
                                <div class="row">
                                    <div class="col-lg d-none d-lg-block">
                                        <div class="d-flex align-items-start flex-column bg-light rounded-3 h-100 p-4">
                                            <span class="fs-3 fw-bold d-block">Landings</span>
                                            <p class="text-body">Accelerate the way your business builds modern
                                                sites at scale.</p>
                                            <div class="mt-auto">
                                                <p class="mb-1"><a class="link link-dark link-pointer"
                                                        href="#">Learn more</a></p>
                                                <p class="mb-1"><a class="link link-dark link-pointer"
                                                        href="#">Why Unify Template</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <div class="navbar-dropdown-menu-inner">
                                            <span class="dropdown-header">Classic</span>
                                            <a class="dropdown-item active" href="{{ url('') }}"><i
                                                    class="bi-building me-2"></i> Corporate</a>
                                            <a class="dropdown-item " href="./landing-business.html"><i
                                                    class="bi-briefcase me-2"></i> Business <span
                                                    class="badge text-primary">New</span></a>
                                            <a class="dropdown-item " href="./landing-consulting.html"><i
                                                    class="bi-chat-right-dots me-2"></i> Consulting <span
                                                    class="badge text-primary">New</span></a>
                                            <a class="dropdown-item " href="./landing-saas.html"><i
                                                    class="bi-tropical-storm me-2"></i> SaaS</a>
                                            <a class="dropdown-item " href="./landing-services.html"><i
                                                    class="bi-gear me-2"></i> Services</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Main Content -->
                            </div>
                            <!-- End Mega Menu -->
                        </li>
                        <!-- End Landings -->

                        <!-- Pages -->
                        <li class="hs-has-mega-menu nav-item">
                            <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                                role="button" aria-expanded="false">Pages</a>

                            <!-- Mega Menu -->
                            <div class="hs-mega-menu hs-position-right dropdown-menu w-100"
                                aria-labelledby="pagesMegaMenu" style="min-width: 42rem;">
                                <!-- Main Content -->
                                <div class="navbar-dropdown-menu-inner">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3">
                                            <span class="dropdown-header">Company</span>
                                            <a class="dropdown-item " href="./page-about.html">About</a>
                                            <a class="dropdown-item " href="./page-customer-stories.html">Customer
                                                Stories</a>
                                            <a class="dropdown-item " href="./page-customer-story.html">Customer
                                                Story</a>
                                            <a class="dropdown-item " href="./page-help-center.html">Help
                                                Center</a>
                                            <a class="dropdown-item " href="./page-help-center-categories.html">Help
                                                Center:
                                                Categories</a>
                                            <a class="dropdown-item " href="./page-help-center-article.html">Help
                                                Center: Article</a>
                                        </div>

                                        <div class="col-sm-6 col-lg-3 mt-n5 mt-sm-0 mb-3 mb-lg-0">
                                            <span class="dropdown-header invisible">Company</span>
                                            <a class="dropdown-item " href="./page-careers.html">Careers</a>
                                            <a class="dropdown-item " href="./page-careers-role-overview.html">Careers:
                                                Role Overview</a>
                                            <a class="dropdown-item " href="./page-careers-apply.html">Careers:
                                                Apply</a>
                                            <a class="dropdown-item " href="./page-hire-us.html">Hire Us</a>
                                            <a class="dropdown-item " href="./page-login.html">Log In</a>
                                            <a class="dropdown-item " href="{{ route('register') }}">Sign Up</a>
                                            <a class="dropdown-item " href="./page-reset-password.html">Forgot
                                                Password</a>
                                        </div>

                                        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                                            <span class="dropdown-header">Portfolio</span>
                                            <a class="dropdown-item " href="./portfolio-modern.html">Modern</a>
                                            <a class="dropdown-item " href="./portfolio-case-study.html">Case
                                                Study</a>
                                        </div>

                                        <div class="col-sm-6 col-lg-3">
                                            <span class="dropdown-header">Specialty pages</span>
                                            <a class="dropdown-item " href="./page-pricing.html">Pricing</a>
                                            <a class="dropdown-item " href="./page-contacts.html">Contacts</a>
                                            <a class="dropdown-item " href="./page-coming-soon.html">Coming
                                                Soon</a>
                                            <a class="dropdown-item " href="./page-coming-soon-simple.html">Coming
                                                Soon: Simple</a>
                                            <a class="dropdown-item " href="./page-error-404.html">Error 404</a>
                                            <a class="dropdown-item " href="./page-terms.html">Terms &amp;
                                                Conditions</a>
                                            <a class="dropdown-item " href="./page-privacy.html">Privacy &amp;
                                                Policy</a>
                                        </div>
                                    </div>
                                    <!-- End Row -->
                                </div>
                                <!-- End Main Content -->
                            </div>
                            <!-- End Mega Menu -->
                        </li>
                        <!-- End Pages -->

                        <!-- Blog -->
                        <li class="hs-has-mega-menu nav-item"
                            data-hs-mega-menu-item-options='{"desktop": {"maxWidth": "50rem"}}'>
                            <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle "
                                href="#" role="button" aria-expanded="false">Blog</a>

                            <!-- Mega Menu -->
                            <div class="hs-mega-menu dropdown-menu" aria-labelledby="blogMegaMenu"
                                style="min-width: 12rem;">
                                <!-- Main Content -->
                                <div class="row">
                                    <div class="col-lg d-none d-lg-block">
                                        <div class="bg-light rounded-3 h-100 p-4">
                                            <span class="d-block fs-4 fw-bold text-dark mb-3">Latest from the
                                                Blog</span>

                                            <div class="row">
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <!-- Card -->
                                                    <a class="d-block" href="./documentation/index.html">
                                                        <img class="img-fluid rounded-2 mb-2"
                                                            src="{{ asset('unify') }}/svg/components/card-1.svg"
                                                            alt="Image Description">

                                                        <span
                                                            class="fs-4 fw-medium text-dark text-inherit">Documentation</span>
                                                        <p class="fs-6 text-body">Development guides for building
                                                            projects with Unify</p>
                                                        <span class="link link-pointer">Learn more</span>
                                                    </a>
                                                    <!-- End Card -->
                                                </div>
                                                <!-- End Col -->

                                                <div class="col-md-6">
                                                    <!-- Card -->
                                                    <a class="d-block" href="./snippets/index.html">
                                                        <img class="img-fluid rounded-2 mb-2"
                                                            src="{{ asset('unify') }}/svg/components/card-2.svg"
                                                            alt="Image Description">

                                                        <span
                                                            class="fs-4 fw-medium text-dark text-inherit">Snippets</span>
                                                        <p class="fs-6 text-body">Move quickly with
                                                            copy-to-clipboard feature</p>
                                                        <span class="link link-pointer">Learn more</span>
                                                    </a>
                                                    <!-- End Card -->
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="navbar-dropdown-menu-inner">
                                            <span class="dropdown-header">Classic</span>
                                            <a class="dropdown-item " href="./blog-modern.html">Modern <span
                                                    class="badge text-primary">New</span></a>
                                            <a class="dropdown-item " href="./blog-grid.html">Grid</a>
                                            <a class="dropdown-item " href="./blog-list.html">List</a>
                                            <a class="dropdown-item " href="./blog-article.html">Article <span
                                                    class="badge text-primary">New</span></a>
                                            <a class="dropdown-item " href="./blog-author-profile.html">Author
                                                Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Main Content -->
                            </div>
                            <!-- End Mega Menu -->
                        </li>
                        <!-- End Blog -->

                        <!-- Docs -->
                        <li class="hs-has-mega-menu nav-item"
                            data-hs-mega-menu-item-options='{"desktop": {"maxWidth": "20rem"}}'>
                            <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle "
                                href="#" role="button" aria-expanded="false">Docs</a>

                            <!-- Mega Menu -->
                            <div class="hs-mega-menu hs-position-right-fix dropdown-menu"
                                aria-labelledby="docsMegaMenu" style="min-width: 20rem;">
                                <!-- Link -->
                                <a class="navbar-dropdown-menu-media-link" href="./documentation/index.html">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bi-file-earmark-text fs-2 text-dark"></i>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            <span class="navbar-dropdown-menu-media-title">Documentation <span
                                                    class="badge badge-sm bg-primary rounded-pill ms-1">v3.2.2</span></span>
                                            <p class="navbar-dropdown-menu-media-desc">Development guides for
                                                building projects with Unify</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Link -->

                                <div class="dropdown-divider"></div>

                                <!-- Link -->
                                <a class="navbar-dropdown-menu-media-link" href="./snippets/index.html">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="bi-layers fs-2 text-dark"></i>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            <span class="navbar-dropdown-menu-media-title">Snippets</span>
                                            <p class="navbar-dropdown-menu-media-desc">Move quickly with
                                                copy-to-clipboard feature</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Link -->
                            </div>
                            <!-- End Mega Menu -->
                        </li>
                        <!-- End Docs -->

                        <!-- Log in -->
                        <li class="nav-item ms-lg-auto">
                            <a class="btn btn-ghost-dark me-2 me-lg-0" href="./page-login.html">Log in</a>
                            <a class="btn btn-dark d-lg-none" href="{{ route('register') }}">Sign up</a>
                        </li>
                        <!-- End Log in -->

                        <!-- Sign up -->
                        <li class="nav-item">
                            <a class="btn btn-dark d-none d-lg-inline-block" href="{{ route('register') }}">Sign
                                up</a>
                        </li>
                        <!-- End Sign up -->
                    </ul>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </div>
</header>

<!-- ========== END HEADER ========== -->
