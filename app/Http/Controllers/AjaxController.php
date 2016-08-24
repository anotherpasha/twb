<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use Validator;
use Response;
use Auth;
use Lang;
use Image;

class AjaxController extends Controller
{
    public function login(Request $request)
    {
        if( $validator = $this->validateUser($request->all()) ) {
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();

                return Response::json(
                    array('status' => 'failed', 'errors' => $errors)
                );
            }
        }

        if (Auth::attempt($request->except('_token'))) {
            return Response::json(
                array('status' => 'success')
            );
        } else {
            $error = ['error' => $this->getFailedLoginMessage()];
            // Log::warning($error);
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
        $filePath = $filename.'.'.$extension;
        // $upload_success = Image::make($file->getRealPath())->resize(200, null)->save($filePath);
        $upload_success = $file->move($destinationPath, $filePath);
        $imagePath = $destinationPath. '/' . $filePath;
        if( $upload_success ) {
            $image = Image::make($imagePath)->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image->save($imagePath, 90);
            return Response::json($filePath, 200);
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

        return $validator;
    }

    private function getFailedLoginMessage()
    {
        return Lang::has('auth.failed')
            ? Lang::get('auth.failed')
            : 'These credentials do not match our records.';
    }
}
