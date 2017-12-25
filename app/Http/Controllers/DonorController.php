<?php

namespace App\Http\Controllers;

use App\Donor;
use App\User;
use Illuminate\Http\Request;
use Validator;

class DonorController extends Controller
{
    public function index()
    {
        return Donor::all();
    }

    public function store(Request $request)
    {
        return Donor::create($request->all());
    }

    public function show($id)
    {
        return Donor::find($id);
    }

    public function edit($id)
    {
        $donor = Donor::find($id);
        return $donor;
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'blood_group' => 'required',
            'mobile_number' => 'required'
        ]);

        $donor = Donor::find($id);
        $donor->first_name = $request->input('first_name');
        $donor->last_name = $request->input('last_name');
        $donor->blood_group = $request->input('blood_group');
        $donor->city = $request->input('city');
        $donor->mobile_number = $request->input('mobile_number');
        $donor->save();


        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->blood_group = $request->input('blood_group');
        $user->city = $request->input('city');
        $user->mobile_number = $request->input('mobile_number');

        $user->save();

        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        return "Destroy Method of DONOR Model.";
    }
}
