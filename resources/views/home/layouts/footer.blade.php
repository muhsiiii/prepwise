	<!-- footer section  -->
	<footer class="text-lg-start pt-3 pb-3">
	  <div class="container-main  text-md-start">
	    <div class="row">
	      <div class="col-xl-3 col-lg-3 col-md-6 logo-div">
	        <a class="logo-footer" href="{{ route('index') }}"><img src="{{ asset('home/images/wl.png') }}" alt=""></a> <br>
	        <div class="footer-icons">
	          <a href="https://www.instagram.com/prepwise_official/ " target="_blank"><i class="ri-instagram-line"></i></a>
	          <a href="https://www.youtube.com/@prepwiseclass1112/channels" target="_blank"><i class="ri-youtube-line"></i></a>
	          <a href="https://wa.me/+919656836893 " target="_blank"><i class="ri-whatsapp-line"></i></a>
	          <a href=" https://in.linkedin.com/company/prepwise-ug-pg-entrance " target="_blank"> <i class="ri-linkedin-box-line"></i></a>
	          <a href="https://www.facebook.com/profile.php?id=100091255767673 " target="_blank"><i class="ri-facebook-circle-line"></i></a>
	        </div>
	        <p class="text-white">© 2024 - 2025 Prepwise.</p>
	        <div class="downld-app-icons" data-toggle="modal" data-target="#loginModal-downloaad-f">
                <h6 class="btn downld-btn-home-ftr ignou-primary-bg">Download the App</h6>

	        </div>
	      </div>
	      <div class="col-lg-3 col-md-6 col-6  mx-auto mb-4 information-div">
	        <h3 class="fw-bold footer-head">UG Programs</h3>
	        <p><a href="https://thlnj.courses.store/ " class="grey-text">CUET UG </a></p>
	        <p><a href="https://thlnj.courses.store/" class="grey-text">CUET UG + Board</a></p>
	        <p><a href="https://thlnj.courses.store/" class="grey-text">CUET UG + NCET</a></p>
	        <p><a href="https://thlnj.courses.store/" class="grey-text">CUET UG + Board + NCET</a></p>
	        <p><a href="https://wejjb.courses.store/" class="grey-text">IPMAT/JIPMAT</a></p>

	        </p>
	      </div>
	      <div class="col-lg-3 col-md-6 col-6 mx-auto mb-4 services-div">
	        <h3 class="fw-bold footer-head">PG Programs</h3>
	        <p><a href="https://learn.prepwise.in/learn" class="grey-text">CUET PG</a></p>
	        <p><a href="https://learn.prepwise.in/learn" class="grey-text">IIT JAM </a></p>
	        <p><a href="https://learn.prepwise.in/learn" class="grey-text">CUET PG + IIT JAM</a></p>
	        <p><a href="https://learn.prepwise.in/learn" class="grey-text">TISSNET </a></p>
	        <p><a href="https://learn.prepwise.in/learn" class="grey-text">CMAT/KMAT  </a></p>
	      </div>
	      <div class="col-lg-3 col-xl-3 col-md-6 mx-auto mb-md-0 mb-4 icon-contact">
	        <h3 class="fw-bold footer-head">Quick Links</h3>
	        <p><a href="{{ route('blogpage') }}" class="grey-text">PREPPEDIA            </a></p>
	        <p><a href="{{ route('terms') }}" class="grey-text">Terms & Conditions</a></p>
	        <p><a href="{{ route('privacy') }}" class="grey-text">Privacy Policy</a></p>
	        <p><a href="{{ route('refund') }}" class="grey-text">Refund Policy</a></p>
	      </div>
	    </div>
	  </div>
	</footer>


    <div style="z-index: 1200;" class="modal fade modal-home" id="loginModal-downloaad-f" tabindex="-1" role="dialog"
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
                            <a href="https://play.google.com/store/apps/details?id=co.loki.thlnj  "
                                target="_blank">
                                <img class="icon-store" src="/home/images/p2.png" alt="">

                                </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://play.google.com/store/apps/details?id=in.prepwise.www  "
                                target="_blank">
                                <img class="icon-store" src="/home/images/p1.png" alt="">

                                </a>
                        </div>
                        <div class="col-lg-4">
                            <a href=" https://play.google.com/store/apps/details?id=co.tarly.wejjb
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


	<!-- footer end  -->
	<!-- bootstrap scripts  -->
	<script>
	  function toggleCartt() {
	    document.querySelector('.sidebar').classList.toggle('open-cart');
	  }
	</script>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    <script type="text/javascript"  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" ></script>

</body>

	</html>

	<script>
  $('#fbt').addClass('active-course-btn');

</script>

