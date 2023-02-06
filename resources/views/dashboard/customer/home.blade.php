@extends('dashboard.customer.layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('ui/css/card.css') }}">
</head>
<!-- Slider start -->
<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <div class="container">
                    <div class="box">
                        <div class="video-container ">
                            <video autoplay muted loop>
                                <source src="{{ asset('ui/images/slider/slider_video_1.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="box over">
                            <div class="overlay-main-home">
                                <div class="main-title-div">
                                    <h1 class="main-title">Welcome to</h1>
                                    <h1 class="second-title">Cushion House</h1>
                                    <p class="sub-title">Welcome to CushionHouse.com, Cushion house is a
                                        luxury furniture solution provider, manufacturer in Sri
                                        Lanka since 2019. Cushion house provides a wide range
                                        of products to their customers, In which their well known
                                        for their products and services in the modern furniture
                                        and sofa manufacturing field </p>
                                    <div class="see-more-btn row">
                                        <h4 class="see-more-text align-self-center">See more..</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="box">
                        <div class="video-container ">
                            <video autoplay muted loop>
                                <source src="{{ asset('ui/images/slider/slider_video_2.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                    <div class="box over">
                        <div class="overlay-main-home">
                            <div class="main-title-div">
                                <h1 class="main-title">Welcome to</h1>
                                <h1 class="second-title">Cushion House</h1>
                                <p class="sub-title">Welcome to CushionHouse.com, Cushion house is a
                                    luxury furniture solution provider, manufacturer in Sri
                                    Lanka since 2019. Cushion house provides a wide range
                                    of products to their customers, In which their well known
                                    for their products and services in the modern furniture
                                    and sofa manufacturing field </p>
                                <div class="see-more-btn row">
                                    <h4 class="see-more-text align-self-center">See more..</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="image-main"
                    style="background-image: url('{{ asset('ui/images/category/category_img_1.jpg') }}');">
                    <div class="overlay-main-home d-flex row" style="background-color: rgba(0, 0, 0, 0.689);">
                        <div class=" d-flex align-content-around">
                            <div class="category-image m-3 "
                                style="background-image: url('{{ asset('ui/images/category/category_img_1.jpg') }}');">
                                <a href="product.html">
                                    <div class="overlay">
                                    </div>
                                </a>
                            </div>
                            <div class="category-image m-3"
                                style="background-image: url('{{ asset('ui/images/category/category_img_1.jpg') }}');">
                                <a href="product.html">
                                    <div class="overlay">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev p-" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- Slider end -->


<!-- Category start -->
<section>
    <div class="row-12 ">
        <div class="col">
            <h2 class="category-text strikearound reveal">CATEGORIES</h2>
        </div>
    </div>
    <div class="container   reveal">
        <div class="row">

            <div class="col-md-3 d-flex justify-content-center">
                <div class="category-image"
                    style="background-image: url('{{ asset('ui/images/category/category_img_1.jpg') }}');">
                    <a href="product.html">
                        <div class="overlay">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="category-image"
                    style="background-image: url('{{ asset('ui/images/category/category_img_2.png') }}');">
                    <div class="overlay">
                    </div>
                </div>
            </div>
            <div class=" col-md-3 d-flex justify-content-center">
                <div class="category-image"
                    style="background-image: url('{{ asset('ui/images/category/category_img_3.png') }}');">
                    <div class="overlay">
                    </div>
                </div>
            </div>
            <div class=" col-md-3 d-flex justify-content-center">
                <div class="category-image"
                    style="background-image: url('{{ asset('ui/images/category/category_img_1.jpg') }}');">
                    <div class="overlay">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category end -->



<!-- What's New start -->
<div class="row-12 mt-5 ">
    <div class="col">
        <h2 class="category-text strikearound reveal">WHAT'S NEW </h2>
    </div>
</div>
<section>
    <div class="product-div reveal">
        <div class="d-flex flex-wrap gap-4  justify-content-center">
            <a href="sofa.html">
                <div class="card "
                    style="background-image:url('{{ asset('ui/images/product-images/sofa-1.jpg') }}'); ">
                    <figure>

                    </figure>
                    <section class="details">
                        <div class="min-details">
                            <h1>Blackly <span>sofa</span></h1>
                            <h1 class="price" style="color: greenyellow;font-weight: 300;">Rs 220,000/=</h1>
                        </div>
                        <div class="options">
                            <div class="options-size m-0">
                                <div class="card-details-div" style="background-color: rgb(126, 217, 87); ">
                                    <p class="card-details-div-text">
                                        Left Sectionalsd
                                    </p>
                                </div>
                                <div class="card-details-div" style="background-color: rgb(132, 213, 190); ">
                                    <p class="card-details-div-text">
                                        Albisia Wood
                                    </p>
                                </div>
                                <div class="card-details-div" style="background-color: rgb(161, 87, 217); ">
                                    <p class="card-details-div-text">
                                        175 Inches
                                    </p>
                                </div>
                            </div>
                           
                               
                                    <img style="  border: 1px solid rgb(255, 255, 255);" class="card-color-img "
                                        src="{{ asset('ui/images/colors/color-c11-150x150.jpg') }}" alt="">
                               
                              
                                  

                               
                            
                        
                        </div>
                    </section>
                </div>
            </a>
            <div class="card " style="background-image:url('{{ asset('ui/images/product-images/sofa-2.jpg') }}'); ">
                <figure>

                </figure>
                <section class="details">
                    <div class="min-details">
                        <h1>Blackly <span>sofa</span></h1>
                        <h1 class="price" style="color: greenyellow;font-weight: 300;">Rs 220,000/=</h1>
                    </div>
                    <div class="options">
                        <div class="options-size m-0">
                            <div class="card-details-div" style="background-color: rgb(217, 141, 87); ">
                                <p class="card-details-div-text">
                                    Left Sectionalsd
                                </p>
                            </div>
                            <div class="card-details-div" style="background-color: rgb(174, 213, 132); ">
                                <p class="card-details-div-text">
                                    Jack Wood
                                </p>
                            </div>
                            <div class="card-details-div" style="background-color: rgb(161, 87, 217); ">
                                <p class="card-details-div-text">
                                    75 Inches
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <img style="  border: 1px solid rgb(255, 255, 255);" class="card-color-img"
                                        src="{{ asset('ui/images/colors/color-c11-150x150.jpg') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>

                </section>
            </div>
            <div class="card " style="background-image:url('{{ asset('ui/images/product-images/sofa-3.jpg') }}'); ">
                <figure>

                </figure>
                <section class="details">
                    <div class="min-details">
                        <h1>Blackly <span>sofa</span></h1>
                        <h1 class="price" style="color: greenyellow;font-weight: 300;">Rs 220,000/=</h1>
                    </div>
                    <div class="options">
                        <div class="options-size m-0">
                            <div class="card-details-div" style="background-color: rgb(217, 141, 87); ">
                                <p class="card-details-div-text">
                                    Left Sectionalsd
                                </p>
                            </div>
                            <div class="card-details-div" style="background-color: rgb(174, 213, 132); ">
                                <p class="card-details-div-text">
                                    Jack Wood
                                </p>
                            </div>
                            <div class="card-details-div" style="background-color: rgb(161, 87, 217); ">
                                <p class="card-details-div-text">
                                    75 Inches
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <img style="  border: 1px solid rgb(255, 255, 255);" class="card-color-img"
                                        src="{{ asset('ui/images/colors/color-c11-150x150.jpg') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>

                </section>
            </div>
            <div class="card " style="background-image:url('{{ asset('ui/images/product-images/sofa-4.jpg') }}'); ">
                <figure>

                </figure>
                <section class="details">
                    <div class="min-details">
                        <h1>Blackly <span>sofa</span></h1>
                        <h1 class="price" style="color: greenyellow;font-weight: 300;">Rs 220,000/=</h1>
                    </div>
                    <div class="options">
                        <div class="options-size m-0">
                            <div class="card-details-div" style="background-color: rgb(217, 141, 87); ">
                                <p class="card-details-div-text">
                                    Left Sectionalsd
                                </p>
                            </div>
                            <div class="card-details-div" style="background-color: rgb(174, 213, 132); ">
                                <p class="card-details-div-text">
                                    Jack Wood
                                </p>
                            </div>
                            <div class="card-details-div" style="background-color: rgb(161, 87, 217); ">
                                <p class="card-details-div-text">
                                    75 Inches
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <img style="  border: 1px solid rgb(255, 255, 255);" class="card-color-img"
                                        src="{{ asset('ui/images/colors/color-c11-150x150.jpg') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>

                </section>
            </div>
            <div class="card " style="background-image:url('{{ asset('ui/images/product-images/sofa-') }}'); ">
                <figure>

                </figure>
                <section class="details">
                    <div class="min-details">
                        <h1>Blackly <span>sofa</span></h1>
                        <h1 class="price" style="color: greenyellow;font-weight: 300;">Rs 220,000/=</h1>
                    </div>
                    <div class="options">
                        <div class="options-size m-0">
                            <div class="card-details-div" style="background-color: rgb(217, 141, 87); ">
                                <p class="card-details-div-text">
                                    Left Sectionalsd
                                </p>
                            </div>
                            <div class="card-details-div" style="background-color: rgb(174, 213, 132); ">
                                <p class="card-details-div-text">
                                    Jack Wood
                                </p>
                            </div>
                            <div class="card-details-div" style="background-color: rgb(161, 87, 217); ">
                                <p class="card-details-div-text">
                                    75 Inchesd
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <img style="  border: 1px solid rgb(255, 255, 255);" class="card-color-img"
                                        src="{{ asset('ui/images/colors/color-c11-150x150.jpg') }}" alt="">
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>
</section>



<!-- What's New end -->




<!-- Design Steps start -->
<div class="row-12 ">
    <div class="col">
        <h2 class="category-text  strikearound  reveal">STEPS FOR DESIGN YOUR OWN SOFA</h2>
    </div>
</div>
<section>
    <div class="col-12 align-self-">
        <div class=" image-background  reveal"
            style="background-image: url('{{ asset('ui/images/background/steps_background_img.png') }}');">
            <div class="image-background-overlay d-flex flex-column">
                <div class="reveal ">
                    <div class="desing-steps ">
                        <div class="step-div row-12 d-flex ">
                            <img class="step-img" src="{{ asset('ui/images/steps/step_1.png') }}" alt="">
                            <div class="col-md-6">
                                <div class="d-flex flex-column">
                                    <h4 class="step-title ">1 CHOOSE YOUR STYLE</h4>
                                    <p class="step-description">
                                        Start your design by picking one of nine styles from
                                        Cushion House Sofa Company. They include a variety of
                                        arm shapes, structures, cushion styles, and more. (You’ll
                                        further hone this style later with colors and materials.)
                                        Whether you want classic or modern something firm, or
                                        comfort you can sink into we have a sofa style for
                                        everyone.
                                    </p>
                                    <p class="step-description">
                                        And when we say custom, we mean custom. If you don’t
                                        see what you’re looking for on our site, you can share a
                                        link or upload a picture of your own
                                    </p>
                                    <img class="mt-1 align-self-center 
                  "
                                        src="{{ asset('ui/images/steps/step_1_second_img.png') }}"
                                        style="width: 20vw;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal step-flex">
                    <div class="desing-steps   ">
                        <div class="step-div  row-12 d-flex ">
                            <div class=" d-flex flex-column">
                                <h4 class="step-title">2 CUSTOM SIZING</h4>
                                <p class="step-description l">
                                    Time for the perfect fit.
                                    A key advantage of custom furniture is its ability to fit a full
                                    range of spaces and floor plans.
                                </p>
                                <p class="step-description l">
                                    Your next step is to choose between sofa or sectional, then
                                    specify the exact depth, length, and height of each piece,
                                    down to the inch. We can build sofas of any size, from a love
                                    seat, to an extra large left sectional or right sectional.
                                </p>
                                <p class="step-description l">
                                    Whichever type of sofa you choose, together we’ll make sure
                                    it fits perfectly into your space
                                </p>
                            </div>
                            <img class="step-img" src="{{ asset('ui/images/steps/step_2.png') }} " alt="">
                        </div>
                    </div>
                </div>
                <div class="reveal ">
                    <div class="desing-steps ">
                        <div class="step-div row-12 d-flex ">
                            <img class="step-img" src="{{ asset('ui/images/steps/step_3.png') }}" alt="">
                            <div class="d-flex flex-column">
                                <h4 class="step-title mb-4">3 SELECT FABRIC & MATERIALS</h4>
                                <p class="step-description ">
                                    Now that you know the size and style of your couch, it’s time to
                                    fully picture what it will look like in your home. This is your
                                    chance to decide the color and material that will refresh and
                                    enliven your space.
                                </p>
                                <p class="step-description">
                                    As a custom sofa manufacturer, we’re proud to partner with top
                                    quality fabric maker Kravet to bring you a variety of fabric
                                    options in a myriad of colors. Browse our selection including
                                    velvets, chenilles, suede leathers, & textured weaves find the
                                    perfect textile to cover your sofa, its pillows and its cushions
                                </p>
                                <p class="step-description">
                                    Lastly, you decide the what you want in your sofa’s legs. Choose
                                    from eight different leg styles, which include several shades of
                                    both wood and metal
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Design Steps end -->

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

@endsection