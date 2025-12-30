<!DOCTYPE html>
<html lang="en">

<head>
    @livewireStyles
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/client') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets/client') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/client') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/client') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>LARAVEL_LMS</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Trang chủ</a>
                <a href="about.html" class="nav-item nav-link">giới thiệu</a>
                <a href="courses.html" class="nav-item nav-link">các khoá học</a>
                <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
            </div>
            @if (Auth::check() && Auth::user()->role == 'st')
                <nav class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        {{ Auth::user()->full_name }}
                    </a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('my.courses') }}" class="dropdown-item">Khoá học của tôi</a>
                        <a href="{{ route('logout') }}" class="dropdown-item">Đăng xuất</a>
                    </div>
                </nav>
            @elseif(Auth::check() && Auth::user()->role == 'tc')
                <nav class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        {{ Auth::user()->full_name }}
                    </a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('teacher.courses.index') }}" class="dropdown-item">Khoá học của tôi</a>
                        <a href="{{ route('logout') }}" class="dropdown-item">Đăng xuất</a>
                    </div>
                </nav>
            @else
            <a href="{{ route('login') }}" class="btn btn-primary py-4 px
                -lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->


    @yield('content')

    <livewire:chat-box />

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Liên kết nhanh -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Liên kết nhanh</h4>
                    <a class="btn btn-link" href="">Giới thiệu</a>
                    <a class="btn btn-link" href="">Liên hệ</a>
                    <a class="btn btn-link" href="">Chính sách bảo mật</a>
                    <a class="btn btn-link" href="">Điều khoản sử dụng</a>
                    <a class="btn btn-link" href="">Câu hỏi thường gặp</a>
                </div>

                <!-- Thông tin liên hệ -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Liên hệ</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Đường ABC</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 123 456 789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>support@elearning.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Thư viện -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Thư viện khóa học</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Bản tin -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Nhận bản tin</h4>
                    <p>Đăng ký để nhận thông tin khóa học mới và ưu đãi.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Email của bạn">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            Đăng ký
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bản quyền -->
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Nền tảng học trực tuyến</a>, Bảo lưu mọi quyền.<br><br>
                        Thiết kế bởi <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>
                        Phân phối bởi <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Trang chủ</a>
                            <a href="">Cookies</a>
                            <a href="">Hỗ trợ</a>
                            <a href="">Hỏi đáp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/client') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('assets/client') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assets/client') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('assets/client') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/client') }}/js/main.js"></script>
    @livewireScripts
</body>

</html>
