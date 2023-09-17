@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Learnwise Impressions</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">DashBoard</a></li>
                    <li class="breadcrumb-item active">Add Impressions</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="row m-10">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Impressions</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label for="text" class="form-label text-right">Choose Playlist<span
                                        class="text-danger">*</span> :</label>
                                <select class="form-control select2bs4" id="playlist" style="width: 100%;">
                                    <option value="">Select Playlist</option>
                                    @foreach ($Playlists as $Playlist)
                                        <option value="{{ $Playlist->id }}">{{ $Playlist->playlist }}</option>
                                    @endforeach
                                </select>
                                <div class="playlisterror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <label for="image" class="form-label text-right">Achievers Image<span
                                    class="text-danger">*</span> :</label>
                            <div class="form-group row">
                                <div class="col-md-10 col-8">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input class="custom-file-input" id="courseimage" type="file"
                                            onchange="AchieversImage()">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="imageerror" style="color:red;font-size:16px"></div>

                                </div>

                                <div class="col-md-2 col-4">
                                    <button type="button" class="btn btn-secondary btn-tooltip float-left"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Image with Aspect Dimension Required. Image should have a resolution of 368 x 207 pixels.">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <p style="color: red;font-size:14px;">-> required pixel:width-1080px and height:1080px!!</p>

                </div>
                <div class="card-footer">
                    <a class="btn btn-default " href="{{ route('acheiverslist') }}">Back</a>&emsp;
                    <button type="button" id="addBtn" class="btn btn-primary float-right"
                        onclick="ImpressionSave()">
                        Save </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@include('admin.layouts.footer')

<script>
    function ImpressionSave() {

        var image = $('input#courseimage').val();
        var Playlist = $('select#playlist').val();


        if (Playlist == '') {
            $('#playlist').focus();
            $('#playlist').css({
                'border': '1px solid red'
            });
            $('.playlisterror').show();
            $('.playlisterror').css('color', 'red');
            $('.playlisterror').text("choose playlist*");
            return false;
        } else

            $('#playlist').css({
                'border': '1px solid #CCC'
            });
        $('.playlisterror').hide();



        if (image == '') {
            $('#courseimage').focus();
            $('#courseimage').css({
                'border': '1px solid red'
            });
            $('.imageerror').show();
            $('.imageerror').css('color', 'red');
            $('.imageerror').text("choose image*");
            return false;
        } else

            $('#courseimage').css({
                'border': '1px solid #CCC'
            });
        $('.imageerror').hide();




        data = new FormData();


        data.append('image', $('#courseimage')[0].files[0]);
        data.append('playlist', Playlist);
        data.append('_token', '{{ csrf_token() }}');
        $.ajax({

            type: "POST",
            url: "/acheivers-save",
            data: data,
            dataType: "json",
            contentType: false,
            //cache: false,
            processData: false,

            success: function(data) {
                if (data['success']) {
                    Swal.fire({
                        title: 'Image Added Success',
                        // text: "You won't be able to revert this!",
                        icon: 'success',
                        // showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/acheivers-list';
                        }
                    })
                }
            }
        })
    }

    function AchieversImage() {

        $('.imageerror').hide();

        var name = document.getElementById("courseimage").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();

        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            $('.imageerror').show();
            $('.imageerror').text('Please select a valid image.');
            $('input#courseimage').val("");
            return false;
        }

        var oFReader = new FileReader();
        oFReader.onload = function(oFREvent) {
            var img = new Image();
            img.src = oFREvent.target.result;

            img.onload = function() {
                var width = img.width;
                var height = img.height;
                var desiredWidth = 1080;
                var desiredHeight = 1080;

                if (width !== desiredWidth || height !== desiredHeight) {
                    $('.imageerror').show();
                    $('.imageerror').text('Please select an image with dimensions ' + desiredWidth + 'x' +
                        desiredHeight + ' pixels.');
                    $('input#courseimage').val("");
                    return false;
                }

                // Additional code for image size check
                var f = document.getElementById("courseimage").files[0];
                var fsize = f.size || f.fileSize;
                if (fsize > 6000000) {
                    $('.imageerror').show();
                    $('.imageerror').text('Please select a 6MB image.');
                    $('input#courseimage').val("");
                    return false;
                }

                // If all validations pass, you can continue with form submission or other actions
            };
        };
        oFReader.readAsDataURL(document.getElementById("courseimage").files[0]);
    }
</script>
