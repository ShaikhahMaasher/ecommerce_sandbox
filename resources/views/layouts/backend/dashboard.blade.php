@extends('layouts.backend.master')

@section('body')
  <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper" id="app">
      
          @include('layouts.backend.header')

          @include('layouts.backend.nav')

          @yield('content')

          @yield('footer')
          @include('layouts.backend.footer')

          @include('layouts.backend.sidebar')
      
      </div>
      <!-- ./wrapper -->

      <!-- REQUIRED JS SCRIPTS -->
      <script src="{{asset('js/app.js')}}"></script>
  </body>
@endsection