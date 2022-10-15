<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function create()
    {
        return view('welcome');
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
}
