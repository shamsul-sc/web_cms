<?php

namespace App\Http\Controllers;

use App\Models\EcMember;
use App\Models\EcPosition;
use App\Models\EcSerial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class EcMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['getMember'] = EcMember::where('status', '=', 'Show')->orderBy('id', 'desc')->paginate(10);
        return view('dashboard.ec-member.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['getEcPosition'] = EcPosition::where('status', '=', 'Show' )->orderBy('id', 'desc')->paginate(10);
        $data['getEcSerial'] = EcSerial::orderBy('id','desc')->paginate(10);
        $data['getUser'] = User::getUser();
        return view('dashboard.ec-member.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'ec_position_id' => 'required',
        ]);

        if($validator->fails()){
            $error = $validator->errors()->all();
            Alert::error('Validator Error!', implode('<br>', $error));
            return redirect()->back()->withInput();
        }

        $ecMember_model = new EcMember();

        $ecMember_model->user_id = $request->user_id;
        $ecMember_model->ec_position_id = $request->ec_position_id;
        $ecMember_model->ec_id = $request->ec_id;
        $ecMember_model->serial = $request->serial;
        $ecMember_model->status = $request->status;
        $ecMember_model->save();

        Alert::success(title: 'Excursion Committee Member Created Successfully!');
        return redirect()->route('ec-member.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EcMember $ecMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['getSingleRecord'] = EcMember::find($id);
        $data['getEcPosition'] = EcPosition::where('status', '=', 'Show' )->orderBy('id', 'desc')->paginate(10);
        $data['getEcSerial'] = EcSerial::orderBy('id','desc')->paginate(10);
        $data['getUser'] = User::getUser();
        return view('dashboard.ec-member.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'ec_position_id' => 'required',
        ]);

        if($validator->fails()){
            $error = $validator->errors()->all();
            Alert::error('Validator Error!', implode('<br>', $error));
            return redirect()->back()->withInput();
        }

        $ecMember_model =  EcMember::find($id);

        if(!$ecMember_model){
            return redirect()->back()->with('error', 'Excursion Committee Member not found!');
        }

        $ecMember_model->user_id = $request->user_id;
        $ecMember_model->ec_position_id = $request->ec_position_id;
        $ecMember_model->ec_id = $request->ec_id;
        $ecMember_model->serial = $request->serial;
        $ecMember_model->status = $request->status;
        $ecMember_model->save();

        Alert::success(title: 'Excursion Committee Member Updated Successfully!');
        return redirect()->route('ec-member.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ecMember_model = EcMember::find($id);
        if (!$ecMember_model) {
            return redirect()->back()->with('error', 'Excursion Committee Member not found!');
        }
        $ecMember_model->status = 'Hide';
        $ecMember_model->save();

        Alert::success('Excursion Committee Member successfully deleted.');
        return redirect()->back();
    }
}
