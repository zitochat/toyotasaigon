<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use DB;

class PagesController extends Controller
{
    //chinh-sach.html
    public function getRuleIndex()
    {
        SEO::setTitle('Chính sách và Điều khoản');

        return view('frontend.pages.rule');
    }

    //lien-he.html
    public function getContactIndex()
    {
        SEO::setTitle('Liên hệ');

        $province_list= DB::table('province')->get();

        return view('frontend.pages.contact', compact(['province_list']));
    }

    //lien-he.html:post
    public function postContact(Request $request)
    {
        $subject= $request->input('subject');
        $name= $request->input('name');
        $email= $request->input('email');
        $phone= $request->input('phone');
        $address= $request->input('diachi');
        $region= $request->input('region');
        $content= $request->input('content');

        $data= array(
            'type'=> $subject,
            'name'=> $name,
            'email'=> $email,
            'provinceid'=> $region,
            'phone'=> $phone,
            'address'=> $address,
            'content'=> $content,
            'created_at'=> date('Y/m/d H:i:s')
        );

        DB::table('contact')->insert($data);

    }

    //lien-he-thanh-cong.html
    public function getContactSuccessIndex()
    {
        SEO::setTitle('Thông báo gửi liên hệ thành công');

        return view('frontend.pages.contact-success');
    }

    //tuyen-dung.html
    public function getHireIndex()
    {
        SEO::setTitle('Tuyển dụng');

        return view('frontend.pages.hire');
    }

    //tin-tuc/hoat-dong-tesc
    public function getTescIndex()
    {
        $tesc_list= DB::table('posts')->where('parent', 'hoat-dong-tesc')->paginate(15);
        return view('frontend.pages.tesc', compact(['tesc_list']));
    }

    //tin-tuc/thi-truong-oto
    public function getOtoIndex()
    {
        $oto_list= DB::table('posts')->where('parent', 'thi-truong-oto')->paginate(15);
        return view('frontend.pages.oto', compact(['oto_list']));
    }

    //tin-tuc.html
    public function getNewsIndex()
    {
        SEO::setTitle('Tin tức');

        $tesc_list= DB::table('posts')->where('parent', 'hoat-dong-tesc')->paginate(15);
        $oto_list= DB::table('posts')->where('parent', 'thi-truong-oto')->paginate(15);

        return view('frontend.pages.news', compact(['tesc_list', 'oto_list']));
    }

    //dich-vu.html
    public function getServicesIndex()
    {
        SEO::setTitle('Dịch vụ');

        $service_list= DB::table('posts')->where('parent', 'dich-vu')->paginate(15);

        return view('frontend.pages.services', compact(['service_list']));
    }

    //gioi-thieu.html
    public function getAboutIndex()
    {
        SEO::setTitle('Giới thiệu');

        $general_list= DB::table('posts')->where('parent', 'gioi-thieu-chung')->paginate(15);
        $sales_list= DB::table('posts')->where('parent', 'bo-phan-ban-hang')->paginate(15);
        $service_list= DB::table('posts')->where('parent', 'bo-phan-dich-vu')->paginate(15);

        return view('frontend.pages.about', compact(['general_list', 'sales_list', 'service_list']));
    }

    //{category}/{slug}-{id}.html
    public function getCatDetailsIndex($category, $slug, $id)
    {
        $post= DB::table('posts')->where('slug', $slug)->first();

        $parent= DB::table('categories')->where('slug', $post->parent)->first();
        return view('frontend.pages.catdetails', compact(['post', 'parent', 'category']));
    }

    //dat-lich-bao-duong.html
    public function getScheduleMaintenanceIndex()
    {
        SEO::setTitle('Đặt lịch bảo dưỡng');

        return view('frontend.pages.schedule-maintenance');
    }

    //dat-lich-bao-duong.html:post
    public function postScheduleMaintenanceIndex()
    {

        return view('frontend.pages.schedule-maintenance_post');
    }

    //dat-lich-bao-duong-save.html:save
    public function saveScheduleMaintenanceIndex(Request $request)
    {

        $website= $request->input('website');
        $vehicles_datlich= $request->input('vehicles_datlich');
        $id_tinhdatlich= $request->input('id_tinhdatlich');
        $name_datlich= $request->input('name_datlich');
        $idhuyen_datlich= $request->input('idhuyen_datlich');
        $email_datlich= $request->input('email_datlich');
        $phone_datlich= $request->input('phone_datlich');
        $bienso_datlich= $request->input('bienso_datlich');
        $cn_datlich= $request->input('cn_datlich');
        $require_baoduong= $request->input('require_baoduong');
        $xekhac= $request->input('xekhac');
        $km_datlich= $request->input('km_datlich');
        $months_datlich= $request->input('months_datlich');
        $frmbaoduong= $request->input('frmbaoduong');
        $ngaydatlich= $request->input('ngaydatlich');
        $description= $request->input('description');

        $data= array([
            'website'=> $website,
            'vehicles_datlich'=> $vehicles_datlich,
            'id_tinhdatlich'=> $id_tinhdatlich,
            'name_datlich'=> $name_datlich,
            'idhuyen_datlich'=> $idhuyen_datlich,
            'email_datlich'=> $email_datlich,
            'phone_datlich'=> $phone_datlich,
            'bienso_datlich'=> $bienso_datlich,
            'cn_datlich'=> $cn_datlich,
            'require_baoduong'=> $require_baoduong,
            'xekhac'=> $xekhac,
            'km_datlich'=> $km_datlich,
            'months_datlich'=> $months_datlich,
            'frmbaoduong'=> $frmbaoduong,
            'ngaydatlich'=> $ngaydatlich,
            'description'=> $description,
            'created_at'=> date('Y/m/d H:i:s')
        ]);

        try {
            DB::table('schedule')->insert($data);
        } catch (\Illuminate\Database\QueryException $e) {
        } catch (\Exception $e) {
        }
        

        return view('frontend.pages.schedule_ok');
    }


