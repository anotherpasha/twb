<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use Validator;
use Response;
use Auth;
use Lang;

class AjaxController extends Controller
{
    public function login(Request $request)
    {
        $this->validateUser($request->all());

        if (Auth::attempt($request->except('_token'))) {
            return Response::json(
                array('status' => 'success')
            );
        } else {
            $error = ['error' => $this->getFailedLoginMessage()];
            return Response::json(
                array('status' => 'failed', 'errors' => $error)
            );
        }

    }

    public function postImage(Request $request)
    {
        $file = $request->file('file');
        $destinationPath = public_path().'/uploads';
        $filename = str_random(12);
        //$filename = $file->getClientOriginalName();
        $extension =$file->getClientOriginalExtension();
        $upload_success = $file->move($destinationPath, $filename.'.'.$extension);

        if( $upload_success ) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }

    private function validateUser(array $inputs)
    {
        $validator = Validator::make($inputs, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();

            return Response::json(
                array('status' => 'failed', 'errors' => $errors)
            );
        }
    }

    private function getFailedLoginMessage()
    {
        return Lang::has('auth.failed')
            ? Lang::get('auth.failed')
            : 'These credentials do not match our records.';
    }
}
