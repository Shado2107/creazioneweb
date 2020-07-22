@include('includes._header')

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
        {{-- <div class="questions-area text-center">
            <p>Le savez-vous ?</p>
            <ul>
                <li>le plus grand concours de photographie compte 354768 entrées</li>
                <li>le plus grand concours de photographie compte 354768 entrées</li>
                <li>The world’s largest photo album by dimensions was 13 ft 11.5 in x 17 ft.</li>
                <li>The world’s largest photo mosaic featured 176,175 pictures.</li>
                <li>The world’s largest camera lens was a 5200mm lens attached to a canon.</li>
            </ul>
        </div> --}}
    </div>

    <!-- Gradient Background Overlay -->
    <div class="gradient-background-overlay"></div>

@include('includes._navbar')

    <!-- Social Sidebar Area Start -->
    <div class="social-sidebar-area">
        <!-- Social Area -->
        @include('includes._sidesocial')
    </div>
    <!-- Social Sidebar Area End -->
    
    
    @yield('content')
    
 
   
@include('includes._footer')