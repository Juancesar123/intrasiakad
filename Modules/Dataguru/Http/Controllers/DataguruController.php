<?php

namespace Modules\Dataguru\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class DataguruController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
      $token = session()->get('token');
      $client = new Client();
      $token_decode = json_decode($token)->accessToken;
      $get_data=$client->request('GET',env('API_URL').'/datapengajar/', [
             'headers' => [
                      'Authorization'     => $token_decode
                    ]
          ]);
      $datapengajar = json_decode($get_data->getBody()->getContents());
    return view('dataguru::index',compact('dataguru'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('dataguru::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
      $token = session()->get('token');
      $client = new Client();
      $token_decode = json_decode($token)->accessToken;
      $create_dataguru = $client->request('POST',env('API_URL').'/datapengajar/', [
             'headers' => [
                      'Authorization'     => $token_decode
                    ],
              'form_params' => [
                'namapengajar' => $request->namapengajar,
                'alamat'       => $request->alamat,
                'email'        => $request->email,
                'nomortelepon' => $request->nomortelepon,
                'gambar'       => $request->gambar,
              ]
          ]);
          return redirect()->back();
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
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
