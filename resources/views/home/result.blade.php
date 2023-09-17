@include('home.layouts.header')
@include('home.layouts.nav')



<div class="result-main-dv">
	<div class="container-main">
		<div class="row">
			<div class="col-lg-12">
				<div class="result-dv mb-4">
					<h1 class="result-main-text text-center">Glimpses of Glory - Our Achievers</h1>
					<p class="sub-text-result text-center">Step into our hall of fame, where we celebrate the radiant faces of victory. This gallery shines with the photos of our achievers across the years, beaming with pride and accomplishment. Each picture is a testament to the sheer determination of our students, the power of their dreams, and the exceptional guidance provided by Prepwise. They're not just photos; they're the embodiment of aspirations met and boundaries transcended. Explore and be inspired, for your photo could be the next addition to this illustrious collection.</p>
				</div>
			</div>
			<div class="col-lg-12 mb-3">
				<div class="select-dv-result">
					<select class="form-control form-control-lg" onchange="GetPlaylist(this.value)">
                        <option class="text-center" value="all">All</option>
                        @foreach ($Playlists as $Playlist)
                        <option class="text-center" value="{{ $Playlist->id }}">{{ $Playlist->playlist }}</option>
                        @endforeach


					</select>
				</div>
			</div>
			<!-- ============= grid posts  ===================== -->


		</div>
	</div>
</div>


<div class="container-main">
    <div class="row" id="achieve">
        @foreach ($Achievers as $Achiever)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="result-image-dv">
                <img src="{{ $Achiever->image }}" alt="" srcset="">
            </div>
        </div>
        @endforeach
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
@include('admin.layouts.messages')
<script>
    function GetPlaylist(Pid) {


        $.post("/get-achieve", {
            pid: Pid,
            _token: "{{ csrf_token() }}"
        }, function(result) {

            $('#achieve').html(result);
        });
    }
</script>
