<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Solution;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return view('frontend.home');

        return view('frontend.home')->with([
            // 'problems'  => Problem::whereHas('media')->orderBy('name', 'ASC')->limit(6)->get()
            // 'problems'  => Problem::orderBy('id', 'ASC')->where('visibility','public')->limit(6)->get()
            'problems'  => Problem::where('visibility','public')->limit(6)->latest()->get()
        ]);
    }

    public function allProblems()
    {
        return view('frontend.blog')->with([
            'allProblems' => Problem::orderBy('name', 'ASC')->where('visibility','public')->get()
        ]);
    }

    public function showProblem($id)
    {
        $problemInfo = Problem::find($id);

        $solutions = Solution::where('problem_id',$problemInfo->id)->get();
        // dd($solutions);
        return view('frontend.single')->with([
            'problemInfo' =>$problemInfo,
            'solutions' => $solutions
        ]);
    }


}
