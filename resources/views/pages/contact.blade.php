@extends('layouts.layout')
@section('content')

    <section class="contact-area section_padding_100 mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="contact-heading-text text-center mb-100">
                        <span></span>
                        <h2>Contactez-nous</h2>
                        <p></p>
                    </div>
                </div>
                <!-- Contact Form Area -->
                <div class="col-10">
                    <div class="contact-form-area">
                        <form action=" {{ route('contact') }} " method="post">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom">
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn studio-btn mt-3"><img src="users/img/core-img/logo-icon.png" alt=""> Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-10">
                    <div id="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.448233398962!2d1.1837108148680744!3d6.2044522955084815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x707af34860e84461!2sCreazione!5e0!3m2!1sfr!2stg!4v1594982325887!5m2!1sfr!2stg" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <!-- Contact Info -->
                    <div class="contact-core-info d-flex align-items-center wow fadeInLeftBig" data-wow-delay="1s" data-wow-duration="1000ms">
                        <div class="contactInfo">
                            <img src=" {{ URL::asset('users/img/Fichier 3.png') }} " alt="">
                            <!-- Single Footer Content -->
                            <div class="single-footer-content">
                                <img src="users/img/core-img/map.png" alt="">
                                <a href="#">Adidoadin, 50m de l'hotel la concorde</a>
                            </div>
                            <!-- Single Footer Content -->
                            <div class="single-footer-content">
                                <img src="users/img/core-img/smartphone.png" alt="">
                                <a href="#">(+228)70541086 | 91779959 </a>
                            </div>
                            <!-- Single Footer Content -->
                            <div class="single-footer-content">
                                <img src="users/img/core-img/envelope-2.png" alt="">
                                <a href="#">contact@creazionestudio.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('includes._social')

@endsection