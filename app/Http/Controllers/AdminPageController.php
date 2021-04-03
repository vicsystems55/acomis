<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'sales',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];
        // $pageName = 'analytics';
        return view('admin.home')->with($data);
    }

    public function notifications()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.notifications')->with($data);
    }

    // health facilities

    public function health_facilities()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];

        $health_facilities = DB::table('health_facilities')->paginate(15);

        +


        // $pageName = 'cards';
        return view('admin.health_facilities.view',[
            'health_facilities' => $health_facilities
        ])->with($data);
    }

   
    public function health_facility($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];

        $health_facility = DB::table('health_facilities')->where('Facility', $slug)->first();
        // $pageName = 'cards';
        return view('admin.health_facilities.single_view',[
            'health_facility' => $health_facility
        ])->with($data);
    }

    public function health_facilities_add()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];
        // $pageName = 'cards';
// dd(34);
       
        return view('admin.health_facilities.add')->with($data);
    }

    public function health_facilities_edit($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.health_facilites.edit')->with($data);
    }


    // Community Base Organizations

    public function cbos()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.cbo.view')->with($data);
    }

    public function cbo($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.cbo.single_view')->with($data);
    }

    public function cbo_add()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.cbo.add')->with($data);
    }

    public function cbo_edit($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.cbo.edit')->with($data);
    }

    public function cats()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.cat.view')->with($data);
    }

    public function cat($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.cat.single_view')->with($data);
    }

    public function cat_add()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.cat.add')->with($data);
    }

    public function cat_edit($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.cat.edit')->with($data);
    }



    public function wards()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.wards.view')->with($data);
    }

    public function ward($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.wards.single_view')->with($data);
    }

    public function ward_add()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.wards.add')->with($data);
    }

    public function ward_edit($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.wards.edit')->with($data);
    }



    public function spos()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.spo.view')->with($data);
    }

    public function spo($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.spo.single_view')->with($data);
    }

    public function spo_add()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.spo.add')->with($data);
    }

    public function spo_edit()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.spo.edit')->with($data);
    }

    // monitoring and evaluation


    public function mes()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.me.view')->with($data);
    }

    public function me($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.me.single_view')->with($data);
    }

    public function me_add()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.me.add')->with($data);
    }

    public function me_edit()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.departments.me.edit')->with($data);
    }

    public function cbo_reports()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.cbo.all_reports')->with($data);
    }

    public function cob_report($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.cbo.single_report')->with($data);
    }

    public function spo_reports()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.spo.all_reports')->with($data);
    }

    public function spo_report($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.spo.single_report')->with($data);
    }

    public function exit_feedback_reports()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.exit_form.all_reports')->with($data);
    }

    public function exit_feedback_report($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.exit_form.single_report')->with($data);
    }

    public function state_level_feedbacks()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.state_level_advocacy.all_reports')->with($data);
    }

    public function state_level_feedback($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.state_level_advocacy.single_report')->with($data);
    }

    public function remedial_feedbacks()
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.remedial_feedback.all_feedbacks')->with($data);
    }

    public function remedial_feedback($slug)
    {
            
        $data = [
            'category_name' => 'components',
            'page_name' => 'cards',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];
        // $pageName = 'cards';
        return view('admin.reports.remedial_feedback.single_feedback')->with($data);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
