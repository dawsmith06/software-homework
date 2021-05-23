<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployesController extends Controller
{
    function index(){
        return view("welcome",[
            "employes" => Employe::all()
        ]);
    }

    function create(){
        return view("create");
    }

    function show($id){
        return view("show",[
            "employe" => Employe::find($id)
        ]);
    }

    function save(Request $request){
        $employe = new Employe();
        $employe->name = $request->name;
        $employe->last_name = $request->last_name;
        $employe->salary = $request->salary;
        $employe->civil_status = $request->civil_status;
        $employe->save();
        return redirect('/');
    }

    function update($id,Request $request){
        $employe = Employe::find($id);
        $employe->name = $request->name;
        $employe->last_name = $request->last_name;
        $employe->salary = $request->salary;
        $employe->civil_status = $request->civil_status;
        $employe->update();
        return redirect('/');
    }

    function destroy($id){
        $employe = Employe::find($id);
        $employe->delete();
        return redirect('/');
    }
}
