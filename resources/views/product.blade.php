@extends('layouts.frontend')

@section('content')

<!--====== SLIDER PART START ======-->

<section id="home" class="slider-area pt-100">
    <div class="container-fluid position-relative">
        <div class="slider-active">
            <div class="single-slider">
                <div class="slider-bg">
                    <div class="row no-gutters align-items-center ">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider-product-image d-none d-md-block">
                                <img src="assets/images/slider/8.png" alt="Slider">
                                <div class="slider-discount-tag">
                                    <p>-50% <br> REDUCERE</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                                <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Farduri de
                                    ochi <span>NUDE</span></h1>
                                <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Bucurați-vă de o privire
                                    perfectă!<br> Economisiți 50% la paleta noastră exclusivă de farduri de ochi
                                    nude.<br> Descoperiți culori rafinate pentru un machiaj impecabil și natural.</p>
                                <a class="main-btn" href="http://127.0.0.1:8000/Ochi" data-animation="fadeInUp" data-delay="1.5s">Vezi produse<i
                                        class="lni-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-slider">
                <div class="slider-bg">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider-product-image d-none d-md-block">
                                <img src="assets/images/slider/6.png" alt="Slider">
                                <div class="slider-discount-tag">
                                    <p>-20% <br> REDUCERE</p>
                                </div>
                            </div> <!-- slider product image -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                                <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                    <span>Noutăți</span> în prim-plan!</h1>
                                <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Abonează-te acum la
                                    newsletterul nostru și vei primi actualizări periodice cu cele mai recente lansări
                                    de produse, oferte speciale și sfaturi de machiaj de la experții noștri. Nu rata
                                    ocazia de a fi mereu în pas cu cele mai noi trenduri în frumusețe!</p>
                                <a class="main-btn" href="#contact" data-animation="fadeInUp" data-delay="1.5s">Abonează-te
                                    acum!<i class="lni-chevron-right"></i></a>
                            </div> <!-- slider product content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider">
                <div class="slider-bg">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider-product-image d-none d-md-block">
                                <img src="assets/images/slider/7.jpg" alt="Slider">
                                <div class="slider-discount-tag">
                                    <p>-30% <br> Reducere</p>
                                </div>
                            </div> <!-- slider product image -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                                <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                    <span>Răsfăț</span> Zilnic</h1>
                                <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s"> Înconjoară-te cu lux și
                                    eleganță în fiecare zi cu acest set de machiaje. Fiecare produs este creat cu grijă
                                    pentru a-ți oferi o experiență de înfrumusețare de neuitat, indiferent de ocazie.
                                    Ia-ți timp pentru tine și bucură-te de răsfățul unei frumuseți perfecte în fiecare
                                    zi.</p>
                                <a class="main-btn" href="#product" data-animation="fadeInUp" data-delay="1.5s">Vezi
                                    produsele<i class="lni-chevron-right"></i></a>
                            </div> <!-- slider product content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- slider active -->
        <div class="slider-social">
            <div class="row justify-content-end">
                <div class="col-lg-7 col-md-6">
                    <ul class="social text-right">
                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- container fluid -->
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== DISCOUNT PRODUCT PART START ======-->

<section id="discount-product" class="discount-product pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-discount-product mt-10">
                    <div class="product-image">
                        <img src="assets/images/discount-product/product-1.png" alt="Product">
                    </div> <!-- product image -->
                    <div class="product-content">
                        <h4 class="content-title mb-15">Explorează noile tendințe în machiaj <br> pentru un look perfect
                        </h4>
                        <a href="#product">Vezi colecția <i class="lni-chevron-right"></i></a>
                    </div> <!-- product content -->
                </div> <!-- single discount product -->
            </div>
            <div class="col-lg-6">
                <div class="single-discount-product mt-10">
                    <div class="product-image">
                        <img src="assets/images/discount-product/product-2.png" alt="Product">
                    </div> <!-- product image -->
                    <div class="product-content">
                        <h4 class="content-title mb-15">Ofertă Specială <br> Reduceri de până la 50%</h4>
                        <a href="#product">Descoperă acum <i class="lni-chevron-right"></i></a>
                    </div> <!-- product content -->
                </div> <!-- single discount product -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== DISCOUNT PRODUCT PART ENDS ======-->

