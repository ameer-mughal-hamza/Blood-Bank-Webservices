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
        return "Update Method of DONOR Model.";
    }

    public function destroy($id)
    {
        return "Destroy Method of DONOR Model.";
    }
}
