<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\WhyChoose;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {

            $company = Company::first(['logo', 'sale_phone', 'sale_email', 'hr_phone', 'hr_email', 'support_phone', 'support_email', 'phone', 'email', 'linkedin', 'facebook', 'instagram', 'twitter', 'youtube', 'address', 'alt']);
            // $main = Category::with('sub')->where('status', 'Active')->where('parent_id', 0)->orderBy('order_by', 'asc')->get(['name', 'route_name', 'parent_id', 'id', 'slug']);
            $service_menu = Service::where('status', 'Active')
                ->orderBy('order_by', 'asc')
                ->get();
            // dd($service_menu);
            $products = Product::where('status', 'Active')->get([
                'service_id',
                'title',
                'slug',
                'show_in_nav',
                'id'
            ]);
            // dd($service_menu);

            $projectmenu = Project::where('status','Active')->get([
                'name','id'
            ]);
            // dd($projectmenu);
            $whychooseus = WhyChoose::orderBy('serial', 'asc')->get(['title', 'details', 'fa_icon']);

            // dd(get_defined_vars());

            

            view()->share(['service_menu' => $service_menu,'project_menu'=>$projectmenu , 'products_menu' => $products, 'company' => $company, 'whychooseus' => $whychooseus]);
        } catch (\Throwable $th) {
            dd($th->getMessage() . ' File: ' . $th->getFile() . ' Line: ' . $th->getLine());
        }
    }
}
