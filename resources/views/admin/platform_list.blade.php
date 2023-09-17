@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">change platforms</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">DashBoard</a></li>
                    <li class="breadcrumb-item active">change platforms</li>
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
                <h3 class="card-title">Platform List ()</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap table-bordered table-extra" id="rtable"
                    style="font-size: 14px !important;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>image</th>
                            <th>description</th>
                            <th>url</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($Platforms as $Platform)
                            <tr>
                                <td align="center">{{ $Platform->id }}</td>
                                <td align="center"><img src="{{ $Platform->image }}" width="60px" height="60px" alt=""></td>
                                <td align="center">{{ $Platform->description }}</td>
                                <td align="center"> {{ $Platform->url }}</td>
                                <td align="center">

                                    <a class="btn btn-warning btn-sm text-light"
                                        href="{{ route('platadd',$Platform->id) }}">change</a>
                                </td>
                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">

            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- Add new user link -->

</div>
@include('admin.layouts.footer')

<script>
    function ImpressionDelete(imp_Id) {

        // alert(ParentFolderId);
        data = new FormData();

        data.append('imp_Id', imp_Id);
        data.append('_token', '{{ csrf_token() }}');

        Swal.fire({
            title: 'Do You Want To Delete..??',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({

                    type: "POST",
                    url: "/impression-delete",
                    data: data,
                    dataType: "json",
                    contentType: false,
                    //cache: false,
                    processData: false,

                    success: function(data) {
                        if (data['success']) {

                            Swal.fire({
                                title: 'Impression Deleted SuccessFully',
                                // text: "You won't be able to revert this!",
                                icon: 'success',
                                // showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = window.location.href;
                                }
                            })
                        }
                    }
                })
            }
        })
    }
</script>
