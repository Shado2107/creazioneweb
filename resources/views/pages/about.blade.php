@extends('layouts.layout')
@section('content')

    <!-- About Me Area Start -->
    <section class="about-me-area mt-100 section_padding_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="about-me-thumb">
                        <img src="{{asset('users/img/apropos.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-10">
                    <div class="about-content mt-100 mb-100 text-center">
                        <span></span>
                        <h2>Creazione studio</h2>
                        <p>CREAZIONE est un <strong>studio de création numérique et multimédia créé en 2018</strong> , dont le siège se 
                            trouve à lomé, quartier adidoadin non loin de l'hôtel la concorde.
                            Nous sommes spécialisé en Design 
                            et graphisme 2D & 3D, fourniture de matériels de création graphique
                            et informatique, en travaux d’imprimerie, créations de site web 
                            et application mobile,et la production cinématographique. Nous donnons également des 
                            formations dans les secteurs informatiques et multimédia.</p>
                    </div>
                </div>
                {{-- <div class="col-10">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="single-service-area section_padding_0_100 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <img src="img/core-img/heart.png" alt="">
                                <h5>Infographie 3D</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-service-area section_padding_0_100 text-center wow fadeInUp" data-wow-delay="0.4s">
                                <img src="img/core-img/photo-camera.png" alt="">
                                <h5>Design graphique</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-service-area section_padding_0_100 text-center wow fadeInUp" data-wow-delay="0.9s">
                                <img src="img/core-img/video-camera.png" alt="">
                                <h5>Solutions web</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-10">
                    <!-- Pie Bars Area Start -->
                    <div class="our-skills-area text-center">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar" data-percent="99">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <h6>Infographie 3D</h6>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar" data-percent="83">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <h6>Design graphique</h6>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar" data-percent="75">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <h6>Solutions web</h6>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar" data-percent="80">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <h6>Hi-tech</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="about-content mt-100 mb-100 text-center">
                        <span></span>
                        <h2>Notre équipe</h2>
                        <div class="row">
                        {{-- <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" >
                                <div class="mainflip flip-0">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                                <h4 class="card-title">Camille E. KALAO</h4>
                                                <p class="card-text">Directeur général</p>
                                                <p class="card-text">Infographiste 3D / Guitariste</p>
                                                <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Sunlimetech</h4>
                                                <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-skype"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @foreach($equipe as $eq)
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" >
                                <div class="mainflip flip-0">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="/storage/{{$eq->photo}} " alt="card image"></p>
                                                <h4 class="card-title">{{$eq->prenom}} {{$eq->nom}}</h4>
                                                <p class="card-text"> {{$eq->poste}} </p>
                                                <p class="card-text">  </p>
                                                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Creazione studio</h4>
                                                <p class="card-text">{{$eq->autre}}</p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="">
                                                            <i class="fa fa-skype"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" >
                                <div class="mainflip flip-0">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                                <h4 class="card-title">Sunlimetech</h4>
                                                <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                                <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Sunlimetech</h4>
                                                <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-skype"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" >
                                <div class="mainflip flip-0">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                                <h4 class="card-title">Sunlimetech</h4>
                                                <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                                <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Sunlimetech</h4>
                                                <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-skype"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Me Area End -->

    @include('includes._social')

@endsection