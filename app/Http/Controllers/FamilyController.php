<?php

namespace App\Http\Controllers;

use Hash;
use App\Student;
use Illuminate\Http\Request;

class FamilyController extends Controller{
    public function showRankPage(Request $request, $rank){

    }

    public function getStudentData(Request $request, $id){
        $data = Student::where('_id', $id)->firstOrFail();
        unset($data['password']);

        return response()->json($data, 200);
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
            'facebook' => 'required_without_all:phone,email,twitter,line,instagram',
            'email' => 'required_without_all:phone,facebook,twitter,line,instagram',
            'twitter' => 'required_without_all:phone,email,facebook,line,instagram',
            'line' => 'required_without_all:phone,email,facebook,twitter,instagram',
            'instagram' => 'required_without_all:phone,email,facebook,twitter,line',
            'phone' => 'required_without_all:email,facebook,twitter,line,instagram',
            'message' => 'nullable',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $id = Student::insertGetId([
            'title' => (string) $request->input('title'),
            'fname' => (string) $request->input('fname'),
            'lname' => (string) $request->input('lname'),
            'nickname' => (string) $request->input('nickname'),
            'generation' => (int) $request->input('generation'),
            'room' => (int) $request->input('room'),
            'rank' => (int) $request->input('rank'),
            'contact' => [
                'facebook' => (string) $request->input('facebook'),
                'email' => (string) $request->input('email'),
                'twitter' => (string) $request->input('twitter'),
                'line' => (string) $request->input('line'),
                'instagram' => (string) $request->input('instagram'),
                'phone' => (string) $request->input('phone'),
            ],
            'message' => (string) $request->input('message'),
            'password' => (string) Hash::make($request->input('password')),
        ]);

        return response()->json([
            'msg' => 'Resource created.',
            'id' => $id,
        ], 201);
    }

    public function updateStudent(Request $request, $id){

    }
}
