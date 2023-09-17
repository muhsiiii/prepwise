@include('home.layouts.header')
@include('home.layouts.nav')
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
                        <input type="number" placeholder="Your Current Academic Status" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Program (Course) Interested" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Confirm Password" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" data-target="#exampleModal11" href="exampleModal11" data-toggle="modal"
                                data-dismiss="modal" class="btn ignou-primary-bg login-modal-btn">LOGIN</a>
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
                        <input type="number" placeholder="Mobile Number" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Enter Password" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" data-target="#exampleModal11" href="exampleModal11" data-toggle="modal"
                                data-dismiss="modal" class="btn ignou-primary-bg login-modal-btn">LOGIN</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- home wrapper  -->
<div class="container-main">
    <div class="row">
        <div style="position: relative;" class="col-lg-12">
            <div class="landing-section">
                <div class="land-row-first">
                    <h1 class="land-heading">Kerala's No.1 <span class="span-color">UG</span>/<span class="span-color-two">PG</span> Entrance Coaching</h1>
                    <p class="grey-text">Unlock Potential with Prepwise, Your Gateway to Premier Education!</p>
                    <h3 class="land-sub-heading">Trusted by Over 5000+ Students Across Kerala</h3>
                    <img class="arrow-pink" src="/home/images/Yellow Arrow.png" alt="">
                </div>
                <div class="form-landing-page">
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="landingpageform">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name*">
                                    <div class="nameerror" style="color: red;font-size: 14px;"></div>
                                </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="mobile" name="mobile"
                                    placeholder="Mobile Number*">
                                <div class="mobileerror" style="color: red;font-size: 14px;"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="qual">
                                    <option value="">Your Current Academic Status</option>
                                    @foreach ($DropdownQualifications as $DropdownQualification)
                                        <option value="{{ $DropdownQualification->content }}">
                                            {{ $DropdownQualification->content }}</option>
                                    @endforeach
                                </select>
                                <div class="qualerror" style="color: red;font-size: 14px;"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="inter">
                                    <option value="">Program (Course) Interested</option>
                                    @foreach ($DropdownsProgramorCourses as $DropdownsProgramorCourse)
                                        <option value="{{ $DropdownsProgramorCourse->content }}">
                                            {{ $DropdownsProgramorCourse->content }}</option>
                                    @endforeach
                                </select>
                                <div class="intererror" style="color: red;font-size: 14px;"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="reas">
                                    <option value="">How did you find us?</option>
                                    @foreach ($DropdownsReasons as $DropdownsReason)
                                        <option value="{{ $DropdownsReason->content }}">{{ $DropdownsReason->content }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="reaserror" style="color: red;font-size: 14px;"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button style="padding: 10px 8px !important;" type="button" id="consultationsavebutton"
                                class="btn ignou-primary-bg login-modal-btn mb-0"
                                onclick="LandingPageSave()">SUBMIT</button>

                        </div>
                    </div>
                </div>
                <img class="landing-img" src="/home/images/03.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- courses tab btn section  -->
<div class="container-main">
    <div class="row align-items-center">
        <div class="col-lg-12">
            <h2 class="home-tabcourse-heading">Our Courses</h2>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-4 mb-2">
            <div class="courses-btns">

                <h3 class="course-name ignou-primary-bg active-course-btn  mb-0" id="fbt"
                    style="cursor:pointer;" onclick="Department('{{ $first_dept->id }}')">
                    {{ $first_dept->departments }}</h3>
            </div>
        </div>
        @foreach ($Departments as $Department)
            <div class="col-lg-2 col-md-2 col-sm-4 col-4 mb-2">
                <div class="courses-btns">

                    <h3 class="course-name  mb-0" style="cursor:pointer;"
                        onclick="Department('{{ $Department->id }}')">{{ $Department->departments }}</h3>
                </div>
            </div>
        @endforeach

    </div>
</div>


<div class="container-main">
    <div class="row align-items-center" id="coursediv">
        <!-- course tile  -->
        @foreach ($first_course as $Course)
            <div id8="course-tab-content" class="col-lg-4 col-md-4 col-sm-6 mt-4">
                <div class="course-list">
                    <div class="course-img-dv">
                        <img class="course-img" src="{{ $Course->image }}" alt="">
                        <h5 class="postn-course-name mb-0">{{ $Course->batch }}</h5>

                    </div>
                    <div class="course-details">
                        <h2 class="course-name pl-fifty pt-top">{{ $Course->course_name }}</h2>
                        <h4 class="grey-text mb-2 course-year pl-fifty">{{ $Course->batch }}</h4>
                        <h4 class="grey-text mb-2 pl-fifty">Duration: {{ $Course->duration }}</h4>
                        <h4 class="grey-text mb-3 pl-fifty">Platform: {{ $Course->university }}</h4>
                        <hr style="margin-bottom: 0px !important;">
                        <div class="course-navigate-btns">
                            <h3 class="timetable mb-0"><i style="vertical-align: middle;"
                                    class="ri-download-2-line"></i><a href="{{ $Course->time_table }}"
                                    download="">Syllabus</a> </h3>
                            <h3 class="enroll mb-0"><a href="{{ $Course->enroll_now }}" target="_blank">ENROLL
                                    NOW</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="why-propise mt-4">
    <div class="container-main">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <h1 class="why-choose-text text-center mb-3">Why choose Prepwise?</h1>
            </div>
            <div class="col-lg-6">
                <div class="right-border">
                    <div class="why-dv-main">
                        <div class="content-why">
                            <h3 class="why-choose-main-text-lftt">Classes by Expert Faculty</h3>
                            <p class="sub-txt-why-choose-lftt">Experience transformational learning through classes led by
                                our expert faculty, who specialize in guiding students to success in entrance exams.</p>
                        </div>
                        <div class="image-why-lft">
                            <img class="image-why-choose" style="width: 70px;padding:10px 18px;"
                                src="{{ asset('home/images/one.png') }}" alt="">
                        </div>
                    </div>
                    <div class="why-dv-main">
                        <div class="content-why">
                            <h3 class="why-choose-main-text-lftt">Value Added Notes</h3>
                            <p class="sub-txt-why-choose-lftt">Enhance your learning experience with our value-added notes,
                                meticulously curated to include key points, shortcuts, and simplified explanations for
                                better understanding.</p>
                        </div>
                        <div class="image-why-lft">
                            <img class="image-why-choose" style="width: 70px" src="{{ asset('home/images/five.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="why-dv-main">
                        <div class="content-why">
                            <h3 class="why-choose-main-text-lftt">Topic Tests</h3>
                            <p class="sub-txt-why-choose-lftt">Improve your understanding of each subject through our
                                regular topic tests, designed to assess your knowledge and guide your studies for
                                improved performance.</p>
                        </div>
                        <div class="image-why-lft">
                            <img class="image-why-choose" style="width: 70px"
                                src="{{ asset('home/images/two.png') }}" alt="">
                        </div>
                    </div>
                    <div class="why-dv-main">
                        <div class="content-why">
                            <h3 class="why-choose-main-text-lftt">Live Doubt Clearing Sessions</h3>
                            <p class="sub-txt-why-choose-lftt">Live doubt-clearing sessions provide instant resolution to
                                your queries, ensuring enhanced understanding, boosted concept clarity, and improved topic
                                retention.
                            </p>
                        </div>
                        <div class="image-why-lft">
                            <img style="padding: 2px 5px;width:70px;" class="image-why-choose"
                                src="{{ asset('home/images/six.png') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="left-border">
                    <div class="why-dv-main">
                        <div class="image-why">
                            <img class="image-why-choose" style="width: 65px"
                                src="{{ asset('home/images/three.png') }}" alt="">
                        </div>
                        <div class="content-why">
                            <h3 class="why-choose-main-text">CUET Mock Tests</h3>
                            <p class="sub-txt-why-choose-rgt">Experience the actual exam atmosphere with our rigorous mock
                                tests, designed to mimic entrance exam patterns, improve your confidence, and manage
                                time effectively.
                            </p>
                        </div>
                    </div>
                    <div class="why-dv-main">
                        <div class="image-why">
                            <img style="padding: 20px 8px;width:70px;" class="image-why-choose"
                                src="{{ asset('home/images/seven.png') }}" alt="">
                        </div>
                        <div class="content-why">
                            <h3 class="why-choose-main-text-lft">Dedicated Mentors</h3>
                            <p class="sub-txt-why-choose-rgt">Get personalized guidance from our dedicated mentors, who
                                understand your strengths and weaknesses and customize strategies to keep you focused and
                                motivated.</p>
                        </div>
                    </div>
                    <div class="why-dv-main">
                        <div class="image-why">
                            <img class="image-why-choose" style="width: 65px;padding: 11px 18px;"
                                src="{{ asset('home/images/four.png') }}" alt="">
                        </div>
                        <div class="content-why">
                            <h3 class="why-choose-main-text">Admission Help Desk</h3>
                            <p class="sub-txt-why-choose-rgt">Navigate admission procedures effortlessly with our admission
                                help desk, providing step-by-step guidance through application forms, deadlines, and
                                more.</p>
                        </div>
                    </div>


                    <div class="why-dv-main">
                        <div class="image-why">
                            <img style="padding: 15px 15px;width:65px;" class="image-why-choose"
                                src="{{ asset('home/images/eight.png') }}" alt="">
                        </div>
                        <div class="content-why">
                            <h3 class="why-choose-main-text-lft">Happiness Ambassador</h3>
                            <p class="sub-txt-why-choose-rgt">Our Happiness Ambassador is dedicated to ensuring your
                                learning journey is smooth, enjoyable, and stress-free, addressing any non-academic concerns
                                during your course.
                            </p>
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
<!-- courses tab btn section  -->
<!-- details section  -->
<div class="container-main">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="reg-enrolment">
                <img class="reg-img" src="/home/images/01.svg" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="reg-enrolment">
                <div class="pink-border"></div>
                <h1 class="registertion-heading mb-3 mt-2">Unlocking Doors to Top Institutes</h1>
                <p class="registertion-sub-head grey-text">Entrance exams like CUET UG/PG, IPMAT, JIPMAT, IIT JAM,
                    TISSNET, and NCET are your passport to premier institutions - Central Universities, IITs, TISS,
                    IIMs. The journey to these portals of excellence demands disciplined, dedicated, and structured
                    preparation.
                <p>
                <p class="registertion-sub-head grey-text"> In this journey, Prepwise becomes your intuitive partner.
                    Our meticulously crafted courses harmonize with your aspirations, offering you not just
                    exam-specific knowledge, but fostering an environment for holistic learning. Partner with Prepwise,
                    and experience a seamless transformation of your dreams into reality.</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="who-we-are who-we-are-main">
                <div class="pink-border"></div>
                <h1 class="mt-2 mb-4 who-we-are">Who we are</h1>
                <p class="who-we-are-descrptn grey-text">We are Team Prepwise - a vibrant group of educators and
                    mentors with a shared vision of unlocking academic excellence. With a strong foundation laid by our
                    team of alumni from premier institutes like the IITs, IIMs, Central Universities, and TISS, we have
                    built a haven for dedicated learners. Our strength lies in our diversity, expertise, and commitment
                    towards fostering an environment where aspirations meet achievements. We believe in nurturing
                    holistic learners who are ready to meet the challenges of tomorrow. At Prepwise, we don't just
                    prepare students for exams; we prepare them for life. Join us on this remarkable journey where we
                    create, innovate, and inspire together, transforming dreams into reality!</p>
            </div>
        </div>
        <div class="col-lg-12 mt-4 mb-4">
            <img src="/home/images/D3 1.png" alt="">
        </div>
        <div class="col-lg-6">
            <div class="about-ignou">
                <div class="pink-border"></div>
                <h1 class="why-ignou-heading mb-3 mt-3">About Prepwise</h1>
                <p class="why-ignou-subhead grey-text">Prepwise is Kerala's premier UG and PG entrance preparation
                    platform. With unique divisions: Prepwise Class 11 & 12, Prepwise UG Plus, and School to IIM, we
                    cater to students' distinct academic needs, paving the way for success in top central universities.
                    We're more than a preparation platform; we're a comprehensive academic partner committed to
                    fostering intellectual growth and personal development.
                </p>
                <p class="why-ignou-subhead grey-text">Prepwise Class 11 & 12 sets the stage for our students' journeys
                    to some of India's top central universities. Our groundbreaking Integrated Learning Program (ILP)
                    spans Science, Humanities, and Commerce, offering an array of services...</p>

                <p class="learn-more" onclick="ShowStaticModal()">Learn more <img
                        style="width: 30px; margin-left: 10px; color: #11CDF0;" src="/home/images/arrow.png"
                        alt=""></p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-ignou">
                <img class="why-ignou-img-main" src="/home/images/02.jpg" alt="">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="about-ignou">
                <img class="why-ignou-img" src="{{ $academics->image }}" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-ignou dynamic-content">
                <div class="pink-border"></div>
                <h1 class="academic-headingmt-2 mb-0 mt-3">{{ $academics->title }}</h1>
                <p></p>
                <!-- <h1 class="academic-heading"></h1> -->
                <p class="acadamic-subhead grey-text">{!! Str::limit($academics->description, 394) !!}
                <p>
                <p class="acadamic-subhead grey-text mb-0">Warm regards,</p>
                <p class="acadamic-subhead grey-text mb-0"> {{ $academics->name }}</p>
                <p class="acadamic-subhead grey-text mb-3">{{ $academics->position }}</p>


                <p class="learn-more" onclick="ShowModal()">learn more <img
                        style="width: 30px;margin-left: 10px;color: #11CDF0;" src="/home/images/arrow.png"
                        alt=""> </p>


            </div>
        </div>


        <div class="col-lg-12 mt-5">
            <div class="slider-home">
                <h2 class="slider-head">Brought to you by people from</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-main slider-logos  mb-4 mt-5">
    <div class="custom-slider">
        <div class="custom-box">
            <img class="logo-sliders" src="/home/images/IIT Kharkpur.png" alt="">
        </div>
        <div class="custom-box">
            <img class="logo-sliders" src="/home/images/IIT_Madras_Logo.png" alt="">
        </div>
        <div class="custom-box">
            <img class="logo-sliders" src="/home/images/University_of_Delhi.png" alt="">
        </div>
        <div class="custom-box">
            <img class="logo-sliders" src="/home/images/University_of_Hyderabad_Logo.png" alt="">
        </div>
        <div class="custom-box">
            <img class="logo-sliders" src="/home/images/JNU.png" alt="">
        </div>
        <div class="custom-box">
            <img class="logo-sliders" src="/home/images/IIT Hyderabad Logo_Final Design.png" alt="">
        </div>
        <div class="custom-box">
            <img class="logo-sliders" src="/home/images/1280px-TUe_Logo.png" alt="">
        </div>
    </div>
</div>

{{-- modal --}}
<div style="z-index: 1200;" class="modal fade modal-home " id="about" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div style="background: #ffff;width: 100%;border-radius: 20px;margin: auto;"
            class="modal-content modal-popup-about-dv">
            <i class="ri-close-circle-line close"
                style="font-size: 30px;margin-top: 9px;margin-bottom: 10px;margin-right: 7px;" data-dismiss="modal"
                aria-label="Close"></i>
            <div class="modal-body modal-loginform pt-0">
                <div class="container-main">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-dv-modal">
                                <p class="about-ignou-sub-head" style="text-align: justify" id="desc"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- details section end  -->
<!-- help section and form section starts -->
<div class="container-main">
    <div class="row align-items-start">
        <div class="col-lg-12 mt-4 mb-5">
            <div class="slider-home">
                <h2 class="form-head pb-4"> Unfold Your Success Journey with Prepwise in Four Steps</h2>
                </h2>
            </div>
        </div>
        <div class="col-lg-6 mt-4">
            <div class="row-main-help">
                <div class="help-colmn mt-2">
                    <img class="help-img hlp-img-one" src="/home/images/20944810 [Converted] 1.png" alt="help-img">
                    <h3 class="help-main-head">Course Selection</h3>
                    <p class="grey-text help-sub-head mb-0">Begin your journey at Prepwise with a personalized session
                        with our expert academic counselors, ensuring the right program for your goals.</p>
                </div>
                <div class="help-colmn mt-2">
                    <img class="help-img hlp-img-two" src="/home/images/tourist_va_03 [Converted] [Recovered] 1.png"
                        alt="help-img">
                    <h3 class="help-main-head">Focused Preparations</h3>
                    <p class="grey-text help-sub-head mb-0">Dive into comprehensive, targeted coaching, supported by
                        our expert faculty, study materials, doubt-clearing sessions and mentorhsip.
                    </p>
                </div>
            </div>
            <div class="row-main-help">
                <div class="help-colmn bottom-space bottom-help-colmn mt-2">
                    <img class="help-img hlp-img-three" src="/home/images/tourist_va_03 [Converted] [Recovered] 2.png"
                        alt="help-img">
                    <h3 class="help-main-head">Crack the Entrance Exam</h3>
                    <p class="grey-text help-sub-head mb-0">Leverage strategic test-taking methods and regular mock
                        tests to ace your entrance exams with confidence.
                    </p>
                </div>
                <div class="help-colmn bottom-space bottom-help-colmn mt-2">
                    <img class="help-img hlp-img-four" src="/home/images/5374794 1.png" alt="help-img">
                    <h3 class="help-main-head">Admission Guidance</h3>
                    <p class="grey-text help-sub-head mb-0">Post-exam, benefit from our guidance in navigating through
                        the admission process to secure a spot in a top institute.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4">
            <form>
                <div class="form-box">
                    <h3 class="mb-3 mt-3 apply-now-txt text-center">Apply Now</h3>
                    <h3 class="text-center later-text mb-3">Later = Never!</h3>
                    <h4 class="text-center mb-5">Fill out this form & Let us call you to give relevent course details
                    </h4>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nametwo" placeholder="Name*">
                        <div class="nameerrortwo" style="color: red;font-size: 14px;"></div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="mobiletwo" placeholder="Mobile Number*">
                        <div class="mobiletwoerror" style="color: red;font-size: 14px;"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="qualificationtwo">
                            <option value=""> Your Current Academic Status</option>
                            @foreach ($DropdownQualifications as $DropdownQualification)
                                <option value="{{ $DropdownQualification->content }}">
                                    {{ $DropdownQualification->content }}</option>
                            @endforeach
                        </select>
                        <div class="qualificationtwoerror" style="color: red;font-size: 14px;"></div>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="coursetwo">
                            <option value="">Program (Course) Interested</option>
                            @foreach ($DropdownsProgramorCourses as $DropdownsProgramorCourse)
                                <option value="{{ $DropdownsProgramorCourse->content }}">
                                    {{ $DropdownsProgramorCourse->content }}</option>
                            @endforeach
                        </select>
                        <div class="coursetwoerror" style="color: red;font-size: 14px;"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="reasontwo">
                            <option value="">How did you find us?
                            </option>
                            @foreach ($DropdownsReasons as $DropdownsReason)
                                <option value="{{ $DropdownsReason->content }}">{{ $DropdownsReason->content }}
                                </option>
                            @endforeach
                        </select>
                        <div class="reasontwoerror" style="color: red;font-size: 14px;"></div>
                    </div>
                    <button class="btn ignou-primary-bg btn-submit-home" type="button"
                        onclick="LandingPage2ndSave()">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ignou youtube section  -->
<div class="container-main mt-4">
    <div class="ignoutube"
        style="background-image: url(/home/images/rec.png);background-repeat: no-repeat;background-size: 100% auto;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="main-head-ignoutube ">PrepTube</h2>
            </div>
            @foreach ($IgnouTubes as $IgnouTube)
                <div class="col-lg-4">
                    <div class="inner-ignoutube">
                        {!! $IgnouTube->embeded_url !!}
                        <h3 class="ignoutube-head pt-2">{{ $IgnouTube->title }}</h3>
                        <h4 class="ignoutube-sub-head">{{ $IgnouTube->name }}</h4>
                    </div>
                </div>
            @endforeach



            <div class="col-lg-12">
                <div class="btn-see-more">
                    <a href="{{ route('ignoutube') }}" class="btn see-more-btns">see more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ignou youtube section end -->
<!-- faq section starts  -->
<div class="container-main faq-sectn">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="faq-main-head-home">Frequently Asked Questions (FAQs)</h1>
        </div>


        <div class="col-lg-12 mb-2">
            <div id="accordion" class="mb-3">
                @foreach ($FAQs as $key => $FAQ)
                    <div class="card{{ $key >= 5 ? ' hidden' : '' }} mb-3">
                        <div class="card-header" id="heading{{ $FAQ->id }}">
                            <h3 class="mb-0 faq-qstn-head" data-toggle="collapse"
                                data-target="#collapse{{ $FAQ->id }}" aria-expanded="true"
                                aria-controls="collapse{{ $FAQ->id }}">{{ $FAQ->title }}</h3>
                            <i class="ri-arrow-down-s-line faq-arrow"></i>
                        </div>
                        <div id="collapse{{ $FAQ->id }}" class="collapse"
                            aria-labelledby="heading{{ $FAQ->id }}" data-parent="#accordion">
                            <div class="card-body">
                                <h4 class="faq-answr-head vl">{{ $FAQ->description }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="col-lg-12 mt-2">
            <div class="view-all-btn-home">
                <a href="#" class="view-all-btn">View all <i style="vertical-align: middle;"
                        class="ri-arrow-down-s-line"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- faq section end  -->
<!-- counsil section  -->
<div class="container-main">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <div class="counsil-div">
                <div class="counsil-div-half-lft">
                    <img style="border-top-left-radius: 10px;border-bottom-left-radius:10px;"
                        src="{{ asset('home/images/04.jpg') }}" alt="">
                </div>
                <div class="counsil-div-half-rgt">
                    <h1 class="counsil-main-head">One to One Counselling</h1>
                    <p class="counsil-sub-head">Schedule your Chat, Call or Video, your comfort is our priority. Choose
                        a suitable mode to get counselled by our team.</p>
                    <div class="btns-consil">
                        <a href="tel:9656836893" class="talk-btn"> <img class="call-img"
                                src="/home/images/Call 1.png" alt=""> Talk to an Entrance Expert</a>
                        <a href=" https://wa.me/+919656836893" target="_blank" class="talk-btn ml-4"> <img
                                class="call-img" src="/home/images/Call 1.png" alt=""> Send WhatsApp
                            Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counsil section end  -->
<!-- download section  -->
<!-- download section  -->
<div class="container-main mb-5 mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="download-now" data-toggle="modal" data-target="#loginModal-downloaad-s">
                <div class="download-main-div">
                    <h1 class="download-main-head">Download Now</h1>
                    <p class="download-sub-head">Your journey to academic excellence starts here. Download the relevant Prepwise app now, and unlock an elite entrance preparation experience, paving the way to admission in prestigious universities and colleges.</p>
                </div>
                <img class="download-img" src="/home/images/05.png" alt="">
                <div class="download-main-div-rgt">
                    <img class="star-icon" src="/home/images/star.png" alt="">
                    <h4 class="grey-text review-nmbr mt-2 mb-3"> <span style="color: black;font-weight: 600;">5/5
                            -</span> 361 REVIEWS</h4>
                    <h6 class="btn downld-btn-home ignou-primary-bg">DOWNLOAD NOW</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="z-index: 1200;" class="modal fade modal-home " id="about-modal2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div style="background: #ffff;width: 100%;border-radius: 20px;margin: auto;"
            class="modal-content modal-popup-about-dv">
            <i class="ri-close-circle-line close"
                style="font-size: 30px;margin-top: 9px;margin-bottom: 10px;margin-right: 7px;" data-dismiss="modal"
                aria-label="Close"></i>
            <div class="modal-body modal-loginform pt-0">
                <div class="container-main">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-dv-modal">
                                <p class="about-ignou-sub-head" style="text-align: justify" id="desc">
                                    {!! $academics->description !!}</p>
                                <p class="acadamic-subhead grey-text mb-0">Warm regards,</p>
                                <p class="acadamic-subhead grey-text mb-0"> {{ $academics->name }}</p>
                                <p class="acadamic-subhead grey-text mb-3">{{ $academics->position }}</p>
                            </div>
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

{{-- modal for statis --}}
<div style="z-index: 1200;" class="modal fade modal-home " id="static-modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div style="background: #ffff;width: 100%;border-radius: 20px;margin: auto;"
            class="modal-content modal-popup-about-dv">
            <i class="ri-close-circle-line close"
                style="font-size: 30px;margin-top: 9px;margin-bottom: 10px;margin-right: 7px;" data-dismiss="modal"
                aria-label="Close"></i>
            <div class="modal-body modal-loginform pt-0">
                <div class="container-main">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-dv-modal">
                                <p class="about-ignou-sub-head" style="text-align: justify" id="desc">Prepwise is Kerala's premier UG and PG entrance preparation platform. With unique divisions: Prepwise Class 11 & 12, Prepwise UG Plus, and School to IIM, we cater to students' distinct academic needs, paving the way for success in top central universities. We're more than a preparation platform; we're a comprehensive academic partner committed to fostering intellectual growth and personal development.</p>
                                <p class="about-ignou-sub-head" style="text-align: justify" id="desc">Prepwise Class 11 & 12 sets the stage for our students' journeys to some of India's top central universities. Our groundbreaking Integrated Learning Program (ILP) spans Science, Humanities, and Commerce, offering an array of services, from mentorship and strategy classes to engaging video lessons and live doubt resolution sessions, all geared towards the CUET UG entrance. Our elite team of educators, sourced from premier institutions like the IITs, IIMs, JNU, DU, HCU, PU, AMU, and TISS, are devoted to guiding you through this transformative educational experience.</p>
                                <p class="about-ignou-sub-head" style="text-align: justify" id="desc">Our second arm, Prepwise UG Plus, is designed with the needs of undergraduate students and recent graduates in mind. Whether you're seeking further studies in prestigious institutions or employment opportunities post-graduation, our resources have got you covered. Offering PG entrance coaching, UG academics, career development, and skilling modules under the guidance of accomplished alumni from top Indian institutions, we aim to cultivate a vibrant, diverse community across fields such as Arts, Sciences, Humanities, and Languages. </p>
                                <p class="about-ignou-sub-head" style="text-align: justify" id="desc">School to IIM, our third division, is an exclusive venture aimed at students targeting the IPMAT/JIPMAT entrance exams after Class 12. As Kerala's undisputed leader in these exams' coaching, our objective is to empower students from varying socio-economic backgrounds, opening doors to India's elite management institutes. Steered by IIT and IIM alumni, School to IIM is distinct in its dedicated focus on Kerala's students, working tirelessly to bridge the awareness gap regarding these exams and tailor coaching methodologies to our students' unique learning needs.</p>
                                <p class="about-ignou-sub-head" style="text-align: justify" id="desc">In essence, Prepwise is a comprehensive academic hub designed to enable you to navigate your academic journey with confidence and precision. Join Prepwise, and step into a brighter future!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- modal form course  -->
<div style="z-index: 1200;" class="modal fade modal-home" id="loginModal-downloaad" tabindex="-1" role="dialog"
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
                            <a href="https://play.google.com/store/apps/details?id=co.loki.thlnj "
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
                            <a href="https://play.google.com/store/apps/details?id=co.tarly.wejjb "
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


<!-- footer section  -->
@include('home.layouts.footer')

<script>
    $('.custom-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: true,
        infinite: false,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    function ShowModal() {
        // alert(val);


        $('#about-modal2').modal('show');


    }

    function ShowStaticModal() {
        $('#static-modal').modal('show');
    }

    function LandingPageSave() {


        var name = $('input#name').val();
        var mobile = $('input#mobile').val();
        var qualification = $('select#qual').val();
        var course = $('select#inter').val();
        var reason = $('select#reas').val();



        if (name == '') {
            $('#name').focus();
            $('#name').css({
                'border': '1px solid red'
            });
            $('.nameerror').show();
            $('.nameerror').text("enter your name*");
            return false;
        } else

            $('#name').css({
                'border': '1px solid #CCC'
            });
        $('.nameerror').hide();



        if (mobile == '') {
            $('#mobile').focus();
            $('#mobile').css('border', '1px solid red');
            $('.mobileerror').show().css('color', 'red').text("Enter Mobile Number*");
            return false;
        } else {
            $('#mobile').css('border', '1px solid #CCC');
            $('.mobileerror').hide();
        }

        var mobileRegex = /^[0-9]{10}$/;
        if (!mobileRegex.test(mobile)) {
            $('#mobile').focus();
            $('#mobile').css('border', '1px solid red');
            $('.mobileerror').show().css('color', 'red').text("Enter a valid mobile number*");
            return false;
        } else {
            $('#mobile').css('border', '1px solid #CCC');
            $('.mobileerror').hide();
        }



        if (qualification == '') {
            $('#qual').focus();
            $('#qual').css({
                'border': '1px solid red'
            });
            $('.qualerror').show();
            $('.qualerror').text("choose anyone*");
            return false;
        } else
            qual
        $('#qual').css({
            'border': '1px solid #CCC'
        });

        $('.qualerror').hide();

        if (course == '') {
            $('#inter').focus();
            $('#inter').css({
                'border': '1px solid red'
            });
            $('.intererror').show();
            $('.intererror').text("choose anyone*");
            return false;
        } else

            $('#inter').css({
                'border': '1px solid #CCC'
            });

        $('.intererror').hide();

        if (reason == '') {
            $('#reas').focus();
            $('#reas').css({
                'border': '1px solid red'
            });
            $('.reaserror').show();
            $('.reaserror').text("choose anyone*");
            return false;
        } else

            $('#reas').css({
                'border': '1px solid #CCC'
            });

        $('.reaserror').hide();

        data = new FormData();

        data.append('name', name);
        data.append('mobile', mobile);
        data.append('qualification', qualification);
        data.append('course', course);
        data.append('reason', reason);

        data.append('_token', '{{ csrf_token() }}');
        $.ajax({

            type: "POST",
            url: "/consultation-save",
            data: data,
            dataType: "json",
            contentType: false,
            //cache: false,
            processData: false,

            success: function(data) {
                if (data['success']) {
                    Toastify({
                        text: "Submitted Successfully",
                        duration: 3000,
                        newWindow: true,
                        // close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "linear-gradient(to right, #12a00f, #12a00f)",
                        },
                        callback: function() {
                            // alert("sss");
                            window.location.href = window.location.href
                        },
                    }).showToast();
                } else {
                    Toastify({
                        text: "Some Thing Went Wrong",
                        duration: 3000,
                        newWindow: true,
                        // close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "linear-gradient(to right, red, red)",
                        },
                        callback: function() {
                            // alert("sss");
                            window.location.href = window.location.href
                        },
                    }).showToast();
                }
            }
        })
    }

    function LandingPage2ndSave() {

        var NameTwo = $('input#nametwo').val();
        var MobileTwo = $('input#mobiletwo').val();
        var QualificationTwo = $('#qualificationtwo').val();
        var CourseTwo = $('#coursetwo').val();
        var ReasonTwo = $('#reasontwo').val();




        // alert(QualificationTwo);
        if (NameTwo == '') {
            $('#nametwo').focus();
            $('#nametwo').css({
                'border': '1px solid red'
            });
            $('.nameerrortwo').show();
            $('.nameerrortwo').text("enter your name*");
            return false;
        } else

            $('#nametwo').css({
                'border': '1px solid #CCC'
            });
        $('.nameerrortwo').hide();


        if (MobileTwo == '') {
            $('#mobiletwo').focus();
            $('#mobiletwo').css('border', '1px solid red');
            $('.mobiletwoerror').show().css('color', 'red').text("Enter Mobile Number*");
            return false;
        } else {
            $('#mobiletwo').css('border', '1px solid #CCC');
            $('.mobiletwoerror').hide();
        }

        var mobileRegex = /^[0-9]{10}$/;
        if (!mobileRegex.test(MobileTwo)) {
            $('#mobiletwo').focus();
            $('#mobiletwo').css('border', '1px solid red');
            $('.mobiletwoerror').show().css('color', 'red').text("Enter a valid mobile number*");
            return false;
        } else {
            $('#mobiletwo').css('border', '1px solid #CCC');
            $('.mobiletwoerror').hide();
        }




        if (QualificationTwo == '') {
            $('#qualificationtwo').focus();
            $('#qualificationtwo').css({
                'border': '1px solid red'
            });
            $('.qualificationtwoerror').show();
            $('.qualificationtwoerror').text("choose anyone*");
            return false;
        } else

            $('#qualificationtwo').css({
                'border': '1px solid #CCC'
            });

        $('.qualificationtwoerror').hide();

        if (CourseTwo == '') {
            $('#coursetwo').focus();
            $('#coursetwo').css({
                'border': '1px solid red'
            });
            $('.coursetwoerror').show();
            $('.coursetwoerror').text("choose anyone*");
            return false;
        } else

            $('#coursetwo').css({
                'border': '1px solid #CCC'
            });

        $('.coursetwoerror').hide();

        if (ReasonTwo == '') {
            $('#reasontwo').focus();
            $('#reasontwo').css({
                'border': '1px solid red'
            });
            $('.reasontwoerror').show();
            $('.reasontwoerror').text("choose anyone*");
            return false;
        } else

            $('#reasontwo').css({
                'border': '1px solid #CCC'
            });

        $('.reasontwoerror').hide();


        data = new FormData();


        data.append('name', NameTwo);
        data.append('mobile', MobileTwo);
        data.append('qualification', QualificationTwo);
        data.append('course', CourseTwo);
        data.append('reason', ReasonTwo);

        data.append('_token', '{{ csrf_token() }}');
        $.ajax({

            type: "POST",
            url: "/consultation-save",
            data: data,
            dataType: "json",
            contentType: false,
            //cache: false,
            processData: false,

            success: function(data) {
                if (data['success']) {
                    Toastify({
                        text: "Submitted Successfully",
                        duration: 3000,
                        newWindow: true,
                        // close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "linear-gradient(to right, #12a00f, #12a00f)",
                        },
                        callback: function() {
                            // alert("sss");
                            window.location.href = window.location.href
                        },
                    }).showToast();
                } else {
                    Toastify({
                        text: "Some Thing Went Wrong",
                        duration: 3000,
                        newWindow: true,
                        // close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "linear-gradient(to right, red, red)",
                        },
                        callback: function() {
                            // alert("sss");
                            window.location.href = window.location.href
                        },
                    }).showToast();
                }
            }
        })
    }

    $('.course-name').click(function() {

        // Remove 'active' class from all buttons
        $('.course-name').removeClass(' active-course-btn');

        // Add 'active' class to the clicked button
        $(this).addClass('active-course-btn');
    });


    function Department(val) {


        $.post("/get-course", {
            Department_id: val,
            _token: "{{ csrf_token() }}"
        }, function(result) {

            $('#coursediv').html(result);
        });
    }

    $(document).ready(function() {
        var maxVisible = 5; // Set the maximum number of visible FAQs
        var $cards = $('.card');
        var $viewAllBtn = $('.view-all-btn');

        // Hide FAQs beyond the maximum visible count
        $cards.slice(maxVisible).hide();

        $viewAllBtn.on('click', function(e) {
            e.preventDefault();
            var $hiddenCards = $cards.filter(':hidden');

            $hiddenCards.toggle(); // Toggle visibility of hidden FAQs

            if ($hiddenCards.length > 0) {
                $viewAllBtn.text('View less');
            } else {
                $cards.slice(maxVisible).hide();
                $viewAllBtn.text('View all');
            }
        });
    });

    $('.course-name').click(function() {

        // Remove 'active' class from all buttons
        $('.course-name').removeClass('ignou-primary-bg active-course-btn');

        // Add 'active' class to the clicked button
        $(this).addClass('ignou-primary-bg active-course-btn');
    });
</script>
