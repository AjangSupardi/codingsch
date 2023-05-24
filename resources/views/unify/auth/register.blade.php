@extends('unify.layouts.app') @section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-lg-3 overflow-hidden">
            <div class="container">
                <div class="row justify-content-lg-between align-items-lg-center">
                    <div class="col-lg-5 mb-7 mb-lg-0">
                        <div class="mb-6">
                            <h1>Hire us</h1>
                            <p class="lead">We help brands and platforms turn big ideas into beautiful digital
                                products and experiences.</p>
                        </div>

                        <h5>What can I expect?</h5>

                        <!-- List -->
                        <ul class="list-checked list-checked-dark mb-6">
                            <li class="list-checked-item">Industry-leading design</li>
                            <li class="list-checked-item">Developer community support</li>
                            <li class="list-checked-item">Simple and affordable</li>
                        </ul>
                        <!-- End List -->

                        <h6>Enjoyed by</h6>

                        <div class="row mb-4">
                            <div class="col py-2">
                                <img class="avatar avatar-lg avatar-4x3"
                                    src="{{ asset('unify') }}/svg/brands/capsule-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col py-2">
                                <img class="avatar avatar-lg avatar-4x3"
                                    src="{{ asset('unify') }}/svg/brands/gitlab-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col py-2">
                                <img class="avatar avatar-lg avatar-4x3"
                                    src="{{ asset('unify') }}/svg/brands/fitbit-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col py-2">
                                <img class="avatar avatar-lg avatar-4x3" src="{{ asset('unify') }}/svg/brands/sass-gray.svg"
                                    alt="Logo">
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Avatar Group -->
                                <div class="avatar-group avatar-group-sm">
                                    <span class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('unify') }}/img/160x160/img10.jpg"
                                            alt="Image Description">
                                    </span>
                                    <span class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('unify') }}/img/160x160/img3.jpg"
                                            alt="Image Description">
                                    </span>
                                    <span class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('unify') }}/img/160x160/img9.jpg"
                                            alt="Image Description">
                                    </span>
                                    <span class="avatar avatar-primary avatar-circle">
                                        <span class="avatar-initials">
                                            <i class="bi-star-fill"></i>
                                        </span>
                                    </span>
                                </div>
                                <!-- End Avatar Group -->
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                                <span class="d-block fs-5">Trusted by over 37k customer</span>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="position-relative">
                            <!-- Card -->
                            <div class="card card-lg">
                                <div class="card-body">
                                    <h4>Fill in the form</h4>

                                    <!-- Form -->
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" />
                                        </div>
                                        <div class="mb-4">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" name="email" id="email" class="form-control" />
                                        </div>
                                        <div class="mb-4">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" />
                                        </div>
                                        <div class="mb-4">
                                            <label for="confirm-password" class="form-label">Confirm Password</label>
                                            <input type="password" name="password_confirmation" id="confirm-password"
                                                class="form-control" />
                                        </div>
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- SVG Shape -->
                            <figure class="position-absolute top-0 end-0 d-none d-md-block mt-n10"
                                style="width: 12rem; margin-right: -10rem;">
                                <img class="img-fluid" src="{{ asset('unify') }}/svg/components/three-arrows-1.svg"
                                    alt="Image Description">
                            </figure>
                            <!-- End SVG Shape -->

                            <!-- SVG Shape -->
                            <figure class="position-absolute bottom-0 end-0 zi-n1 d-none d-md-block mb-n10"
                                style="width: 15rem; margin-right: -8rem;">
                                <img class="img-fluid" src="{{ asset('unify') }}/svg/illustrations/grid-grey.svg"
                                    alt="Image Description">
                            </figure>
                            <!-- End SVG Shape -->

                            <!-- SVG Shape -->
                            <figure class="position-absolute bottom-0 end-0 d-none d-md-block me-n5 mb-n5"
                                style="width: 10rem;">
                                <img class="img-fluid" src="{{ asset('unify') }}/svg/illustrations/plane.svg"
                                    alt="Image Description">
                            </figure>
                            <!-- End SVG Shape -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
        <!-- End Hero -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
