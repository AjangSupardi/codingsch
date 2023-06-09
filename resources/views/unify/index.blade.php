@extends('unify.layouts.app') @section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="container content-space-t-3">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="mb-5">
                        <h1 class="display-4 text-dark mb-5">Ingin Menjadi <span class="text-primary">Programmer</span>
                            Handal?
                        </h1>
                        <p class="fs-3">Kami membantu mewujudkan impianmu menjadi seorang developer yang sukses.</p>
                    </div>

                    <div class="d-grid d-sm-flex gap-3 mb-5">
                        <a class="btn btn-primary" href="#">Selengkapnya</a>
                        <a class="btn btn-ghost-dark btn-pointer" href="#">Daftar Gratis</a>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('unify') }}/img/950x950/img1.jpg" alt="Image Description">

                            <div class="position-absolute bottom-0 end-0">
                                <img class="w-100" src="{{ asset('unify') }}/svg/illustrations/cubics.svg" alt="SVG"
                                    style="max-width: 30rem;">
                            </div>
                        </div>

                        <!-- Media -->
                        <div class="d-inline-block position-absolute top-0 start-0 bg-white w-100 rounded-pill shadow-sm p-2 mt-5 ms-n5"
                            style="max-width: 12rem;">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <span class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img" src="{{ asset('unify') }}/img/160x160/img10.jpg"
                                            alt="Image Description">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <div class="fs-5 fw-bold mb-0">Siti Sri Fitriani</div>
                                    <span class="d-block fs-6">Komprehensif!</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Media -->

                        <!-- Media -->
                        <div class="d-inline-block position-absolute bottom-0 start-0 bg-white w-100 rounded-pill shadow-sm p-2 mb-10 ms-n10"
                            style="max-width: 16rem;">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <span class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img" src="{{ asset('unify') }}/img/160x160/img3.jpg"
                                            alt="Image Description">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <div class="fs-5 fw-bold text-dark mb-0">Zahira Daffina Ramsha</div>
                                    <span class="d-block fs-6 text-dark">Berdedikasi 🔥👋</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Media -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Hero -->

        <!-- Icon Blocks -->
        <div class="container content-space-t-2 content-space-t-lg-3">
            <div class="row">
                <div class="col-sm-6 col-lg mb-5 mb-lg-0">
                    <!-- Icon Block -->
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi-star-half fs-1 text-dark"></i>
                        </div>

                        <h5>Mentor</h5>
                        <span class="d-block">Ahli yang berpengalaman</span>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg mb-5 mb-lg-0">
                    <!-- Icon Block -->
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi-journal-check fs-1 text-dark"></i>
                        </div>

                        <h5>Kurikulum</h5>
                        <span class="d-block">Terstruktur dan komprehensif</span>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg mb-5 mb-sm-0">
                    <!-- Icon Block -->
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi-balloon-heart fs-1 text-dark"></i>
                        </div>

                        <h5>Konsultasi</h5>
                        <span class="d-block">Akses 24 jam penuh</span>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg">
                    <!-- Icon Block -->
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi-trophy fs-1 text-dark"></i>
                        </div>

                        <h5>Komunitas</h5>
                        <span class="d-block">Bergabunglah dengan komunitas</span>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Icon Blocks -->

        <!-- Features -->
        <div class="overflow-hidden">
            <div class="container content-space-2 content-space-lg-3">
                <div class="row align-items-lg-center">
                    <div class="col-lg-7 me-auto ms-lg-n10 mb-5 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img class="img-fluid rounded-3" src="{{ asset('unify') }}/img/580x480/img1.jpg"
                                    alt="Image Description">
                            </div>
                            <!-- End Col -->

                            <div class="col-3">
                                <img class="img-fluid rounded-3" src="{{ asset('unify') }}/img/350x700/img1.jpg"
                                    alt="Image Description">
                            </div>
                            <!-- End Col -->

                            <div class="col-5">
                                <img class="img-fluid rounded-3" src="{{ asset('unify') }}/img/400x700/img1.jpg"
                                    alt="Image Description">
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-5">
                        <div class="mb-5">
                            <h2>Kolaborasi Kunci Sukses Dunia Pemrograman!</h2>
                            <p>Kolaborasi memungkinkan pertukaran pengetahuan, pemikiran, dan keahlian, memperbaiki solusi,
                                mempercepat pengembangan, dan meningkatkan kesuksesan secara keseluruhan.</p>
                        </div>

                        <!-- List Checked -->
                        <ul class="list-checked list-checked-soft-bg-primary list-checked-lg">
                            <li class="list-checked-item">Tingkatkan <span class="fw-bold">kualitas dan efisiensi</span>
                                kode dengan kekuatan pemikiran kolektif.</li>
                            <li class="list-checked-item"><span class="fw-bold">Pertumbuhan</span> pribadi melalui
                                pembelajaran dari programmer lainnya.</li>
                            <li class="list-checked-item">Bangun <span class="fw-bold">teammwork</span> yang kuat dan capai
                                tujuan bersama!</li>
                        </ul>
                        <!-- End List Checked -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
        <!-- End Features -->

        <!-- Icon Blocks -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-5">
                    <div class="text-center px-md-5">
                        <div class="mb-3">
                            <i class="bi-hand-thumbs-up fs-1 text-dark"></i>
                        </div>
                        <p>Kembangkan keterampilan <span class="fw-bold">pemrograman yang kuat</span> dan jadi ahli di
                            bidangnya.</p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg-4 mb-5">
                    <div class="text-center px-md-5">
                        <div class="mb-3">
                            <i class="bi-graph-up-arrow fs-1 text-dark"></i>
                        </div>
                        <p>Buka pintu menuju <span class="fw-bold">peluang karir</span> di industri teknologi yang
                            berkembang pesat</p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg-4 mb-5">
                    <div class="text-center px-md-5">
                        <div class="mb-3">
                            <i class="bi-hdd-network fs-1 text-dark"></i>
                        </div>
                        <p>Perluas <span class="fw-bold">jaringan profesional</span> dan temukan teman seprofesi di
                            komunitas
                            pembelajaran kami.</p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="text-center px-md-5">
                        <div class="mb-3">
                            <i class="bi-journal-code fs-1 text-dark"></i>
                        </div>
                        <p>Dapatkan <span class="fw-bold">kurikulum terkini</span> yang mengikuti perkembangan industri
                            teknologi. Tetap relevan dengan
                            tren terbaru.</p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
                    <div class="text-center px-md-5">
                        <div class="mb-3">
                            <i class="bi-star fs-1 text-dark"></i>
                        </div>
                        <p>Dapatkan bimbingan langsung dari <span class="fw-bold">instruktur ahli</span> yang
                            berpengalaman. Pelajari dari yang terbaik.
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg-4">
                    <div class="text-center px-md-5">
                        <div class="mb-3">
                            <i class="bi-journal-text fs-1 text-dark"></i>
                        </div>
                        <p>Siapkan diri dengan <span class="fw-bold">proyek praktis</span> dan studi kasus nyata. Sambut
                            tantangan dunia kerja.</p>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Icon Blocks -->

        <!-- Features -->
        <div class="container content-space-t-2 content-space-t-lg-3">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img class="img-fluid rounded-3" src="{{ asset('unify') }}/img/950x950/img2.jpg"
                        alt="Image Description">
                </div>
                <!-- End Col -->

                <div class="col-lg-5">
                    <div class="mb-5">
                        <h2>We tackle the challenges start-ups face</h2>
                        <p>Besides working with start-up enterprises as a partner for digitalization, we have built
                            enterprise products for common pain points that we have encountered in various products and
                            projects.</p>
                    </div>

                    <!-- List Checked -->
                    <ul class="list-checked list-checked-soft-bg-primary list-checked-lg mb-5">
                        <li class="list-checked-item"><span class="fw-bold">Easy &amp; fast</span> designing</li>
                        <li class="list-checked-item">Powerful <span class="fw-bold">features</span></li>
                        <li class="list-checked-item">User Experience Design</li>
                    </ul>
                    <!-- End List Checked -->

                    <a class="btn btn-primary" href="#">Our services</a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Features -->

        <!-- Stats -->
        <div class="container content-space-2 content-space-lg-3">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-5 mb-9 mb-lg-0">
                    <div class="mb-6">
                        <h2>It's all about speed</h2>
                        <p>We provide you with a test account that can be set up in seconds. Our main focus is getting
                            responses to you as soon as we can.</p>
                    </div>

                    <!-- Blockquote -->
                    <figure>
                        <blockquote class="blockquote"><em>Amazing people to work with. Very fast and professional
                                partner.</em></blockquote>

                        <figcaption class="blockquote-footer">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="avatar avatar-circle" src="{{ asset('unify') }}/img/160x160/img3.jpg"
                                        alt="Image Description">
                                </div>

                                <div class="flex-grow-1 ms-3">
                                    Josh Grazioso
                                    <span class="blockquote-footer-source">Director Payments &amp; Risk | Airbnb</span>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <!-- End Blockquote -->
                </div>
                <!-- End Col -->

                <div class="col-lg-6">
                    <!-- List -->
                    <ul class="list-equal-height list-equal-height-2-cols">
                        <li class="list-equal-height-item">
                            <h4 class="display-5">45k+</h4>
                            <p class="mb-0">users - from new startups to public companies</p>
                        </li>

                        <li class="list-equal-height-item">
                            <h4 class="display-5"><sub><i class="bi-arrow-up-short text-primary ms-n2"></i></sub>23%
                            </h4>
                            <p class="mb-0">increase in traffic on webpages with Looms</p>
                        </li>

                        <li class="list-equal-height-item">
                            <h4 class="display-5"><sub><i class="bi-arrow-up-short text-primary ms-n2"></i></sub>9.3%
                            </h4>
                            <p class="mb-0">boost in reply rates across sales outreach</p>
                        </li>

                        <li class="list-equal-height-item">
                            <h4 class="display-5">2x</h4>
                            <p class="mb-0">faster than previous Unify versions</p>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Stats -->

        <!-- Clients -->
        <div class="container">
            <!-- Swiper Slider -->
            <div class="js-swiper-clients swiper text-center">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="{{ asset('unify') }}/svg/brands/mailchimp-dark.svg"
                            alt="Logo">
                    </div>
                    <!-- End Slide -->

                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="{{ asset('unify') }}/svg/brands/sass-dark.svg"
                            alt="Logo">
                    </div>
                    <!-- End Slide -->

                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="{{ asset('unify') }}/svg/brands/forbes-dark.svg"
                            alt="Logo">
                    </div>
                    <!-- End Slide -->

                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="{{ asset('unify') }}/svg/brands/gitlab-dark.svg"
                            alt="Logo">
                    </div>
                    <!-- End Slide -->

                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="{{ asset('unify') }}/svg/brands/hubspot-dark.svg"
                            alt="Logo">
                    </div>
                    <!-- End Slide -->
                </div>
            </div>
            <!-- End Swiper Slider -->
        </div>
        <!-- End Clients -->

        <!-- Card Grid -->
        <div class="container content-space-2 content-space-lg-3">
            <!-- Heading -->
            <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-10">
                <h2>Less overhead, more collaboration</h2>
                <p>Start with award-winning templates, then customize to fit your style and professional needs.</p>
            </div>
            <!-- End Heading -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col mb-5 mb-md-0">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="./blog-article.html">
                        <div class="card-transition-zoom-item">
                            <img class="card-img" src="{{ asset('unify') }}/img/580x480/img1.jpg"
                                alt="Image Description">
                        </div>

                        <div class="card-body">
                            <h4>Virtual Venue</h4>
                            <p class="card-text">Create an immersive attendee experience with interactive programming
                                for both digital and onsite audiences</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Explore Virtual Venue</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-5 mb-md-0">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="./blog-article.html">
                        <div class="card-pinned card-transition-zoom-item">
                            <img class="card-img" src="{{ asset('unify') }}/img/580x480/img2.jpg"
                                alt="Image Description">
                            <span class="badge bg-dark text-white card-pinned-top-end">Sponsored</span>
                        </div>

                        <div class="card-body">
                            <h4>Studio by Htmlstream</h4>
                            <p class="card-text">Produce professional, reliable streams easily leveraging Htmlstream's
                                innovative broadcast studio</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Explore Studio</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="./blog-article.html">
                        <div class="card-transition-zoom-item">
                            <img class="card-img" src="{{ asset('unify') }}/img/580x480/img3.jpg"
                                alt="Image Description">
                        </div>

                        <div class="card-body">
                            <h4>Onsite</h4>
                            <p class="card-text">Optimize your in-person experience with best-in-class capabilities
                                like badge printing and lead retrieval</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Explore Onsite</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Card Grid -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
