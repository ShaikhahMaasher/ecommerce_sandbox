@extends('layouts.backend.master')
@section('head')
    @yield('head')
@endsection
@section('body')
  <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper" id="app">
      
          @include('layouts.backend.header')

          @include('layouts.backend.nav')

          @yield('content')

          @include('layouts.backend.footer')

          @include('layouts.backend.sidebar')
      
      </div>
      <!-- ./wrapper -->

      <!-- REQUIRED JS SCRIPTS -->
      <script src="{{asset('js/app.js')}}"></script>
      @yield('footer')
  </body>
@endsection