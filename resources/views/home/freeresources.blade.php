@include('home.layouts.header')
@include('home.layouts.nav')
<!-- resources section  -->
<div class="container-main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="free-resources-head text-center">Welcome to Prepwise Resource Hub</h1>
			<p class="free-resources-sub-head text-center grey-text">Tap into Prepwise's free resources for UG and PG entrances like CUET, IIT JAM, TISSNET, IPMAT/JIPMAT, NCET, and more. Use our tailored resources to supercharge your preparation journey. Explore now!

            </p>
		</div>
		@foreach($FreeResources as $FreeResource)
		<div class="col-lg-2 col-md-3 col-sm-4 col-6">
			<div class="resources-box">
				<a href="{{route('freeresourcessub',$FreeResource->id)}}"><img class="folder-img" src="/home/images/folder 1.png" alt="">
				<h2 class="reasorces-name">{{$FreeResource->folder_title}}</h2></a>
			</div>
		</div>
		@endforeach
		<div class="col-lg-12 mb-4">
			<div class="back-btn-resources-page-dv">
				<a href="{{route('course')}}" class="back-btn-resources-page ignou-primary-bg"><i style="vertical-align: middle;" class="ri-arrow-left-circle-fill"></i>Back</a>
			</div>
		</div>
	</div>
</div>
<!-- footer section  -->
@include('home.layouts.footer')
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
<!-- onclick="toggleSubfolders(this)" -->
<!-- <script>
function toggleSubfolders(element) {
  const subfolders = element.nextElementSibling;
  subfolders.classList.toggle('show');
  $('.subfolders').show();
  $('.subfolders').text('Hii');
}
</script> -->
