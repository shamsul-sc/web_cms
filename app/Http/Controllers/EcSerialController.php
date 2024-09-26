<?php

namespace App\Http\Controllers;

use App\Models\EcSerial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class EcSerialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['getEcSerial'] = EcSerial::orderBy('id','desc')->paginate(10);
        return view('dashboard.ec-serial.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ec-serial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'ec_name' => 'required',
        ]);

        if($validator->fails()){
            $error = $validator->errors()->all();
            Alert::error('Validator Error!', implode('<br>', $error));
            return redirect()->back()->withInput();
        }

        $ecSerial_model = new EcSerial();

        $ecSerial_model->ec_name = $request->ec_name;
        $ecSerial_model->start_date = $request->start_date;
        $ecSerial_model->end_date = $request->end_date;
        $ecSerial_model->status = $request->status;
        $ecSerial_model->save();

        Alert::success(title: 'Excursion Serial Created Successfully!');
        return redirect()->route('ec-serial.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(EcSerial $ecSerial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['getSingleRecord'] = EcSerial::find($id);
        return view('dashboard.ec-serial.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'ec_name' => 'required',
        ]);

        if($validator->fails()){
            $error = $validator->errors()->all();
            Alert::error('Validator Error!', implode('<br>', $error));
            return redirect()->back()->withInput();
        }

        $ecSerial_model =  EcSerial::find($id);

        if(!$ecSerial_model){
            return redirect()->back()->with('error', 'Excursion Serial not found!');
        }

        $ecSerial_model->ec_name = $request->ec_name;
        $ecSerial_model->start_date = $request->start_date;
        $ecSerial_model->end_date = $request->end_date;
        $ecSerial_model->status = $request->status;
        $ecSerial_model->save();

        Alert::success(title: 'Excursion Serial Update Successfully!');
        return redirect()->route('ec-serial.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
