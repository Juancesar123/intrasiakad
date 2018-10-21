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
        return view('datakursus::index');
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
          $send = $client->request('PUT',env('API_URL').'/datakursus/1',
            [
            'headers' => [
                'Authorization' => $headers
            ],
            'form_params' => [
                'namakursus' => 'DAT',
            ]
          ]);
           $data = $send->getBody()->getContents();
           dd($data);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
