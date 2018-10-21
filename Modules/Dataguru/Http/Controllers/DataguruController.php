<?php

namespace Modules\Dataguru\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;


class DataguruController extends Controller
{
    /**
     * Display a listing of the resource.
    //  * @return Response
     */
    public function index()
    {
        return view('dataguru::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
       
        return redirect()->route('Dataguru::index');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('dataguru::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('dataguru::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $sessionToken = session()->get('token');
        $id = $request->id;
        $client = new Client();
        $send = $client->put(env('API_URL').'/datapengajar/'.$id,[
           'headers' => [
                'Authorization' => $sessionToken
            ],

            'form_params' => [
              'namapengajar' => $request->namapengajar,
              'alamat' => $request->alamat,
              'email' => $request->email,
              'nomortelepon' => $request->nomortelepon,
              'gambar' => "",
          ]
      ]);

    return redirect()->route('indexDataguru');
    
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

}
