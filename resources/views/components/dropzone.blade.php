<div id="image-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title pull-left">
                    <h4>{{ __('Upload Images') }}</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>                                
                </button>
            </div>
            <div class="modal-body">
                <form action="{{$route}}" class="dropzone image-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="fallback"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
</div>