@include('admin.layouts.header')
<style>
    .sub {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 20%;
    }

    .dashboard-sub {
        text-align: center;
    }
</style>

@include('admin.layouts.nav')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <div class="container sub">
                    <div class="dashboard-sub">
                        <img style="width: 180px" src="{{ asset('home/images/Prepwise horizontal_ 2.png') }}" alt="" srcset="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div @include('admin.layouts.footer')
