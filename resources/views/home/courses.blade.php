@include('home.layouts.header')
@include('home.layouts.nav')
<!-- join community  -->
<div class="container-main mt-5 mb-5">
	<div class="join-community" style="background-image: url(./home/images/bg-ignoutube.png);background-repeat: no-repeat;background-size: 100% auto;background-position: center;background-repeat: no-repeat;background-size: cover;">
		<div class="row">
			<div class="col-lg-12">
				<div class="join-commuinity-div">
					<div class="join-comnty-dub">
						<h2 class="community-head text-white mb-3">Join the League of Aspirants - Your Learning Community Awaits!</h2>
						<p class="community-sub-head text-white">Welcome to the Prepwise Community Groups, a unique platform where we combine the power of collective learning and expert guidance. Our dedicated Whatsapp groups cater to UG and PG entrance exams like CUET UG, CUET PG, IIT JAM, TISSNET, IPMAT/JIPMAT, NCET, and more.</p>
						<p class="community-sub-head text-white">These communities are not just discussion spaces; they are the breeding grounds for ideas, knowledge sharing, and invaluable insights from peers and mentors alike. As a member, you get access to instant updates, study resources, peer discussions, and a platform to resolve your queries.</p>
						<p class="community-sub-head text-white">Don't just prepare for your exams, experience the journey with companions who share your goal. Whether you are an aspirant or a curious mind, there's a space for you in our thriving community. Dive in, start engaging, and enrich your learning journey with Prepwise. Join the conversation today!</p>
						<a href="{{route('ignoutalk')}}" class="btn-join-community btn outline-btn text-white "><i style="vertical-align: middle;" class="ri-whatsapp-fill"></i> Join WhatsApp Groups
                        </a>
						<a href="{{route('freeresources')}}" class="btn-join-community community-resources  pink-bg btn ml-3 ">Get Free Resources</a>
					</div>
					<div class="join-comnty-dub">
						<img class="community-img" src="/home/images/Untitled-1 1.png" alt="">
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

<!-- end join community  -->
@include('home.layouts.footer')
