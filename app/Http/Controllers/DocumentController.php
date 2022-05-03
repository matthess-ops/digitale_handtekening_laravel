<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;


class DocumentController extends Controller
{

    // return all documents associated to an user
    //
    // only admin
    public function index()
    {
        error_log("documentController@index called");
        error_log(auth('sanctum')->user()->id);
        $user = User::find(auth('sanctum')->user()->id);
        $documents = $user->documents;
        return $documents;
    }

    public function downloadtxt(Request $request)
    {
        error_log("download route is called");

       $path = public_path() . '/test.txt';
        // error_log("this is the path ".$path);
        // $headers = ['Content-Type: application/pdf'];
        // $newName = 'komtuitlaravelt
        error_log("sending txt responsdde ");

        return response()->download($path);
      }


      public function downloadpdf($id)
      {

          error_log("download pdf route is called");

          $file = storage_path() . "/test_".$id.".pdf";
        error_log($file);
          $headers = [
              'Content-Type' => 'application/pdf',
          ];
          return response()->download($file, 'test.pdf', $headers);
        }


    public function testresponse(){

        return response()->with("asdfsda","ddd");
    }

    // return user data
    // user ClientShowResource
    // for all users
    public function show($id)
    {
    }
    // validate and store a new user
    // return response 200 succesfull else return validation errors
    public function store(Request $request)
    {
    }

    // update user password
    // return response 200 succesfull else return validation errors
    public function update(Request $request, $id)
    {
    }



    // only an admin can destroy client and associated document data
    // check if auth is is_admin
    // remove documents
    //seend response 200 or error
    public function destroy($id)
    {
    }

    // search firstname and secondname column for matches
    // return neccessary user data, use ClientIndexResource

    public function search($string)
    {
    }
}
