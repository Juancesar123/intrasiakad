<?php

namespace Modules\Datakursus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class DatakursusController extends Controller
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
          $get_data=$client->request('GET','http://localhost:3030/datakursus', [
                 'headers' => [
                          'Authorization'     => $token_decode
                        ]
              ]);
          $datakursus = json_decode($get_data->getBody()->getContents());
        return view('datakursus::index',compact('datakursus'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('datakursus::create');
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
        $kam = json_decode($token);
        $headers = ['Authorization' => $kam->accessToken];
        $send = $client->request('POST',env('API_URL').'/datakursus',
          [
          'headers' => [
              'Authorization' => $headers
          ],
          'form_params' => [
              'namakursus' => $request->namaKursus,
          ]
        ]);
        return redirect()->route('indexDatakursus');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('datakursus::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('datakursus::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {   
          $token = session()->get('token');
          $client = new Client();
          $kam = json_decode($token);
          $headers = ['Authorization' => $kam->accessToken];
          $send = $client->request('PUT',env('API_URL').'/datakursus/'.$request->idKursus,
            [
            'headers' => [
                'Authorization' => $headers
            ],
            'form_params' => [
                'namakursus' => $request->namaKursus,
            ]
          ]);
           return view('datakursus::edit');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $get_token  = session()->get('token');
        $client     = new Client();
        $token      = json_decode($get_token);
        $headers    = $token->accessToken;
        $client->request('DELETE', 'localhost:3030/datakursus/'.$id, [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);
    }
}
