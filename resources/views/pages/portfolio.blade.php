@extends('layouts.layout' )
@section('content')



    <!-- Project Area Start -->
    <div class="gallery_area clearfix">
        <div class="container-fluid clearfix">
            <div class="gallery_menu">
                <div class="portfolio-menu">
                    {{-- <button class="active btn" type="button" data-filter="*">Tout</button> --}}
                    <button class="btn" type="button" data-filter=".infographie3D">Infographie 3D</button>
                    <button class="btn" type="button" data-filter=".logo">Logo</button>
                    <button class="btn" type="button" data-filter=".affiche">Affiches</button>
                    <button class="btn" type="button" data-filter=".signaletique">Signalétique</button>
                    {{-- <button class="btn" type="button" data-filter=".life"></button> --}}
                </div>
            </div>

            <div class="row portfolio-column" >

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits affiche">
                    <img src=" {{ asset('users/img/portfolio/affiches/1.jpg') }}  " alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/affiches/1.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item affiche">
                    <img src="  {{ asset('users/img/portfolio/affiches/2.jpg') }}  " alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/affiches/2.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
{{--  --}}
                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item affiche">
                    <img src="  {{ asset('users/img/portfolio/affiches/3.jpg') }} " alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/affiches/3.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                
                 <!-- Single Item -->
                 <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item affiche">
                    <img src="  {{ asset('users/img/portfolio/affiches/4.jpg') }} " alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/affiches/4.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>


                 <!-- Single Item -->
                 <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item logo">
                    <img src="{{ asset('users/img/portfolio/logo/1.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/logo/1.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                
                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item logo">
                    <img src="{{ asset('users/img/portfolio/logo/2.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/logo/2.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                
                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item logo">
                    <img src="{{ asset('users/img/portfolio/logo/3.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/logo/3.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item logo">
                    <img src="{{ asset('users/img/portfolio/logo/4.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/logo/4.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item infographie3D">
                    <img src="{{ asset('users/img/portfolio/3D/1.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/3D/1.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item infographie3D">
                    <img src="{{ asset('users/img/portfolio/3D/2.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/3D/2.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item infographie3D">
                    <img src="{{ asset('users/img/portfolio/3D/3.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/3D/3.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio infographie3D">
                    <img src="{{ asset('users/img/portfolio/18.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/18.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item infographie3D">
                    <img src="{{ asset('users/img/portfolio/17.jpg') }}" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{ asset('users/img/portfolio/17.jpg') }}"><i class="fa fa-eye"></i></a>
                    </div>
                </div> --}}
            </div>

            <div class="row">
                <div class="col-12 text-center mt-70">
                    <a href="#"  class="btn studio-btn"><img src="users/img/core-img/logo-icon.png" alt=""> Voir plus</a>
                </div>
            </div> 
        </div>
    </div>
@endsection