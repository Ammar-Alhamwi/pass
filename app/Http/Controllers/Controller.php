<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {

        return view('phon_number');
    }
    public function savePhone(Request $request)
    {
        user::create([
            'phone' => $request->full_number,
            'otp' => $request->otp,

        ]);
        return view('indexForm');
    }
    public function save_inf(Request $request)
    {
        $photo = $request->Passport_picture;
        $newPhoto = time() . $photo->getClientOriginalName();
        $photo->move('uploads', $newPhoto);
        $photor = 'uploads/student/' . $newPhoto;
        $photo1 = $request->id_picture;
        $newPhoto1 = time() . $photo1->getClientOriginalName();
        $photo1->move('uploads', $newPhoto1);
        $photo1 = 'uploads/student/' . $newPhoto1;
        $user = user::latest()->first();
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'brith' => $request->Date_of_birth,
            'Gender' => $request->gender,
            'place_of_brith' => $request->Place_of_birth,
            'country_of_Residency' => $request->Country_of_Residency,
            'Passport' => $request->Passport_No,
            'Issue_date' => $request->Issue_date,
            'Expiry_date' => $request->Expiry_date,
            'place_of_issue' => $request->Place_of_issue,
            'Arrival_date' => $request->Arrival_date,
            'Profession' => $request->Profession,
            'Organization' => $request->Organization,
            'Visa duration' => $request->Visa_duration,
            'Visa status' => $request->Visa_status,
            'Passport_picture' => $photor,
            'id_picture' => $photo1
        ]);
        return view('third');
    }
    public function save_th(Request $request)
    {

        $user = user::latest()->first();
        $user->update([
            'Check-in_date' => $request->Check_in_date,
            'Check-in_date1' => $request->Check_in_date1,
            'Check-out_date' => $request->Check_out_date,
            'Check-out_date1' => $request->Check_out_date1,
            'Rom_type' => $request->Rom_type,
            'Rom_type1' => $request->Rom_type1,


        ]);
        $user1 = user::latest()->first();
        return view('riv', compact('user1'));
    }
    public function conf()
    {

        return view('conf');
    }
}
