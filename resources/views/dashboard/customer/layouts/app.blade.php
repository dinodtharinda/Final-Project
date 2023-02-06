<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- UI Designs-->
    <link rel="stylesheet" href="{{ asset('ui/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/css/sofa.css') }}">
  
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>


<body id="page-top">
    <div id="preloader"></div>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg  fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->is('home') ? 'active fw-bold' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('product-page') ? 'active fw-bold' : ''     }} {{ request()->is('product-details-page/*') ? 'active fw-bold' : ''     }}   "
                            href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Design Your Own Sofa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</i></a>
                    </li>
                    <li class="nav-item icon">
                        <a class="nav-link" href=""><i class="bi bi-heart"></i></a>
                    </li>
                    <li class="nav-item icon">
                        <a class="nav-link " href="{{ route('customer.cart') }}"><i class="bi bi-cart{{ request()->is('customer/cart') ? '-fill text-dark ' : ''     }}"></i></a>
                    </li>
                    <li class="nav-item icon">
                        <a class="nav-link" href=""><i class="bi bi-search"></i></a>
                    </li>
                    <li class="nav-item icon">
                        <a class="nav-link" href="{{ route('customer.logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="bi bi-person-circle"></i></a>
                        <form action="{{ route('customer.logout') }}" id="logout-form" method="POST">@csrf</form>
                    </li>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->


    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    <!-- bottom nav bar start -->
    <section>
        <div class="fixed-bottom bottom-nav">

            <ul class="d-flex my-4">
                <li class="nav-item  mx-auto" type="none">
                    <a class="nav-link" href=""><i class="bi bi-heart"></i></a>
                </li>
                <li class="nav-item  mx-auto" type="none">
                    <a class="nav-link" href=""><i class="bi bi-cart"></i></a>
                </li>
                <li class="nav-item  mx-auto" type="none">
                    <a class="nav-link" href=""><i class="bi bi-search"></i></a>
                </li>
                <li class="nav-item  mx-auto" type="none">
                    <a class="nav-link" href=""><i class="bi bi-person-circle"></i></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- bottom nav bar end -->



    <!-- Footer start -->
    <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo">Something</h1>

            <h2>Contact</h2>

            <address>
                5534 Somewhere In. The World 22193-10212<br>

                <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
            </address>
        </div>
        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title">Media</h2>

                <ul class="nav__ul">
                    <li>
                        <a href="#">Online</a>
                    </li>
                    <li>
                        <a href="#">Print</a>
                    </li>
                    <li>
                        <a href="#">Alternative Ads</a>
                    </li>
                </ul>
            </li>

            <li class="nav__item nav__item--extra">
                <h2 class="nav__title">Technology</h2>

                <ul class="nav__ul nav__ul--extra">
                    <li>
                        <a href="#">Hardware Design</a>
                    </li>

                    <li>
                        <a href="#">Software Design</a>
                    </li>

                    <li>
                        <a href="#">Digital Signage</a>
                    </li>

                    <li>
                        <a href="#">Automation</a>
                    </li>

                    <li>
                        <a href="#">Artificial Intelligence</a>
                    </li>

                    <li>
                        <a href="#">IoT</a>
                    </li>
                </ul>
            </li>

            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>

                <ul class="nav__ul">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#">Terms of Use</a>
                    </li>

                    <li>
                        <a href="#">Sitemap</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="legal">
            <p>&copy; 2019 Something. All rights reserved.</p>

            <div class="legal__links">
                <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('js/spartan-multi-image-picker.js') }}"></script>


    <script>
        // preloader
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            setTimeout(function() {
                loader.style.display = "none";
            }, 500);
        })
        // preloader end
    </script>
    <script src="{{ asset('ui/js/reveal.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>


</html>
