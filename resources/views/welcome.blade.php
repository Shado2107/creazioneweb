<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>{{setting('site.title')}} | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href=" {{ asset('users/img/core-img/favicon.ico') }} ">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href=" {{ URL::asset('users/css/core-style.css') }} ">
    <link rel="stylesheet" href=" {{ URL::asset('users/style.css') }} ">

    <!-- Responsive CSS -->
    <link href="{{asset('users/css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <div class="questions-area text-center">
            {{-- <p>Did you know?</p>
            <ul>
                <li>The largest photography competition is 353,768 entries.</li>
                <li>Photography is the toughest profession in the world.</li>
                <li>The world’s largest photo album by dimensions was 13 ft 11.5 in x 17 ft.</li>
                <li>The world’s largest photo mosaic featured 176,175 pictures.</li>
                <li>The world’s largest camera lens was a 5200mm lens attached to a canon.</li>
            </ul> --}}
        </div>
    </div>

    <!-- Gradient Background Overlay -->
    <div class="gradient-background-overlay"></div>

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="/"><img  src="{{ URL::asset('users/img/Fichier 3.png') }}" alt="Logo" ></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Creazione studio <span class="sr-only">(current)</span></a>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="index.html">Home</a>
                                            <a class="dropdown-item" href="about-me.html">About</a>
                                            <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                                            <a class="dropdown-item" href="blog.html">Blog</a>
                                            <a class="dropdown-item" href="contact.html">Contact</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                        </div>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="/portfolio">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about">A propos</a>
                                    </li>
                                   
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">contact</a>
                                    </li>
                                </ul>
                                <!-- Search Form -->
                                <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="rechercher..." id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div id="searchbtn">
                                    <img src="{{ asset('users/img/core-img/search.png') }}" alt="">
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Social Sidebar Area Start -->
    <div class="social-sidebar-area bg-white">
        <!-- Social Area -->
       @include('includes._sidesocial')
        <!-- Message Box -->
        <div class="message-box">
            <a href="#" data-toggle="modal" data-target=".contact-modal-lg">Devis</a>
        </div>
    </div>
    <!-- Social Sidebar Area End -->
    
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="carousel h-100 slide" data-ride="carousel" id="welcomeSlider">
            <!-- Carousel Inner -->
            <div class="carousel-inner h-100">

                <div class="carousel-item h-100 bg-img active" style="background-image: url({{ asset('users/img/bg-img/copie1.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>01.</span>
                            <h2> les couleurs agissent sur nos émotions et nos comportements.</h2>
                        </div>
                    </div>
                </div>

                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie2.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>02.</span>
                            <h2> Le rouge attire l’attention permet de facilement de se faire remarquer.</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie3.jpg') }} );">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>03.</span>
                            <h2> L’orange est une couleur ludique et revigorante </h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie4.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>04.</span>
                            <h2> Le jaune est une couleur chaleureuse qui évoque le soleil</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie5.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>05.</span>
                            <h2> Le vert est la couleur polyvalente par excellence</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie6.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>06.</span>
                            <h2> Le bleu symbolise la confiance et la maturité</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie7.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>07.</span>
                            <h2> Le violet est la couleur du luxe</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie8.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>08.</span>
                            <h2> le rose vous permettra de donner une allure moderne</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie9.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>09.</span>
                            <h2> Le marron rendre votre marque plus masculine, authentique et sérieuse</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie10.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>10.</span>
                            <h2> le gris est un parfait équilibre de maturité, d’élégance et de sérieux</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie11.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>11.</span>
                            <h2> Believe you can fly</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie12.jpg') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>12.</span>
                            <h2> Believe you can fly</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{ asset('users/img/bg-img/copie13.png') }});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>13.</span>
                            <h2> Believe you can fly</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#welcomeSlider" data-slide-to="0" class="active bg-img" style="background-image: url({{ asset('users/img/bg-img/copie1.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="1" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie2.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="2" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie3.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="3" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie4.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="4" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie5.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="5" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie6.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="6" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie7.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="7" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie8.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="8" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie9.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="9" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie10.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="10" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie11.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="11" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie12.jpg') }});"></li>
                <li data-target="#welcomeSlider" data-slide-to="12" class="bg-img" style="background-image: url({{ asset('users/img/bg-img/copie13.png') }});"></li>
            </ol>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="contact-popup-form" id="contact-modal-lg">
        <div class="modal fade contact-modal-lg" tabindex="-1" role="dialog" aria-labelledby="contact-modal-lg" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-heading-text text-center mb-30">
                                    <span></span>
                                    <h2>Demande de devis</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <div class="container-fluid">
                            <form action="{{ route('mail') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nom">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Prenom">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="col-12 ">
                                        <input type="text" class="form-control" name="number" id="number" placeholder="Numéro de téléphone">
                                    </div>
                                    <div class="col-12">
                                        <label for="service">Services</label>
                                        <select name="service" id="service" class="form-control">
                                            @foreach($services as $s)
                                                <option value="{{$s->id}}">{{$s->libelle}}
                                                </option>
                                            @endforeach 
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="10" rows="5" placeholder="Description ou details suplémentaires"></textarea>
                                    </div>
                                    
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn studio-btn mt-3"><img src="img/core-img/logo-icon.png" alt="">Demander</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->


    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://creazionestudio.com" target="_blank">Creazione studio</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ URL::asset('users/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ URL::asset('users/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::asset('users/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('users/js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ URL::asset('users/js/active.js') }}"></script>

</body>

</html>