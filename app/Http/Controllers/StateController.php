<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use Exception;

use App\Exports\FarmersExport;
use Maatwebsite\Excel\Facades\Excel;

use App\User;
use App\Farmer;


class StateController extends Controller
{
    function getNumbersFarmersAndUsers(Request $request){
        if($request->auth->role === "admin"){
            return new JsonResponse([
                'nb_users' => User::count(),
                'nb_farmers' => Farmer::count(),
            ], Response::HTTP_OK);
        } else {
            return new JsonResponse([
                'nb_users' => 0,
                'nb_farmers' => $request->auth->farmers->count(),
            ], Response::HTTP_OK);
        }
    }

    function dowloadFarmers(Request $request){
        if($request->auth->role === "admin"){
            return Excel::download(new FarmersExport, 'farmers.xlsx');
        }else {
            return new JsonResponse([
                'nb_users' => 0,
                'nb_farmers' => $request->auth->farmers->count(),
            ], Response::HTTP_OK);
        }
    }

    function dowloadFarmersNoUser(Request $request){
        return Excel::download(new FarmersExport, 'farmers.xlsx');
    }

}
