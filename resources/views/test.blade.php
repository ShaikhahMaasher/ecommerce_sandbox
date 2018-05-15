@extends('layouts.backend.master')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
@endsection

@section('body')
<body id="app">
    <form action="/admin/products/" method="get">
        <a href="#" class="open-image-modal" data-toggle="modal" data-target="#image-modal">Open Image Modal</a>
    </form>
    <div id="image-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('images.store')}}" class="dropzone image-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="fallback">
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/dropzone.js')}}"></script>
    <script>
        // $(document).on('click', '.open-image-modal', function() {
        //     $()
        // });
        // $(document).ready(function() {
        //     $('.open-image-modal').click(function() {
        //         $('#image-modal').modal('show');
        //         $('.image-form').show();
        //     });
        // });
    </script>
</body>
@endsection