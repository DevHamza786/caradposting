<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AdPost;
use App\Models\PostType;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $users = AdPost::limit(6)->get();
        return view('home.index', compact('users'));
    }


    public function cat()
    {
        $adpost = AdPost::limit(6)->get();
        return view('home.categorypage', compact('adpost'));
    }

    public function alladds($type)
    {
        if ($type != 'cars' && $type != 'bike'){
            abort(404);
        }else{
            $typeID = PostType::select('id')->where('name',$type)->first();
            $users = AdPost::where('type_id', $typeID->id)->where('status', 'approved')->get();
            return view('home.categorypage', compact('users'));
        }
    }

    public function show($id)
    {
        $post = AdPost::find($id);
        return view('home.showpage', compact('post'));
    }
}
