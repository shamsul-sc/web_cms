<?php

namespace App\Http\Controllers;

use App\Models\EcPosition;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class EcPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['getEcPosition'] = EcPosition::where('status', '=', 'Show' )->orderBy('id', 'desc')->paginate(10);
        return view('dashboard.ec-position.index',$data);
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ec-position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'position_name' => 'required',
        ]);

        if($validator->fails()){
            $error = $validator->errors()->all();
            Alert::error('Validator Error!', implode('<br>', $error));
            return redirect()->back()->withInput();
        }

        $ecPosition_model = new EcPosition();

        $ecPosition_model->position_name = $request->position_name;
        $ecPosition_model->status        = $request->status;
        $ecPosition_model->save();

        Alert::success(title: 'Excursion Position Created Successfully!');
        return redirect()->route('ec-position.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EcPosition $ecPosition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['getSingleRecord'] = EcPosition::find($id);
        return view('dashboard.ec-position.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'position_name' => 'required',
        ]);

        if($validator->fails()){
            $error = $validator->errors()->all();
            Alert::error('Validator Error!', implode('<br>', $error));
            return redirect()->back()->withInput();
        }

        $ecPosition_model = EcPosition::find($id);

        if(!$ecPosition_model){
            return redirect()->back()->with('error', 'Excursion Position not found!');
        }

        $ecPosition_model->position_name = $request->position_name;
        $ecPosition_model->status        = $request->status;
        $ecPosition_model->save();

        Alert::success(title: 'Excursion Position Updated Successfully!');
        return redirect()->route('ec-position.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ecPosition_model = EcPosition::find($id);
        if (!$ecPosition_model) {
            return redirect()->back()->with('error', 'Excursion Position not found!');
        }
        $ecPosition_model->status = 'Hide';
        $ecPosition_model->save();

        Alert::success('Excursion Position successfully deleted.');
        return redirect()->back();
    }
}