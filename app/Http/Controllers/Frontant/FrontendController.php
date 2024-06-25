<?php

namespace App\Http\Controllers\Frontant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use App\Models\AboutUs;
use App\Models\Company;
use App\Models\Expertise;
use App\Models\OurClient;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Service;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.

     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        Artisan::call('optimize:clear');
        $expertise = Expertise::inRandomOrder()->get();
        $ourclient = OurClient::orderBy('orderNo', 'asc')->where('status', 'Active')->limit(12)->get();
        $companydetails = Company::orderBy('id', 'DESC')->first(['total_clients', 'project_done', 'running_project', 'meta', 'success_rate', 'alt']);
        $aboutus = AboutUs::orderBy('id', 'DESC')->first(['title', 'description', 'video', 'alt', 'image']);
        $testimunials = Testimonial::where('status', 'Active')->get(['customer_id', 'message', 'image', 'alt']);
        $services = Service::where('status', 'Active')->limit(9)->orderBy('order_by',"asc")->get();
        $products = Product::where('status', 'Active')->where('service_id', null)->limit(9)->where('id','!=',24)->get();
        $sliders = Slider::where('status', 'Active')->orderBy('order_by', 'asc')->limit(5)->get();
        $projects = Project::where('status', 'Active')->limit(3)->get();
        $meta = optional($companydetails)->meta;
        return view('frontant_with_extra_path.pages.main', get_defined_vars());
    }


    public function ourclient()
    {
        $ourclient = OurClient::orderBy('orderNo', 'asc')->where('status', 'Active')->get();
        $meta = Company::orderBy('id', 'DESC')->pluck('client_meta')->first();
        return view('frontant_with_extra_path.pages.aboutus.ourclient', get_defined_vars());
    }


    public function aboutus()
    {
        $aboutpage = AboutUs::orderBy('id', 'DESC')->first(['title', 'meta', 'description', 'tagline', 'image', 'alt']);
        $meta = $aboutpage->meta;
        // $is_show_title = $aboutpage->is_show_title;
        $meta_description = $aboutpage->meta_description;
        $ourtimes = OurTeam::orderBy('id', 'DESC')->where('status', 'Active')->get(['department_id', 'designation_id', 'name', 'image', 'alt']);
        return view('frontant_with_extra_path.pages.aboutpage', get_defined_vars());
    }

    public function ourteam()
    {
        $meta = Company::orderBy('id', 'DESC')->pluck('team_meta')->first();
        // $ourtimes = OurTeam::orderBy('id', 'DESC')->where('status', 'Active')->get(['department_id', 'designation_id', 'name', 'image']);
        $ceo = OurTeam::where('designation_id', 'CEO')->first();
        // $manager =  OurTeam::whereIn('designation_id', ['Technical Manager', 'HR Manager'])->get();
        $teamMembers = OurTeam::whereNotIn('designation_id', ['CEO'])->orderBy('serial', 'asc')->get();

        return view('frontant_with_extra_path.pages.aboutus.ourteampage', get_defined_vars());
    }


    public function contactemailsend(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->message,
        ];
        // dd($details);

        Mail::to('info@itwaybd.com')->send(new ContactUs($details));
        return redirect()->back()->with('success', 'Your message has been sent successfully. we be will be contacted very soon.');
    }

    public function testimunials()
    {
        $meta = Company::orderBy('id', 'DESC')->pluck('testimunials_meta')->first();
        $testimunials = Testimonial::where('status', 'Active')->get(['customer_id', 'message', 'image', 'alt']);
        return view('frontant_with_extra_path.pages.aboutus.testimunials', get_defined_vars());
    }

    public function overview()
    {
        $aboutpage = AboutUs::orderBy('id', 'DESC')->first(['title', 'meta', 'description', 'tagline', 'image', 'alt']);
        $meta = $aboutpage->meta;
        // $is_show_title = $aboutpage->is_show_title;
        $meta_description = $aboutpage->meta_description;
        $ourtimes = OurTeam::orderBy('id', 'DESC')->where('status', 'Active')->get(['department_id', 'designation_id', 'name', 'image', 'alt']);
        return view('frontant_with_extra_path.pages.aboutus.overview', get_defined_vars());
    }

    public function partnership()
    {
        return view('frontant_with_extra_path.pages.aboutus.partnership', get_defined_vars());
    }

    public function technologies()
    {
        return view('frontant_with_extra_path.pages.aboutus.technologies', get_defined_vars());
    }


    public function contact()
    {
        $company = Company::where('status', 'Active')->orderBy('id', 'DESC')->first();
        $meta = $company->contact_meta;
        return view('frontant_with_extra_path.pages.contact', get_defined_vars());
    }

    public function privacy()
    {
        $company = Company::where('status', 'Active')->orderBy('id', 'DESC')->first();
        $meta = "<title>Privacy Policy | Software Company in Bangladesh</title>";
        return view('frontant_with_extra_path.pages.privacy', get_defined_vars());
    }
    public function blog()
    {
        $company = Company::where('status', 'Active')->orderBy('id', 'DESC')->first();
        return view('frontant_with_extra_path.pages.blog', get_defined_vars());
    }


    // Mail sent function 
    public function sendMail(Request $request)
    {
        $details = [
            'name' => '$request->name',
            'email' => '$request->email',
            'subject' => '$request->subject',
            'msg' => '$request->message',
        ];

        Mail::to('support@itwaybd.com')->send(new ContactUs($details));
        return $request->session()->flash('sendmail', 'Mail Send successfully');
    }
}
