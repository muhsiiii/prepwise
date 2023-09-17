@include('admin.layouts.header')

<style>
    body {
        max-width: 99% !important;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Content Wrapper. Contains page content -->
    <div class="row login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary" style="border-top: 3px solid #000000;">
                <div class="card-header text-center">
                    <a href="{{ route('index') }}" class="h1" style="color:#000000; line-height: 1.5">
                        <img style="width: 180px" src="{{ asset('home/images/Prepwise horizontal_ 2.png') }}" alt="" srcset="">
                    </a>
                </div>
                <div class="card-body">


                    <form method="POST" action="{{ route('dologin') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="User Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-center mb-2 mt-2"
                            style="color:red;font-size:16px;display:table;margin-left:auto;margin-right:auto;">
                            @if (session()->has('message'))
                                {{ session()->get('message') }}
                            @endif
                        </span>

                        <div class="row">

                            <!-- /.col -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block text-white "
                                    style="background-color: #000000; border: 1px solid #000000;display:table;margin-left:auto;margin-right:auto;"><b>Sign In</b></button>
                            </div>
                            <!-- /.col -->
                        </div>
                        <br>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    {{-- <script src="https://pepponline.in/plugins/jquery-validation/jquery.validat }}"></script> --}}
</body>

</html>
