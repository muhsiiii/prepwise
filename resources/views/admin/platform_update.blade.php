@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Platform Update</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">DashBoard</a></li>
                    <li class="breadcrumb-item active">
                        <a href="#">Platform Update</a>
                    </li>
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
                <h3 class="card-title">Update Platform</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="row">



                        <div class="col-md-10">
                            <label for="image" class="form-label text-right">Image<span
                                    class="text-danger">*</span> :</label>
                            <div class="form-group row">
                                <div class="col-md-10 col-8">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input class="custom-file-input" id="image" type="file"
                                                onchange="ImagePlatform()">
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
                    <p style="color: red;font-size:14px;">-> required pixel:width:1104px and height:561px !!</p>
                    <div class="row">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="content" class="form-label text-right">Description<span
                                        class="text-danger">*</span> :</label>
                                <textarea class="form-control" placeholder="enter platform description" name="content" type="text" value=""
                                    id="description" rows="4"></textarea>
                                <div class="descriptionerror" style="color:red;font-size:16px"></div>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="url" class="form-label text-right">URL<span
                                    class="text-danger">*</span> :</label>
                            <input class="form-control" placeholder="enter url" name="text" type="text"
                                value="" id="url">
                                <input type="hidden" value="{{ $id }}" id="pid">
                            <div class="urlerror" style="color:red;font-size:16px"></div>
                        </div>
                    </div>



                </div>


        </div>
        <div class="card-footer">
            <a class="btn btn-default " href="{{ route('platform') }}">Back</a>&emsp;
            <button type="button" id="addBtn" class="btn btn-primary float-right" onclick="PlatformSave()">
                Save </button>
        </div>
        </form>

    </div>
</div>
</div>
</div>
@include('admin.layouts.footer')

<script>
    function PlatformSave() {


        var Description = $('textarea#description').val();
        var image = $('input#image').val();
        var url = $('input#url').val();
        var pid = $('input#pid').val();




        if (image == '') {
            $('#image').focus();
            $('#image').css({
                'border': '1px solid red'
            });
            $('.imageerror').show();
            $('.imageerror').text("choose image*");
            return false;
        } else

            $('#image').css({
                'border': '1px solid #CCC'
            });
        $('.imageerror').hide();

        if (Description == '') {
            $('#description').focus();
            $('#description').css({
                'border': '1px solid red'
            });
            $('.descriptionerror').show();
            $('.descriptionerror').text("choose image*");
            return false;
        } else

            $('#description').css({
                'border': '1px solid #CCC'
            });
        $('.descriptionerror').hide();



        if (url == '') {
            $('#url').focus();
            $('#url').css({
                'border': '1px solid red'
            });
            $('.urlerror').show();
            $('.urlerror').text("choose image*");
            return false;
        } else

            $('#url').css({
                'border': '1px solid #CCC'
            });
        $('.urlerror').hide();



        data = new FormData();

        data.append('image', $('#image')[0].files[0]);
        data.append('description', Description);
        data.append('url', url);
        data.append('pid', pid);


        data.append('_token', '{{ csrf_token() }}');
        $.ajax({

            type: "POST",
            url: "/platform-update",
            data: data,
            dataType: "json",
            contentType: false,
            //cache: false,
            processData: false,

            success: function(data) {
                if (data['success']) {

                    Swal.fire({
                        title: 'Platform Changed Success',
                        // text: "You won't be able to revert this!",
                        icon: 'success',
                        // showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/platform-list';
                        }
                    })
                }
            }
        })

    }

    function ImagePlatform() {

        $('.imageerror').hide();

        var name = document.getElementById("image").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();

        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            $('.imageerror').show();
            $('.imageerror').text('Please select a valid image.');
            $('input#image').val("");
            return false;
        }

        var oFReader = new FileReader();
        oFReader.onload = function(oFREvent) {
            var img = new Image();
            img.src = oFREvent.target.result;

            img.onload = function() {
                var width = img.width;
                var height = img.height;
                var desiredWidth = 1104;
                var desiredHeight = 561;

                if (width !== desiredWidth || height !== desiredHeight) {
                    $('.imageerror').show();
                    $('.imageerror').text('Please select an image with dimensions ' + desiredWidth + 'x' +
                        desiredHeight + ' pixels.');
                    $('input#image').val("");
                    return false;
                }

                // Additional code for image size check
                var f = document.getElementById("image").files[0];
                var fsize = f.size || f.fileSize;
                if (fsize > 6000000) {
                    $('.imageerror').show();
                    $('.imageerror').text('Please select a 6MB image.');
                    $('input#image').val("");
                    return false;
                }

                // If all validations pass, you can continue with form submission or other actions
            };
        };
        oFReader.readAsDataURL(document.getElementById("image").files[0]);
    }


</script>
