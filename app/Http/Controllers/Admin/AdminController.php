<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Posts;

class AdminController extends Controller
{
    //cpanel
    public function getAdminIndex()
    {
        return view('backend.main.index');
    }

    //cpanel/contact
    public function getContactIndex()
    {
        $contacts= DB::table('contact')->get();
        
        return view('backend.pages.contact', compact(['contacts']));
    }

    //cpanel/contact/del/{id}
    public function getContactDel($id)
    {
        if(DB::table('contact')->where('id', $id)->first()) {
            DB::table('contact')->where('id', $id)->delete();
            return \Redirect::to('cpanel_admin/contact');
        }
    }

    //cpanel/posts
    public function getPostsIndex()
    {
        $posts= DB::table('posts')->get();

        return view('backend.pages.posts', compact(['posts']));
    }


    //cpanel/posts/del/{id}
    public function getPostsDel($id)
    {
        if(DB::table('posts')->where('id', $id)->first()) {
            DB::table('posts')->where('id', $id)->delete();
            return \Redirect::to('cpanel_admin/posts');
        }
    }

    //cpanel/posts/edit/{id}
    public function getPostsEdit($id)
    {
        if($post= DB::table('posts')->where('id', $id)->first()) {
            $action= 'edit';

            return view('backend.pages.posts_edit', compact(['id', 'post', 'action']));
        } else {
            return \Redirect::to('cpanel_admin/posts');
        }
    }

    //cpanel/posts/post
    public function savePosts(Request $request)
    {
        $action= $request->input('action');
        $id= $request->input('post_id');

        $data = $request->only([
            'status',
            'slug',
            'name',
            'thumb',
            'content',
            'parent'
        ]);
        
        if($action== 'edit') {
            DB::table('posts')->where('id', $id)->update($data);
            return redirect()->back();
        } else {
            $id= DB::table('posts')->insertGetId($data);
            return \Redirect::to('cpanel_admin/posts');
        }
        
    }

    //cpanel/posts/add
    public function addPosts()
    {
        $post= new Posts();
        $post->status= 'publish';
        $post->parent= 'tin-tuc';
        $action= 'add';
        return view('backend.pages.posts_edit', compact(['id', 'post', 'action']));
    }

    //cpanel/categories
    public function getCategoriesIndex()
    {
        $categories= DB::table('categories')->get();

        return view('backend.pages.categories', compact(['categories']));
    }

    //cpanel/branch
    public function getBranchIndex()
    {
        $branch= DB::table('branch')->get();

        return view('backend.pages.branch', compact(['branch']));
    }

    //cpanel/users
    public function getUsersIndex()
    {
        $users= DB::table('users')->get();

        return view('backend.pages.users', compact(['users']));
    }

    //cpanel/users/del/{id}
    public function getUsersDel($id)
    {
        if(DB::table('users')->where('id', $id)->first()) {
            DB::table('users')->where('id', $id)->delete();
            return \Redirect::to('cpanel_admin/users');
        }
    }

    //cpanel/vehicles
    public function getVehiclesIndex()
    {
        $vehicles= DB::table('vehicles')->get();

        return view('backend.pages.vehicles', compact(['vehicles']));
    }

    //cpanel/vehicles/del/{id}
    public function getVehiclesDel($id)
    {
        if(DB::table('vehicles')->where('id', $id)->first()) {
            DB::table('vehicles')->where('id', $id)->delete();
            return \Redirect::to('cpanel_admin/vehicles');
        }
    }


    //cpanel/sliders
    public function getSlidersIndex()
    {
        $sliders= DB::table('sliders')->get();

        return view('backend.pages.sliders', compact(['sliders']));
    }

    //cpanel/sliders/del/{id}
    public function getSlidersDel($id)
    {
        if(DB::table('sliders')->where('id', $id)->first()) {
            DB::table('sliders')->where('id', $id)->delete();
            return \Redirect::to('cpanel_admin/sliders');
        }
    }


    //cpanel/driving
    public function getDrivingIndex()
    {
        $driving= DB::table('driving')->get();

        return view('backend.pages.driving', compact(['driving']));
    }

    //cpanel/driving/del/{id}
    public function getDrivingDel($id)
    {
        if(DB::table('driving')->where('id', $id)->first()) {
            DB::table('driving')->where('id', $id)->delete();
            return \Redirect::to('cpanel_admin/driving');
        }
    }

    //cpanel/schedule
    public function getScheduleIndex()
    {
        $schedule= DB::table('schedule')->get();

        return view('backend.pages.schedule', compact(['schedule']));
    }

    //cpanel/schedule/del/{id}
    public function getScheduleDel($id)
    {
        if(DB::table('schedule')->where('id', $id)->first()) {
            DB::table('schedule')->where('id', $id)->delete();
            return \Redirect::to('cpanel_admin/schedule');
        }
    }

    //cpanel/products
    public function getProductsIndex()
    {
        $products= DB::table('products')->get();

        return view('backend.pages.products', compact(['products']));
    }

    //cpanel/province
    public function getProvinceIndex()
    {
        $province= DB::table('province')->get();

        return view('backend.pages.province', compact(['province']));
    }

    //cpanel/district
    public function getDistrictIndex()
    {
        $district= DB::table('district')->get();

        return view('backend.pages.district', compact(['district']));
    }

    //cpanel/ward
    public function getWardIndex()
    {
        $ward= DB::table('ward')->get();

        return view('backend.pages.ward', compact(['ward']));
    }

}
