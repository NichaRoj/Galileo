<?php

namespace App\Http\Controllers;

use Hash;
use App\Student;
use Illuminate\Http\Request;

class FamilyController extends Controller{
    public function showRankPage(Request $request, $rank){

    }

    public function getStudentData(Request $request, $id){

    }

    public function createStudent(Request $request){
        $this->validate($request, [
            'title' => 'required|string',
            'fname' => 'required|string',
            'lname' => 'required|string',
            'nickname' => 'nullable|string',
            'generation' => 'required|numeric|max:80',
            'room' => 'numeric',
            'rank' => 'required|numeric',
            'phone' => 'required_without_all:email,facebook,twitter,line,instagram',
            'email' => 'required_without_all:phone,facebook,twitter,line,instagram',
            'facebook' => 'required_without_all:phone,email,twitter,line,instagram',
            'twitter' => 'required_without_all:phone,email,facebook,line,instagram',
            'line' => 'required_without_all:phone,email,facebook,twitter,instagram',
            'instagram' => 'required_without_all:phone,email,facebook,twitter,line',
            'message' => 'nullable',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $id = Student::insertGetId([
            'title' => $request->input('title'),
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'nickname' => $request->input('nickname'),
            'generation' => $request->input('generation'),
            'room' => $request->input('room'),
            'rank' => $request->input('rank'),
            'contact' => [
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'facebook' => $request->input('facebook'),
                'twitter' => $request->input('twitter'),
                'line' => $request->input('line'),
                'instagram' => $request->input('instagram'),
            ],
            'message' => $request->input('message'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response()->json([
            'msg' => 'Resource created.',
            'id' => $id,
        ], 201);
    }

    public function updateStudent(Request $request, $id){

    }
}
