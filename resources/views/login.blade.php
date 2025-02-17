<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Login</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('admin/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('admin/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="{{ asset('admin/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
            <div class="bg-holder bg-auth-card-overlay"
                style="background-image:url({{ asset('admin/img/bg/37.png') }});">
            </div>
            <!--/.bg-holder-->

            <div class="row flex-center position-relative min-vh-100 g-0 py-5">
                <div class="col-11 col-sm-10 col-xl-8">
                    <div class="card border border-translucent auth-card">
                        <div class="card-body pe-md-0">
                            <div class="row align-items-center gx-0 gy-7">
                                <div
                                    class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                                    <div class="bg-holder"
                                        style="background-image:url({{ asset('admin/img/bg/38.png') }});">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div
                                        class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                                        <h3 class="mb-3 text-body-emphasis fs-7">Phoenix Authentication</h3>
                                        <p class="text-body-tertiary">Give yourself some hassle-free development process
                                            with the uniqueness of Phoenix!</p>
                                        <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                                            <li class="d-flex align-items-center"><span
                                                    class="uil uil-check-circle text-success me-2"></span><span
                                                    class="text-body-tertiary fw-semibold">Fast</span></li>
                                            <li class="d-flex align-items-center"><span
                                                    class="uil uil-check-circle text-success me-2"></span><span
                                                    class="text-body-tertiary fw-semibold">Simple</span></li>
                                            <li class="d-flex align-items-center"><span
                                                    class="uil uil-check-circle text-success me-2"></span><span
                                                    class="text-body-tertiary fw-semibold">Responsive</span></li>
                                        </ul>
                                    </div>
                                    <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15"><img
                                            class="auth-title-box-img d-dark-none"
                                            src="{{ asset('admin/img/spot-illustrations/auth.png') }}" alt="" /><img
                                            class="auth-title-box-img d-light-none"
                                            src="{{ asset('admin/img/spot-illustrations/auth-dark.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="col mx-auto">
                                    <div class="auth-form-box">
                                        <div class="text-center mb-7"><a
                                                class="d-flex flex-center text-decoration-none mb-4"
                                                href="{{ asset('admin/index.html') }}">
                                                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                                    <img src="{{ asset('admin/img/icons/logo.png') }}" alt="phoenix"
                                                        width="58" />
                                                </div>
                                            </a>
                                            <h3 class="text-body-highlight">Sign In</h3>
                                            <p class="text-body-tertiary">Get access to your account</p>
                                        </div>
                                        <button class="btn btn-phoenix-secondary w-100 mb-3"><span
                                                class="fab fa-google text-danger me-2 fs-9"></span>Sign in with
                                            google</button>
                                        <button class="btn btn-phoenix-secondary w-100"><span
                                                class="fab fa-facebook text-primary me-2 fs-9"></span>Sign in with
                                            facebook</button>
                                        <div class="position-relative">
                                            <hr class="bg-body-secondary mt-5 mb-4" />
                                            <div class="divider-content-center bg-body-emphasis">or use email</div>
                                        </div>
                                        <form id="login">
                                            @csrf
                                            <div class="mb-3 text-start">
                                                <label class="form-label" for="email">Email address</label>
                                                <div class="form-icon-container">
                                                    <input class="form-control form-icon-input" id="email"
                                                        name="username" placeholder="name@example.com"
                                                        value="admin" /><span
                                                        class="fas fa-user text-body fs-9 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="mb-3 text-start">
                                                <label class="form-label" for="password">Password</label>
                                                <div class="form-icon-container" data-password="data-password">
                                                    <input class="form-control form-icon-input pe-6" name="password"
                                                        type="password" placeholder="Password"
                                                        data-password-input="data-password-input"
                                                        value="12345678" /><span
                                                        class="fas fa-key text-body fs-9 form-icon"></span>
                                                    <button
                                                        class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                                        data-password-toggle="data-password-toggle" type="button"><span
                                                            class="uil uil-eye show"></span><span
                                                            class="uil uil-eye-slash hide"></span></button>
                                                </div>
                                            </div>
                                            <div class="row flex-between-center mb-7">
                                                <div class="col-auto">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" id="basic-checkbox"
                                                            type="checkbox" checked="checked" />
                                                        <label class="form-check-label mb-0"
                                                            for="basic-checkbox">Remember
                                                            me</label>
                                                    </div>
                                                </div>
                                                <div class="col-auto"><a class="fs-9 fw-semibold"
                                                        href="{{ asset('admin/pages/authentication/card/forgot-password.html') }}">Forgot
                                                        Password?</a></div>
                                            </div>
                                            <button class="btn btn-primary w-100 mb-3" type="submit">Sign In</button>
                                            <div class="text-center"><a class="fs-9 fw-bold"
                                                    href="{{ asset('admin/pages/authentication/card/sign-up.html') }}">Create
                                                    an account</a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        const _base_url = "{{url('')}}/";
        const _api_url = "{{url('api/admin')}}/";
    </script>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('admin/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/vendors/anchorjs/anchor.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/vendors/is/is.min.js') }}"></script> --}}
    <script src="{{ asset('admin/vendors/fontawesome/all.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/vendors/lodash/lodash.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/vendors/list.js/list.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/vendors/dayjs/dayjs.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/js/phoenix.js') }}"></script> --}}
    <script src="{{ asset('admin/js/admin.js?v=').time() }}"></script>
    <script src="{{ asset('admin/js/login.js?v=').time() }}"></script>
</body>

</html>