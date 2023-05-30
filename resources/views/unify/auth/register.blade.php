@extends('unify.layouts.app') @section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-lg-3 overflow-hidden">
            <div class="container">
                <div class="row justify-content-lg-between align-items-lg-center">
                    <div class="col-lg-5 mb-7 mb-lg-0">
                        <div class="mb-6">
                            <h1>Daftar</h1>
                            <p class="lead">Bergabunglah dengan ribuan pengguna yang belajar bersama kami dan bangun karir
                                yang sukses di industri teknologi.</p>
                        </div>

                        <h5>Apa yang didapat?</h5>

                        <!-- List -->
                        <ul class="list-checked list-checked-dark mb-6">
                            <li class="list-checked-item">Kursus Pemrograman Berkualitas</li>
                            <li class="list-checked-item">Mentor Ahli di Bidangnya</li>
                            <li class="list-checked-item">Komunitas Belajar yang Solid</li>
                        </ul>
                        <!-- End List -->

                        <h6>Kolaborasi bersama</h6>

                        <div class="row mb-4">
                            <div class="col py-2">
                                <img class="avatar avatar-lg avatar-3x3"
                                    src="{{ asset('unify') }}/svg/brands/Logo_of_UNICEF_primary.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col py-2">
                                <img class="avatar avatar-lg avatar-3x3"
                                    src="{{ asset('unify') }}/svg/brands/Coat_of_arms_of_West_Java.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col py-2">
                                <img class="avatar avatar-lg avatar-3x3"
                                    src="{{ asset('unify') }}/svg/brands/WWF_Panda_logo_primary.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col py-2">
                                <img class="avatar avatar-lg avatar-3x3"
                                    src="{{ asset('unify') }}/svg/brands/Makara_of_Universitas_Indonesia.svg"
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
                                <span class="d-block fs-5">Terpercaya oleh 37ribu lebih pelajar</span>
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
                                    <h4>Silakan isi formulir pendaftaran</h4>

                                    <!-- Form -->
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" name="name" id="name" placeholder="Nama Lengkap"
                                                class="form-control @error('name') is-invalid @enderror" />
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email"
                                                placeholder="Contoh: nama@email.com"
                                                class="form-control @error('email') is-invalid @enderror" />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" id="password"
                                                placeholder="Masukan Password"
                                                class="form-control @error('password') is-invalid @enderror" />
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                                            <input type="password" name="password_confirmation" id="confirm-password"
                                                placeholder="Masukan kembali Password" class="form-control" />
                                        </div>
                                        <button type="submit" class="btn btn-primary">Daftar</button>
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
