<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show()
    {
        return view('information');
    }

    public function test()
    {
        $q = Question::all();
        return view('test',compact('q'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'Grade' => 'required',
            'Age' => 'required|int',
            'gender' => 'required',
            'Math' => 'required|int',
            'Science' => 'required|int',
            'History' => 'required|int',
            'Beliefs' => 'required',
            'Job' => 'required',
        ]);


        Information::query()->create($request->all());
//        alert()->success('عملیات مورد نظر با موفقیت انجام شد','ارسال شد');
        return back();
    }

    public function testCreate(Request $request)
    {
        $m=($request->all());
        $cores = (array_sum($m));
        DB::table('points')->insert([
            'cores' => $cores,
        ]);

        return view('welcome',compact('cores'));
    }

}
