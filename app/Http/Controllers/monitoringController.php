<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\sensor;

class monitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = sensor::create([
        //     'sensor1' => '10.2',
        //     'sensor2' => '11',
        //     'sensor3' => '12',
        //     'sensor4' => '13',
        // ]);
        $data = sensor::latest()->first();

        return view('Monitoring/dashboard',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataSensor1 = $request->sensor1;
        $dataSensor2 = $request->sensor2;
        $dataSensor3 = $request->sensor3;
        $dataSensor4 = $request->sensor4;

        $data = sensor::create([
            'sensor1' => $dataSensor1,
            'sensor2' => $dataSensor2,
            'sensor3' => $dataSensor3,
            'sensor4' => $dataSensor4,
        ]);

        // return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ambil() {
        $data = sensor::latest()->first();

        return response()->json($data);
    }
}