<!--====== PRODUCT PART START ======-->
<section id="product" class="product-area pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="collection-menu text-center mt-30">
                    <h4 class="collection-tilte">Colectia Noastra</h4>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is($category->CATEGORIES) ? 'active' : '' }}"
                                    href="{{ url('/' . $category->CATEGORIES) }}">
                                    {{ $category->CATEGORIES }}
                                </a>
                            </li>
                        @endforeach

                    </div> <!-- nav -->
                </div> <!-- collection menu -->
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel"
                        aria-labelledby="v-pills-furniture-tab">
                        <div class="product-items mt-30">
                            <div class="row product-items-active " style="padding-left:20px">
                                @if(isset($products))
                                    @foreach($products as $product)
                                        <div class="col-md-4">
                                            <br>
                                            <div class="single-product-items">
                                                <div class="product-item-image">
                                                    <a href="#">
                                                        <img src="{{$product->image_name}}" alt="Product" height="320px">
                                                    </a>
                                                    <div class="product-discount-tag">
                                                        <p>Oferta</p>
                                                    </div>
                                                </div>
                                                <div class="product-item-content text-center mt-30">
                                                    <h5 class="product-title"><a href="#">{{$product->name}}</a></h5>
                                                    <ul class="rating">
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                    </ul>
                                                    <span class="regular-price">{{$product->sale_price}} Lei</span>
                                                    <span class="discount-price">{{$product->price}} Lei</span>
                                                    <span class="description">{{$product->description}}</span>
                                                    <add-to-cart-button product-id="{{$product->id}}"
                                                        user-id="{{auth()->user()->id ?? 0}}" />
                                                </div>
                                            </div> <!-- single product items -->
                                        </div>
                                    @endforeach
                                @endif
                            </div> <!-- row -->
                        </div> <!-- product items -->
                    </div> <!-- tab pane -->
                </div> <!-- tab content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRODUCT PART ENDS ======-->


<!--====== SERVICES PART START ======-->

<section id="service" class="services-area pt-55 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-30">
                    <h5 class="mb-15">Magia Machiajului</h5>
                    <h3 class="title mb-15">Descoperă Lumea Machiajului</h3>
                    <p>Întră în universul nostru al frumuseții și descoperă cele mai noi tendințe în machiaj. Fie că îți
                        dorești un look natural sau un machiaj intens, suntem aici pentru a-ți oferi cele mai bune
                        produse și sfaturi de frumusețe.</p>
                </div> <!-- section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="services-left mt-45">
                    <div class="services">
                        <img src="assets/images/services/service9.jpg" alt="">
                        <a href="http://127.0.0.1:8000/blog3" class="main-btn mt-30">Află mai multe <i class="lni-chevron-right"></i></a>
                    </div> <!-- services btn -->
                </div> <!-- services left -->
            </div>
            <div class="col-lg-6">

                <div class="services-right mt-45">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-8">
                            <div class="single-services text-center">
                                <div class="services-icon">
                                    <i class="lni-grid-alt"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Produse de Machiaj</h5>
                                    <p>Descoperă o gamă variată de produse pentru un machiaj perfect în fiecare zi.</p>
                                </div>
                            </div> <!-- single services -->

                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-heart"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Calitate Superioară</h5>
                                    <p>Produse de machiaj de înaltă calitate, pentru frumusețea ta naturală.</p>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-gift"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Oferte Speciale</h5>
                                    <p>Profită de oferte și obține produsele tale preferate la prețuri avantajoase.</p>
                                </div>
                            </div> <!-- single services -->

                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-star"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Experiență de Încredere</h5>
                                    <p>Avem ani de experiență, oferim cele mai bune produse pentru machiaj.</p>
                                </div>
                            </div> <!-- single services -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- services right -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

<section id="showcase" class="showcase-area pt-55 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="showcase-title">
                    <h2 class="title">Descoperă Produsele Noastre</h2>
                </div> <!-- showcase title -->
            </div>
            <div class="col-lg-6">
                <div class="showcase-title">
                    <p>Descoperă o gamă variată de produse de machiaj care îți pun în valoare frumusețea și îți oferă un
                        aspect impecabil în fiecare zi. Lasă-te inspirată și bucură-te de o experiență unică în
                        frumusețe!</p>
                </div> <!-- showcase title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="showcase-active mt-30">
                    <div class="single-showcase">
                        <img src="assets/images/showcase/showcase1.jpg" alt="Produs de Machiaj">
                        <a href="#product" class="main-btn">Vezi Produsul</a>
                    </div> <!-- single showcase -->
                    <div class="single-showcase">
                        <img src="assets/images/showcase/showcase2.jpg" alt="Produs de Machiaj">
                        <a href="#product" class="main-btn">Vezi Produsul</a>
                    </div> <!-- single showcase -->
                </div> <!-- showcase active -->
            </div>
            <div class="col-lg-4">
                <div class="showcase-active mt-30">
                    <div class="single-showcase">
                        <img src="assets/images/showcase/showcase3.jpg" alt="Produs de Machiaj">
                        <a href="#product" class="main-btn">Vezi Produsul</a>
                    </div> <!-- single showcase -->
                    <div class="single-showcase">
                        <img src="assets/images/showcase/showcase4.jpg" alt="Produs de Machiaj">
                        <a href="#product" class="main-btn">Vezi Produsul</a>
                    </div> <!-- single showcase -->
                </div> <!-- showcase active -->
            </div>
            <div class="col-lg-4">
                <div class="showcase-active mt-30">
                    <div class="single-showcase">
                        <img src="assets/images/showcase/showcase5.jpg" alt="Produs de Machiaj">
                        <a href="#product" class="main-btn">Vezi Produsul</a>
                    </div> <!-- single showcase -->
                    <div class="single-showcase">
                        <img src="assets/images/showcase/showcase6.jpg" alt="Produs de Machiaj">
                        <a href="#product" class="main-btn">Vezi Produsul</a>
                    </div> <!-- single showcase -->
                </div> <!-- showcase active -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<!--====== TEAM PART START ======-->

