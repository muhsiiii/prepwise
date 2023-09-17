@include('home.layouts.header')
@include('home.layouts.nav')
<!-- swipper slider home  -->
<div class="container-main">
    <swiper-container class="mySwiper" pagination="true" pagination-dynamic-bullets="true">
        @foreach($banners as $banner)
        <swiper-slide><img class="" src="{{asset('/Banner/'.$banner->banner)}}" alt="First slide"></swiper-slide>
        @endforeach
    </swiper-container>
</div>

<!-- swipper slider home end -->
<!-- modal form course  -->
<div style="z-index: 1200;" class="modal fade modal-home" id="loginModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div style="background: #ffff;width: 100%;border-radius: 20px;margin: auto;"
            class="modal-content login-modal-home-p">
            <i class="ri-close-circle-line close" data-dismiss="modal" aria-label="Close"></i>
            <div class="modal-body modal-loginform pt-0">
                <h3 class="dunes-secondary-color text-center login-haeding">GET A FREE EXPERT CONSULATION</h3>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Mobile Number" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Your Highest Educational Qualification?*</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Which program (Course) are you interested in joining?*</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Reason for interest in joining Degree/PG program?*</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button data-target="#exampleModal11" href="exampleModal11" data-toggle="modal"
                                data-dismiss="modal" class="btn ignou-primary-bg login-modal-btn">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- sign up modal  -->
<div style="z-index: 1200;" class="modal fade modal-home" id="loginModal1" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div style="background: #ffff;width: 100%;border-radius: 20px;margin: auto;"
            class="modal-content login-modal-home-p">
            <i class="ri-close-circle-line close" data-dismiss="modal" aria-label="Close"></i>
            <div class="modal-body modal-loginform pt-0">
                <h3 class="dunes-secondary-color text-center login-haeding">REGISTER HERE</h3>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Mobile Number" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Password" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Confirm Password" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" data-target="#exampleModal11" href="exampleModal11"
                                data-toggle="modal" data-dismiss="modal"
                                class="btn ignou-primary-bg login-modal-btn">LOGIN</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- login  -->
<div style="z-index: 1200;" class="modal fade modal-home" id="loginModal2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div style="background: #ffff;width: 100%;border-radius: 20px;margin: auto;"
            class="modal-content login-modal-home-p">
            <i class="ri-close-circle-line close" data-dismiss="modal" aria-label="Close"></i>
            <div class="modal-body modal-loginform pt-0">
                <h3 class="dunes-secondary-color text-center login-haeding">WELCOME BACK</h3>
                <form>
                    <div class="form-group">
                        <input type="number" placeholder="Mobile Number" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Enter Password" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" data-target="#exampleModal11" href="exampleModal11"
                                data-toggle="modal" data-dismiss="modal"
                                class="btn ignou-primary-bg login-modal-btn">LOGIN</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-main mt-4">
    <div class="row">
        <div class="col-lg-6 col-md-12 mt-2">
            <div class="filter-row-blog">
                <form action="/action_page.php">
                    <select id="blogid" name="cars" onchange="GetBlogCategory(this.value)">
                        <option value="all">ALL</option>
                        @foreach ($Blogcats as $Blogcat)
                            <option value="{{ $Blogcat->id }}">{{ $Blogcat->category }}</option>
                        @endforeach
                    </select>
                </form>
                <form action="/action_page.php">
                    <select id="sortid" name="cars" onchange="GetBlogSort(this.value)">
                        <option disabled selected>Sort By </option>
                        <option value="1">Latest Blog</option>
                        <option value="2">Oldest Blog</option>
                    </select>
                </form>
            </div>
        </div>



        <div class="col-lg-6 col-md-12 mb-3">
            <div class="form-outline search-blog">
                <input type="search" id="bid" class="form-control" placeholder="Search" aria-label="Search"
                    onkeyup="BlogSearch()" />
            </div>
        </div>



    </div>
</div>
<div class="container-main mt-4">
    <div class="row" id="caiid">
        @foreach ($Blogs as $Blog)
            {{-- id="catid" --}}
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog-main-box">
                    <a href="{{ route('blogdetail', $Blog->id) }}">
                        <div class="blog-image">
                            <img class="blog-pic" src="{{ asset($Blog->image) }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-main-head">{{ $Blog->title }}</h2>
                            <p class="blog-sub-head-main">{!! $Blog->description !!}</p>
                            <div class="blog-own">
                                <div class="img-name-blog">
                                    <img class="blog-user-profile" src="{{ asset($Blog->dp) }}" alt="">
                                    <p class="ml-1">{{ $Blog->name }}</p>
                                </div>
                                <p >{{ date('M d, Y', strtotime($Blog->date)) }}</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        @endforeach
    </div>


