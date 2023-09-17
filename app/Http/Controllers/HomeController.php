<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\AcheiversPlaylist;
use App\Models\Achievers;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Department;
use App\Models\Course;
use App\Models\Dropdown;
use App\Models\FAQ;
use App\Models\FreeResource;
use App\Models\FreeResourceFile;
use App\Models\Ignoutube;
use App\Models\ImpPlaylist;
use App\Models\Impression;
use App\Models\Learner;
use App\Models\Platforms;
use App\Models\Playlist;
use App\Models\SubFolder;
use App\Models\Test;
use App\Models\Testimonial;
use App\Models\WpParent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $DropdownQualifications = Dropdown::where('type', 1)->get();
        $DropdownsProgramorCourses = Dropdown::where('type', 2)->get();
        $DropdownsReasons = Dropdown::where('type', 3)->get();
        $Testimonials = Testimonial::all();
        $IgnouTubes = Ignoutube::where('status', 1)->latest()->limit(3)->get();
        $Impressions = Impression::where('status', 1)->latest()->limit(3)->get();
        $FAQs = FAQ::latest()->get();
        $first_dept = Department::where('status', 1)->orderBy('id', 'ASC')->limit(1)->first();
        $first_course = Course::where('status', 1)->where('department', $first_dept->id)->get();
        $Departments = Department::where('status', '!=', 0)->where('id', '!=', $first_dept->id)->get();
        $banners = Banner::all();
        $academics = Academic::latest()->first();
        $Tests = Learner::all();
        $Platforms=Platforms::latest()->get();
        $Achievers=Achievers::where('status',1)->latest()->limit(4)->get();
        return view('home.index', compact('banners', 'academics', 'Departments', 'first_dept', 'first_course', 'FAQs', 'IgnouTubes', 'Testimonials', 'DropdownQualifications', 'DropdownsProgramorCourses', 'DropdownsReasons', 'Tests','Impressions','Platforms','Achievers'));
    }


    public function Course()
    {
        return view('home.courses');
    }

    public function FreeResource()
    {
        $FreeResources = FreeResource::where('status',1)->get();
        return view('home.freeresources', compact('FreeResources'));
    }

    public function FreeResourceSub1($Subfolder_Id)
    {
        $SubFolders = SubFolder::where('parent_folder', $Subfolder_Id)->where('status', 1)->get();
        return view('home.freeresource_sub1', compact('SubFolders'));
    }

    public function FreeResourceFile($File_Id)
    {
        $FreeResourceFiles = FreeResourceFile::where('sub_folder', $File_Id)->where('status', 1)->get();
        return view('home.freeresourcefile', compact('FreeResourceFiles', 'File_Id'));
    }
    public function IgnouTalk()
    {
        $banners = Banner::all();
        $Ignoutalk = WpParent::where('status', 1)->get();
        return view('home.ignoutalk', compact('Ignoutalk', 'banners'));
    }
    public function BlogDetail($id)
    {
        $BlogDetails = Blog::find($id);
        $BlogsSliders = Blog::where('status',1)->latest()->limit(6)->get();
        return view('home.blog_detail', compact('BlogsSliders', 'BlogDetails'));
    }
    public function BlogPage()
    {
        $Blogcats = BlogCategory::where('status', 1)->get();
        $Blogs = Blog::orderBy('date', 'DESC')->where('status', 1)->get();
        $BlogsSliders = Blog::where('status',1)->latest()->limit(6)->get();
        $banners = Banner::all();
        return view('home.blogpage', compact('Blogs', 'BlogsSliders', 'Blogcats', 'banners'));
    }
    public function GetBlogCategory(Request $request)
    {
        $Cid = $request->cid;
        $output = '';
        if ($Cid == 'all') {
            $Blogs = Blog::where('status', 1)->orderBy('date', 'DESC')->get();
            foreach ($Blogs as $C) {

                $output .= '
                        <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog-main-box">
                            <a href="/blog-detail/' . $C->id . '">
                            <div class="blog-image">
                                <img class="blog-pic" src="' . $C->image . '" alt="">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-main-head">' . $C->title . '</h2>
                                <p class="blog-sub-head-main">' . $C->description . '</p>
                                <div class="blog-own">
                                    <div class="img-name-blog">
                                        <img class="blog-user-profile" src="' . $C->dp . '" alt="">
                                        <p class="ml-1">' . $C->name . '</p>
                                    </div>
                                    <p>' . date('M d, Y', strtotime($C->date)) . '</p>
                                </div>
                            </div>
                            </a>

                        </div>
                    </div>
                      ';
            }
        } else {

            $Blogs = Blog::where('blog_category', $Cid)->where('status', 1)->orderBy('date', 'DESC')->get();
            foreach ($Blogs as $C) {

                $output .= '
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog-main-box">
                            <a href="/blog-detail/' . $C->id . '">
                            <div class="blog-image">
                                <img class="blog-pic" src="' . $C->image . '" alt="">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-main-head">' . $C->title . '</h2>
                                <p class="blog-sub-head-main">' . $C->description . '</p>
                                <div class="blog-own">
                                    <div class="img-name-blog">
                                        <img class="blog-user-profile" src="' . $C->dp . '" alt="">
                                        <p class="ml-1">' . $C->name . '</p>
                                    </div>
                                    <p>' . date('M d, Y', strtotime($C->date)) . '</p>
                                </div>
                            </div>
                            </a>

                        </div>
                    </div>
                      ';
            }
        }
        echo $output;
    }

    public function GetBlogSorted(Request $request)
    {
        $Sid = $request->sid;
        $Cid = $request->blogid;

        $output = '';

        if ($Sid == 1) {

            if ($Cid == 'all') {
                $Blogs = Blog::where('status', 1)->orderBy('date', 'DESC')->get();
                foreach ($Blogs as $C) {

                    $output .= '
                        <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog-main-box">
                            <a href="/blog-detail/' . $C->id . '">
                            <div class="blog-image">
                                <img class="blog-pic" src="' . $C->image . '" alt="">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-main-head">' . $C->title . '</h2>
                                <p class="blog-sub-head-main">' . $C->description . '</p>
                                <div class="blog-own">
                                    <div class="img-name-blog">
                                        <img class="blog-user-profile" src="' . $C->dp . '" alt="">
                                        <p class="ml-1">' . $C->name . '</p>
                                    </div>
                                    <p>' . date('M d, Y', strtotime($C->date)) . '</p>
                                </div>
                            </div>
                            </a>

                        </div>
                    </div>
                      ';
                }
            } else {

                $Blogs = Blog::where('blog_category', $Cid)->where('status', 1)->orderBy('date', 'DESC')->get();
                foreach ($Blogs as $C) {

                    $output .= '
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog-main-box">
                            <a href="/blog-detail/' . $C->id . '">
                            <div class="blog-image">
                                <img class="blog-pic" src="' . $C->image . '" alt="">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-main-head">' . $C->title . '</h2>
                                <p class="blog-sub-head-main">' . $C->description . '</p>
                                <div class="blog-own">
                                    <div class="img-name-blog">
                                        <img class="blog-user-profile" src="' . $C->dp . '" alt="">
                                        <p class="ml-1">' . $C->name . '</p>
                                    </div>
                                    <p>' . date('M d, Y', strtotime($C->date)) . '</p>
                                </div>
                            </div>
                            </a>

                        </div>
                    </div>
                      ';
                }
            }
        }

        if ($Sid == 2) {



            if ($Cid == 'all') {
                $Blogs = Blog::where('status', 1)->orderBy('date', 'ASC')->get();
                foreach ($Blogs as $C) {

                    $output .= '
                <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog-main-box">
                    <a href="/blog-detail/' . $C->id . '">
                    <div class="blog-image">
                        <img class="blog-pic" src="' . $C->image . '" alt="">
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-main-head">' . $C->title . '</h2>
                        <p class="blog-sub-head-main">' . $C->description . '</p>
                        <div class="blog-own">
                            <div class="img-name-blog">
                                <img class="blog-user-profile" src="' . $C->dp . '" alt="">
                                <p class="ml-1">' . $C->name . '</p>
                            </div>
                            <p>' . date('M d, Y', strtotime($C->date)) . '</p>
                        </div>
                    </div>
                    </a>

                </div>
            </div>
              ';
                }
            } else {

                $Blogs = Blog::where('blog_category', $Cid)->where('status', 1)->orderBy('date', 'ASC')->get();
                foreach ($Blogs as $C) {

                    $output .= '
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog-main-box">
                    <a href="/blog-detail/' . $C->id . '">
                    <div class="blog-image">
                        <img class="blog-pic" src="' . $C->image . '" alt="">
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-main-head">' . $C->title . '</h2>
                        <p class="blog-sub-head-main">' . $C->description . '</p>
                        <div class="blog-own">
                            <div class="img-name-blog">
                                <img class="blog-user-profile" src="' . $C->dp . '" alt="">
                                <p class="ml-1">' . $C->name . '</p>
                            </div>
                            <p>' . date('M d, Y', strtotime($C->date)) . '</p>
                        </div>
                    </div>
                    </a>

                </div>
            </div>
              ';
                }
            }
        }


        echo $output;
    }

    public function GetBlogSearch(Request $request)
    {
        $Bid = $request->bid;

        // print_r($Pid);
        // die;

        $output = '';

        $Blogs = Blog::where('status', 1)
            ->where(function ($q) use ($Bid) {
                $q->where('title', 'LIKE', '%' . $Bid . '%')
                    ->orWhere('name', 'LIKE', '%' . $Bid . '%')
                    ->orWhere('description', 'LIKE', '%' . $Bid . '%');
            })->get();
        if (sizeof($Blogs)) {
            foreach ($Blogs as $C) {

                $output .= '
                        <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog-main-box">
                            <a href="/blog-detail/' . $C->id . '">
                            <div class="blog-image">
                                <img class="blog-pic" src="' . $C->image . '" alt="">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-main-head">' . $C->title . '</h2>
                                <p class="blog-sub-head-main">' . $C->description . '</p>
                                <div class="blog-own">
                                    <div class="img-name-blog">
                                        <img class="blog-user-profile" src="' . $C->dp . '" alt="">
                                        <p class="ml-1">' . $C->name . '</p>
                                    </div>
                                    <p>' . date('M d, Y', strtotime($C->date)) . '</p>
                                </div>
                            </div>
                            </a>

                        </div>
                    </div>
                      ';
            }
        } else {
            $output .= '

    <h5  style="display:table;margin-left: auto !important;margin-right:auto !important;font-weight:600;font-size:22px;">No Blogs Found</h5>

            ';
        }
        echo $output;
    }

    public function IgnouTube()
    {
        $IgnouTubes = Ignoutube::where('status', 1)->latest()->limit(12)->get();
        $Playlists = Playlist::where('status', 1)->get();
        return view('home.ignoutube', compact('IgnouTubes', 'Playlists'));
    }

    public function Impressions()
    {
        $Impressions = Impression::where('status', 1)->latest()->limit(12)->get();
        $Playlists = ImpPlaylist::where('status', 1)->get();
        return view('home.impressions',compact('Impressions','Playlists'));
    }

    public function GetImpPlaylist(Request $req)
    {
        $Pid = $req->pid;

        // print_r($Pid);
        // die;

                    $output = '';

                    if($Pid=='all'){
                        $Impressions=Impression::where('status',1)->latest()->get();
                    foreach ($Impressions as $C) {
                        $videoTimestamp = Carbon::parse($C->updated_at);
                        $timeAgo = $videoTimestamp->diffForHumans();
                        $output .= '
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5">

                        <div class="ignoutube-page">
                        '. $C->embeded_url .'

                        <h3 class="ignoutube-head pt-2">'.$C->title.'</h3>
                        <h4 class="ignoutube-sub-head">'.$C->name.'</h4>
                        <div class="time-nd-btn">
                            <p class="mb-0">'.$timeAgo.'</p>
                            <a href="'.$C->youtube_link.'" target="_blank" class="ignou-primary-bg btn">Watch
                                now</a>
                        </div>
                    </div>
                    </div>

                      ';
                    }
                }else{

                    $Impressions=Impression::where('playlist',$Pid)->where('status',1)->latest()->get();
                    foreach ($Impressions as $C){
                    $videoTimestamp = Carbon::parse($C->updated_at);
                    $timeAgo = $videoTimestamp->diffForHumans();
                    $output .= '
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <div class="ignoutube-page">
                    '. $C->embeded_url .'
                    <h3 class="ignoutube-head pt-2">'.$C->title.'</h3>
                    <h4 class="ignoutube-sub-head">'.$C->name.'</h4>
                    <div class="time-nd-btn">
                        <p class="mb-0">'.$timeAgo.'</p>
                        <a href="'.$C->youtube_link.'" target="_blank" class="ignou-primary-bg btn">Watch
                            now</a>
                    </div>
                </div>
                </div>
                  ';
                }

            }
            echo $output;

    }

    public function LandingPage()
    {
        $DropdownQualifications = Dropdown::where('type', 1)->get();
        $DropdownsProgramorCourses = Dropdown::where('type', 2)->get();
        $DropdownsReasons = Dropdown::where('type', 3)->get();
        $IgnouTubes = Ignoutube::where('status', 1)->latest()->limit(3)->get();
        $FAQs = FAQ::latest()->get();
        $first_dept = Department::where('status', 1)->orderBy('id', 'ASC')->limit(1)->first();
        $first_course = Course::where('status', 1)->where('department', $first_dept->id)->get();
        $Departments = Department::where('status', '!=', 0)->where('id', '!=', $first_dept->id)->get();
        $academics = Academic::latest()->first();
        return view('home.landingpage', compact('first_dept', 'first_course', 'Departments', 'academics', 'FAQs', 'IgnouTubes', 'DropdownQualifications', 'DropdownsProgramorCourses', 'DropdownsReasons'));
    }


    public function TermsAndConditions()
    {
        return view('home.terms');
    }

    public function PrivacyAndPolicy()
    {
        return view('home.privacy');
    }

    public function Refund()
    {
        return view('home.refund');
    }

    public function Results()
    {
        $Achievers=Achievers::where('status',1)->latest()->get();
        $Playlists=AcheiversPlaylist::where('status',1)->get();
        return view('home.result',compact('Achievers','Playlists'));
    }

    public function GetAchieve(Request $req)
    {
        $Pid = $req->pid;

// print_r($Pid);
// die;

            $output = '';

            if($Pid=='all'){
                $Achievers=Achievers::where('status',1)->latest()->get();
            foreach ($Achievers as $C) {

                $output .= '
                <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="result-image-dv">
                    <img src="'.$C->image.'" alt="" srcset="">
                </div>
            </div>
              ';
            }
        }else{

            $Achievers=Achievers::where('playlist',$Pid)->where('status',1)->latest()->get();
            foreach ($Achievers as $C){

            $output .= '
            <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="result-image-dv">
                <img src="'.$C->image.'" alt="" srcset="">
            </div>
        </div>
          ';
        }

    }
    echo $output;

}
}