<section id="team" class="team-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">Echipa Noastră în Machiaj</h3>
                    <p>Descoperă pasiunea și talentul echipei noastre în machiaj, dedicată să-ți ofere cele mai bune
                        sfaturi și produse pentru a-ți evidenția frumusețea.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/poza111.jpg" alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Evelyn</a></h4>
                        <span>Makeup Artist Principal</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/poza222.jpg" alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Brianna</a></h4>
                        <span>Consultant de Frumusețe</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/poza333.jpg" alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Alexandra</a></h4>
                        <span>Expert în Îngrijirea Pielii</span>

                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/poza444.jpg" alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Bianca</a></h4>
                        <span>Manager de Marketing</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEAM PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section id="testimonial" class="testimonial-area pt-200">
    <div class="testimonial-bg bg_cover" style="background-image: url(assets/images/testimonial/ts3-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <div class="testimonial-content">
                    <div class="testimonial-active">
                        <div class="single-testimonial">
                            <i class="lni-quotation"></i>
                            <p class="mb-30">Impresionată de calitatea și varietatea produselor de machiaj disponibile.
                                Prețuri accesibile. Noul meu magazin preferat!</p>
                            <h6 class="title">Ana Popescu</h6>
                            <span>- Make-up Artist</span>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <i class="lni-quotation"></i>
                            <p class="mb-30">Produsele sunt uimitoare! Culori vibrante, texturi catifelate și rezistență
                                pe tot parcursul zilei. Recomand cu încredere!</p>
                            <h6 class="title">Elena Ionescu</h6>
                            <span>- Pasionat de beauty</span>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <i class="lni-quotation"></i>

                            <p class="mb-30">Mulțumită de serviciile magazinului online. Livrare rapidă, produse de
                                calitate excelentă. Recomand cu încredere!</p>
                            <h6 class="title">Andreea Mihai</h6>
                            <span>- Blogger beauty</span>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <i class="lni-quotation"></i>
                            <p class="mb-30">Adevărat paradis pentru pasionații de beauty! Produse de calitate excelentă
                                și o gamă vastă. Voi reveni cu siguranță!</p>
                            <h6 class="title">Maria Dumitrescu</h6>
                            <span>- Beauty influencer</span>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <i class="lni-quotation"></i>
                            <p class="mb-30">Magazinul de machiaje perfect! Produse de o calitate extraordinară. Nu voi
                                mai cumpăra de la alt magazin!</p>
                            <h6 class="title">Alexandra Ana</h6>
                            <span>- Pasionat de beauty</span>
                        </div> <!-- single testimonial -->
                    </div> <!-- testimonial active -->
                </div> <!-- testimonial content -->
            </div>
            <div class="col-lg-7 col-md-4">
                <div class="testimonial-play text-right d-none d-md-block">
                    <a class="Video-popup" href="https://www.youtube.com/watch?v=VVs8dlAaBr8"><i
                            class="lni-play"></i></a>
                </div> <!-- testimonial play -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

<!--======  BLOG PART START ======-->