    //lai-thu.html
    public function getDrivingIndex()
    {

        SEO::setTitle('Đăng ký lái thử');

        return view('frontend.pages.driving');
    }

    //lai-thu.html:post
    public function postDrivingIndex()
    {

        return view('frontend.pages.driving_post');
    }

    //lai-thu-save.html:save
    public function saveDrivingIndex(Request $request)
    {

        $website= $request->input('website');
        $vehicles_datlich= $request->input('vehicles_datlich');
        $id_tinhdatlich= $request->input('id_tinhdatlich');
        $name_datlich= $request->input('name_datlich');
        $idhuyen_datlich= $request->input('idhuyen_datlich');
        $email_datlich= $request->input('email_datlich');
        $phone_datlich= $request->input('phone_datlich');
        $bienso_datlich= $request->input('bienso_datlich');
        $cn_datlich= $request->input('cn_datlich');
        $require_baoduong= $request->input('require_baoduong');
        $xekhac= $request->input('xekhac');
        $km_datlich= $request->input('km_datlich');
        $months_datlich= $request->input('months_datlich');
        $frmbaoduong= $request->input('frmbaoduong');
        $ngaydatlich= $request->input('ngaydatlich');
        $description= $request->input('description');

        $data= array([
            'website'=> $website,
            'vehicles_datlich'=> $vehicles_datlich,
            'id_tinhdatlich'=> $id_tinhdatlich,
            'name_datlich'=> $name_datlich,
            'idhuyen_datlich'=> $idhuyen_datlich,
            'email_datlich'=> $email_datlich,
            'phone_datlich'=> $phone_datlich,
            'months_datlich'=> $months_datlich,
            'frmbaoduong'=> $frmbaoduong,
            'ngaydatlich'=> $ngaydatlich,
            'description'=> $description,
            'created_at'=> date('Y/m/d H:i:s')
        ]);
        
        try {
            DB::table('driving')->insert($data);
        } catch (\Illuminate\Database\QueryException $e) {
        } catch (\Exception $e) {
        }
        

        return view('frontend.pages.driving_ok');
    }

    //admin/ajax/process_tinhquan.php:post
    public function postProvince(Request $request)
    {
        $cmd= $request->input('cmd');
        $id_tinh= $request->input('id_tinh');

        if($request->ajax()){
            if($cmd== 'load_huyen') {
                $districts= DB::table('district')->where('provinceid', $id_tinh)->get();
                return view('frontend.pages.district_post', compact(['districts']));
            }
            if($cmd== 'load_tinh') {
                $provinces= DB::table('province')->get();
                return view('frontend.pages.province_post', compact(['provinces']));
            }
        }
    }

    //san-pham/{slug}-{id}.html
    public function getProductDetailsIndex($slug, $id)
    {
        $product= DB::table('products')->where('slug', $slug)->first();
        

        if(isset($product)) {
            $parent= DB::table('vehicles')->where('slug', $product->parent)->first();
            $colors= DB::table('product_color')->where('product', $product->slug)->get();
            $outbuilding= DB::table('product_outbuilding')->where('product', $product->slug)->get();
            $furniture= DB::table('product_furniture')->where('product', $product->slug)->get();
            $safe= DB::table('product_safe')->where('product', $product->slug)->get();
            $operate= DB::table('product_operate')->where('product', $product->slug)->get();
            $accessories= DB::table('product_accessories')->where('product', $product->slug)->get();
            $specifications= DB::table('product_specifications')->where('product', $product->slug)->get();

            return view('frontend.pages.product_details', compact([
                'product',
                'parent',
                'slug',
                'id',
                'colors',
                'outbuilding',
                'furniture',
                'safe',
                'operate',
                'accessories',
                'specifications'
                ]));
        }  
    }

    //san-pham.html
    public function getProductsIndex()
    {
        SEO::setTitle('Sản phẩm');

        $products= DB::table('products')->paginate(10);

        return view('frontend.pages.products', compact(['products']));
    }

    //du-toan-chi-phi.html
    public function getPriceIndex()
    {
        SEO::setTitle('Dự toán chi phí');

        return view('frontend.pages.price');
    }

    //ajax/product_slider.php
    public function postProductSlider(Request $request)
    {
        $id= $request->input('id');
        if(isset($id)) {
            $color= DB::table('product_color')->where('id', $id)->first();

            return view('frontend.pages.product_slider', compact(['color']));
        }
        
    }
}