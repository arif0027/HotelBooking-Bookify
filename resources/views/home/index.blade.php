<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        @include('home.header')
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    @include('home.slider')
    <!-- end banner -->
    <!-- about -->
    @include('home.about')
    <!-- end about -->

    <!-- hotel -->
    @include('home.hotel')
    <!-- end hotel -->

    <!-- hotel -->
    {{-- @include('home.coxroom') --}}
    <!-- end hotel -->

    <!-- our_room -->
    @include('home.room')
    <!-- end our_room -->
    <!-- gallery -->
    @include('home.gallery')
    <!-- end gallery -->

    <!--  contact -->
    @include('home.contact')
    <!-- end contact -->
    <!--  footer -->
    @include('home.footer')


    <script>
      document.addEventListener("DOMContentLoaded", function (event) {
        var scrollpos = localStorage.getItem("scrollpos");
        if (scrollpos) window.scrollTo(0, scrollpos);
      });
    
      window.onscroll = function (e) {
        localStorage.setItem("scrollpos", window.scrollY);
      };
    </script>
</body>

</html>