<section id="blog" class="blog-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-10">Blog</h3>
                    <p>Suntem dedicați pasionaților de beauty, oferind o gamă variată de articole, tutoriale și recenzii
                        care te vor ajuta să îți îmbunătățești machiajul și să experimentezi cele mai noi tendințe în
                        machiaj.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="assets/images/blog/b-1.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="http://127.0.0.1:8000/blog1">8 cadouri minunate de make-up, care nu vor goli portofelul</a>
                            </h4>
                            <span>25 MAI, 2024</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title"><a href="#">H. Daniela</a></h6>
                                </div>
                            </div> <!-- meta admin -->
                            <div class="meta-icon">
                                <ul>
                                    <li><a href="#"><i class="lni-share"></i></a></li>
                                    <li><a href="#"><i class="lni-heart"></i></a></li>
                                </ul>
                            </div> <!-- meta icon -->
                        </div> <!-- meta -->
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="assets/images/blog/b-2.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="http://127.0.0.1:8000/blog2">Și rujul are ziua lui! Sărbătoriți-o și cumpărați-vă un ruj
                                    frumos</a></h4>
                            <span>28 MAI, 2024</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title"><a href="#">H. Daniela</a></h6>
                                </div>
                            </div> <!-- meta admin -->
                            <div class="meta-icon">
                                <ul>
                                    <li><a href="#"><i class="lni-share"></i></a></li>
                                    <li><a href="#"><i class="lni-heart"></i></a></li>
                                </ul>
                            </div> <!-- meta icon -->
                        </div> <!-- meta -->
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="assets/images/blog/b-3.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="http://127.0.0.1:8000/blog3">5 idei de machiaj de ochi care rezistă perfect zi și
                                    noapte</a></h4>
                            <span>10 IUNIE, 2024</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title"><a href="#">H. Daniela</a></h6>
                                </div>
                            </div> <!-- meta admin -->
                            <div class="meta-icon">
                                <ul>
                                    <li><a href="#"><i class="lni-share"></i></a></li>
                                    <li><a href="#"><i class="lni-heart"></i></a></li>
                                </ul>
                            </div> <!-- meta icon -->
                        </div> <!-- meta -->
                    </div>
                </div> <!-- single blog -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--======  BLOG PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-title text-center">
                    <h2 class="title">Contactati-ne!</h2>
                    <p>Pentru întrebări, solicitări speciale sau feedback, nu ezitați să ne trimiteți un mesaj. Ne
                        bucurăm să vă ascultăm și să vă ajutăm cu orice aveți nevoie.</p>
                </div> <!-- contact title -->
            </div>
        </div> <!-- row -->
        <div class="contact-box mt-70">
            <div class="row justify-center">

                <div class="col-lg-6">
                    <div class="contact-info pt-25">
                        <h4 class="info-title">Contact Info</h4>
                        <ul>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>+88 1234 56789</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>contact_makeupshop@gmail.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-home"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>nr. 30, Str. Nufărului, Oradea, Romania
                                        </p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- contact info -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact-form" action="https://formspree.io/f/meqylveo" method="POST"
                            data-toggle="validator">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="Nume"
                                            data-error="Numele este obligatoriu." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <input type="text" name="prename" placeholder="Prenume"
                                            data-error="Prenumele este obligatoriu." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Email"
                                            data-error="Un email valid este obligatoriu." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <textarea name="message" placeholder="Introduceti Mesajul"
                                            data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <button class="main-btn" type="submit">CONTACTATI ACUM!</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- contact box -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<!--====== FOOTER PART START ======-->

<section id="footer" class="footer-area">
    <div class="container">
        <div class="footer-widget pt-50 pb-50">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-7">
                    <div class="footer-logo mt-40">
                        <a href="http://127.0.0.1:8000/">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a>
                        <p class="mt-10">Descoperă machiajele perfecte pentru tine! Explorează colecția noastră și
                            creează-ți un look perfect!</p>
                        <ul class="footer-social mt-25">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer logo -->
                </div>
                <div class="col-lg-2 col-md-4 col-sm-5">
                    <div class="footer-link mt-50 pl-40">
                        <h5 class="f-title">Meniu</h5>
                        <ul>
                            <li><a href="http://127.0.0.1:8000/">Acasa</a></li>
                            <li><a href="#product">Produse</a></li>
                            <li><a href="#service">Servicii</a></li>
                            <li><a href="#showcase">Portofoliu</a></li>
                            <li><a href="#team">Echipa</a></li>
                            <li><a href="#blog">Blog</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2 col-md-4 col-sm-5">
                    <div class="footer-link mt-50 pl-40">
                        <h5 class="f-title">Informații</h5>
                        <ul>
                            <li><a href="http://127.0.0.1:8000/help">Confidențialitate</a></li>
                            <li><a href="http://127.0.0.1:8000/termeni&conditii">Termeni și condiții</a></li>
                            <li><a href="http://127.0.0.1:8000/gdpr">GDPR</a></li>
                    <li><a href="#contact">Contact</a></li>
                     </ul>
                    </div> <!-- footer link -->
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="footer-info mt-50">
                        <h5 class="f-title"><i class="lni lni-map-marker"></i> Locația Noastră</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2719.250496591659!2d21.9454190359631!3d47.03531520107691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDfCsDAyJzA3LjQiTiAyMcKwNTYnNTEuOSJF!5e0!3m2!1sro!2sro!4v1713623000908!5m2!1sro!2sro"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div> <!-- footer link -->
                </div>


            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pt-15 pb-15">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p>Creat de <a href="http://127.0.0.1:8000/" rel="nofollow">Hebriștean Daniela Giorgiana
                                Teodora</a></p>
                    </div> <!-- copyright -->
                </div>
            </div> <!-- row -->
        </div> <!--  footer copyright -->
    </div> <!-- container -->
</section>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TO TOP PART ENDS ======-->

@endsection

@section('scripts')

@endsection