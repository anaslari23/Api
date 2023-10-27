<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\QualificationModel;
use App\Models\CategoryModel;



class UserController extends Controller
{
    //
    public function getUser(Request $request)
    {
        // dd("geood");
        $user_id = $request->user_id;
        if(!empty($user_id))
        {
            $oldData = UserModel::find($user_id);

            if(!empty($oldData))
            {
                $data['status'] = true;
                $data['data'] = $oldData->toarray();
                return response()->json($data);
            }else {
                # code...
                $resp['status'] = false;
                $resp['message'] = 'User data not found';
                return response()->json($resp);
            }
        }else {
            # code...
            $resp['status'] = false;
            $resp['message'] = 'Please provide email';
            return response()->json($resp);
        }

    }

    public function getQaulification(Request $request)
    {
        // dd ("jkldfg");
        $id = $request->id;


        if(!empty($id))
        {
            $oldData = QualificationModel::with('getCategories')->where('id',$id)->first();
        // dd ($oldData);

            if(!empty($oldData))
            {
                $data['status'] = true;
                $data['data'] = $oldData->toarray();
                return response()->json($data);
            }else {
                # code...
                $resp['status'] = false;
                $resp['message'] = 'User data not found';
                return response()->json($resp);
            }
            
        }else {
            # code...
            $resp['status'] = false;
            $resp['message'] = 'Please provide corrent user id';
            return response()->json($resp);
        }
    }
}
