@extends('admin.parts.hotels.main')
@section('hotelsection')
<div class="col-md-12">
    <div class="widget invoice">
        <div class="widget-header">
            <div class="pull-left">
                <h2 class="text-left">Gallery </h2>
            </div>
            <div class="pull-left" style="margin: 27px;">
                (<a data-toggle="modal" href="#gallery-modal"> <i class="icon-upload"></i> Upload</a>)
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div id="gallery-processing">
        <h4 class="text-center">Processing....</h4>
    </div>
    <div id="gallery">

    </div>
</div>
<!-- /Invoice -->


<div class="modal fade" id="gallery-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Image</h4>
            </div>
            <div class="modal-body">
                <form id="galleryForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="hotel name">Select Image</label>
                        <input type="file" id="formImage" name="image" class="form-control" required>
                        <span id="locProcess" style="display:none">Processing...</span>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" data-dismiss="">Upload</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    addGallery();
    $(document).ready(function(){
        $('#galleryForm').on('submit',function(event) {
            event.preventDefault();
            $('#locProcess').show();
            $('#gallery-processing').show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':'{{csrf_token()}}'
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{route("dashboard.hotel.gallery.store",$hotel)}}',
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(msg) {
                    addGallery();
                    $('#formImage').val('');
                    $('#gallery-modal').modal('hide');
                    $('#locProcess').hide();

                },
                error:function(error){
                    $('#gallery-modal').modal('hide');
                    $('#gallery-processing').hide();
                    alert(error.responseJSON.message);
                }
            });
        });
    });

    function addGallery()
    {
        $('#gallery-processing').show();
        $.ajax({
                type: "GET",
                url: '{{route("dashboard.hotel.gallery",$hotel->id)}}',
                success: function(data) {
                    $('#gallery').empty();
                    if(data.galleries.length>0)
                    {
                        $.each(data.galleries,function(index,image){
                            $('#gallery').
                            append(`
                            <div class="galleryImage text-center">
                                <img src="${image.image_url}" class="img-responsive post-img">
                                <div>${image.name}
                                    <span onclick="imageDelete(${image.id});" class="icon-trash" style="margin-left: 7px;cursor:pointer" id="imageDelete"></span>
                                </div>
                            </div>
                            `);
                        });
                    }
                    else
                    {
                        $('#gallery').append(`<h4>No item available</h3>`);
                    }
                    $('#gallery-processing').hide();
                },
                error:function(error){
                    $('#gallery-processing').hide();
                    alert(error.statusText);
                }
            });
    }
    function imageDelete(image)
    {
        $('#gallery-processing').show();
        $.ajax({
                type: "GET",
                url:"{!!route('dashboard.hotel.gallery.delete')!!}/"+image,
                success: function(data) {
                    addGallery();
                },
                error:function(error){
                    $('#gallery-processing').hide();
                    alert(error.statusText);
                }
            });
    }
</script>
@endsection
