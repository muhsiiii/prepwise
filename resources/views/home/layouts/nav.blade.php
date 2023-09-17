@php
$CourseYearnavs=DB::table('course_years')->where('status',1)->orderBy('display_order','ASC')->get();
@endphp
<header>
  <div class="container-main">
    <nav class="navbar" style="position: relative;
    z-index: 12;">
      <a href="{{route('index')}}" class="navbar-logo"><img src="{{ asset('home/images/Prepwise horizontal_ 2.png') }}" alt=""></a>
      <ul class="navbar-links ">
        <div class="dropdown course-drpdown">
          <a style="color: #8A8888; font-weight: 500;" class="nav-link drpdown-title-name dropdown-toggle " href="index.html" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">COURSES </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($CourseYearnavs as $CourseYearnav)
            @php
            $Coursenavs=DB::table('courses')->where('course_year',$CourseYearnav->id)->where('status',1)->get();
            @endphp
            <li>
              <a class="dropdown-item" href="#">{{$CourseYearnav->course_year}} &raquo;</a>
              <ul class="dropdown-menu dropdown-submenu dropdown-submenu-two">
                <div class="tile-course-nav">
                  <div class="row">
                    @foreach($Coursenavs as $Coursenav)
                    @php
                    $colors = ['darkorange','darkblue', 'darkgreen', 'red', 'brown']; // Add more colors if needed
                    @endphp
                    <div class="col-lg-6 mb-3">
                      <a href="{{ $Coursenav->enroll_now}}" target="_blank">
                        <div class="main-tile">
                          <div class="course-tile"style="background-color: {{ $colors[$loop->index % count($colors)] }}">
                            <h3 class="tile-course-name">{{ $Coursenav->course_name}}</h3>
                            <h4 class="tile-course-name">{{$Coursenav->batch}}</h4>
                          </div>
                          <div class="tile-course-dv">
                            <h5 class="mb-0 tile-year">{{ $Coursenav->duration}}</h5>
                            <h5 class="mb-0 tile-unversity">{{ $Coursenav->university}}</h5>
                          </div>
                        </div>
                      </a>
                    </div>
                    @endforeach

                  </div>
                </div>
              </ul>
            </li>
            @endforeach
          </ul>
        </div>
        <li class="nav-item">
          <a class="nav-link {{'blog-page' == request()->path() ? 'active-nav' : '' }}" href="{{route('blogpage')}}">PREPPEDIA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{'apply-now' == request()->path() ? 'active-nav' : '' }}" href="{{route('landingpage')}}">APPLY NOW
                    </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{'join-community' == request()->path() ? 'active-nav' : '' }}" href="{{route('course')}}">JOIN COMMUNITY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{'preptube' == request()->path() ? 'active-nav' : '' }}" href="{{route('ignoutube')}}">PREPTUBE </a>
          </li>

        <li class="nav-item">
          <a class="nav-link btn btn-download-bg text-light" target="_blank" href="https://meetpro.club/prepwise ">BOOK A SESSION</a>
        </li>
        <div class="menulogo d-md-block d-lg-none" onclick="toggleCartt()"><img src="/home/images/menu-line.png" alt=""></div>
      </ul>
    </nav>
  </div>
</header>
<!-- sidebar  -->
<div class="sidebar">
  <div class="navbar-sidebar">
    <ul>
      <li><a href="" data-toggle="modal" data-target="#loginModal-downloaad-p">Courses</a></li>
      <li><a class="{{'blogpage' == request()->path() ? 'active' : '' }}" href="{{route('blogpage')}}">PrepPedia</a></li>
      <li><a class="{{'apply-now' == request()->path() ? 'active' : '' }}" href="{{route('landingpage')}}">Apply Now</a></li>
      <li><a class="{{'courses' == request()->path() ? 'active' : '' }}" href="{{route('course')}}">Join Community</a></li>
      <li><a class="{{'ignoutube' == request()->path() ? 'active' : '' }}" href="{{route('ignoutube')}}">PrepTube</a></li>
      <li style="background: #3eca00;"><a class="{{'results' == request()->path() ? 'active' : '' }}" href="{{route('results')}}" style="color: #f7f7f7">Our Results</a></li>
      <li style="background: #e14330;"><a href="{{ route('impressions') }}" style="color: #f7f7f7"  >Prepwise Impressions</a></li>
      <li style="background: #000000;"><a href="https://meetpro.club/prepwise " style="color: #ffffff"  >BOOK A SESSION</a></li>
      {{-- <li><a href="https://learn.ignoudost.com/register/">Sign Up</a></li> --}}
    </ul>
  </div>
  <div class="d-inline closse" onclick="toggleCartt()"><i class="ri-close-circle-line"></i></div>
</div>
<!-- sidebar end  -->


<div style="z-index: 1200;" class="modal fade modal-home" id="loginModal-downloaad-p" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div style="background: #ffff;width: 100%;border-radius: 20px;margin: auto;"
        class="modal-content login-modal-home-p">
        <i class="ri-close-circle-line close" style="font-size: 30px;margin-top: -7px;margin-bottom: 10px;"
            data-dismiss="modal" aria-label="Close"></i>
        <div class="modal-body modal-loginform pt-0">
            <div class="container-main">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="https://thlnj.courses.store/  "
                            target="_blank">
                            <img class="icon-store" src="/home/images/p2.png" alt="">

                            </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://learn.prepwise.in/learn "
                            target="_blank">
                            <img class="icon-store" src="/home/images/p1.png" alt="">

                            </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://wejjb.courses.store/
                        "
                            target="_blank">
                            <img class="icon-store" src="/home/images/p3.png" alt="">

                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