</div>
<div class="container-main mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="learn-more-btn-dv">
                <a href="" target="_blank" class="btn ignou-primary-bg learn-more-btn" data-toggle="modal" data-target="#loginModal-downloaad-p">explore our courses</a>
            </div>
        </div>
    </div>
</div>

<!-- slider  -->
<div class="container-main">
    <div class="row">
        <div class="col-lg-12">
            <div class="explore-courses">
                <h2 class="explore-course-heading">Recent Articles</h2>
            </div>
        </div>
        <swiper-container style="cursor: pointer;" class="mySwiper blog-page-sld" navigation="true"
            pagination-clickable="true" space-between="30" slides-per-view="4">
            @foreach ($BlogsSliders as $BlogSlide)
                <swiper-slide>
                    <div class="">
                        <div class="blog-main-box">
                            <a href="{{ route('blogdetail', $BlogSlide->id) }}">
                            <div class="blog-image">
                                <img class="blog-pic" src="{{ $BlogSlide->image }}" alt="">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-main-head">{{ $BlogSlide->title }}</h2>
                                <p class="blog-sub-head-main">{!! $BlogSlide->description !!}</p>
                                <div class="blog-own">
                                    <div class="img-name-blog">
                                        <img class="blog-user-profile" src="{{ $BlogSlide->dp }}" alt="">
                                        <p class="ml-1">by {{ $BlogSlide->name }}</p>
                                    </div>
                                    <p>{{ date('M d, Y', strtotime($BlogSlide->date)) }}</p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </swiper-slide>
            @endforeach
        </swiper-container>
    </div>
</div>

<!-- download section  -->
<div class="container-main mb-5 mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="download-now" data-toggle="modal" data-target="#loginModal-downloaad-s">
                <div class="download-main-div">
                    <h1 class="download-main-head" >Download Now</h1>
                    <p class="download-sub-head">Your journey to academic excellence starts here. Download the relevant Prepwise app now, and unlock an elite entrance preparation experience, paving the way to admission in prestigious universities and colleges.</p>
                </div>
                <img class="download-img" src="/home/images/05.png" alt="">
                <div class="download-main-div-rgt">
                    <img class="star-icon" src="/home/images/star.png" alt="">
                    <h4 class="grey-text review-nmbr mt-2 mb-3"> <span style="color: black;font-weight: 600;">5/5 -</span> 361 REVIEWS</h4>
                    <h6  class="btn downld-btn-home ignou-primary-bg">DOWNLOAD NOW</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section  -->
<!-- modal form course  -->


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


<div style="z-index: 1200;" class="modal fade modal-home" id="loginModal-downloaad-s" tabindex="-1" role="dialog"
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
                        <a href="https://play.google.com/store/apps/details?id=co.loki.thlnj   "
                            target="_blank">
                            <img class="icon-store" src="/home/images/p2.png" alt="">

                            </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://play.google.com/store/apps/details?id=in.prepwise.www"
                            target="_blank">
                            <img class="icon-store" src="/home/images/p1.png" alt="">

                            </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://play.google.com/store/apps/details?id=co.tarly.wejjb
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

<div class="call-btn-mobile">
    <div class="half-btn">
        <a href="tel:9656836893">
            <h5 class="call-now mb-0"><i class="ri-phone-fill"></i> Call Now</h5>
        </a>
    </div>
    <div class="half-btn">
        <a href="https://wa.me/+919656836893 ">
            <h5 class="whtspp-now mb-0"><i class="ri-whatsapp-fill"></i>WhatsApp</h5>
        </a>
    </div>
</div>

@include('home.layouts.footer')

<script>
    function GetBlogCategory(Cid) {

        // alert(val);
        // return false;
        $('#sortid').val('1');
        $.post("/get-blogcategory", {
            cid: Cid,
            _token: "{{ csrf_token() }}"
        }, function(result) {

            $('#caiid').html(result);
        });
    }

    function GetBlogSort(Sid) {

        // alert(val);
        // return false;
        var BlogID = $('#blogid option:selected').val();


        $.post("/get-blog-sorted", {
            sid: Sid,
            blogid: BlogID,
            _token: "{{ csrf_token() }}"
        }, function(result) {

            $('#caiid').html(result);
        });
    }

    function BlogSearch() {

        // alert(val);
        // return false;
        $('#sortid').val('1');
        var Bid = $('input#bid').val();
        $('#blogid').val('all');


        $.post("/blog-search", {
            bid: Bid,
            _token: "{{ csrf_token() }}"
        }, function(result) {

            $('#caiid').html(result);
        });
    }
</script>
