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
     * @return Response
     */
    public function index()
    {
        $token = session()->get('token');
        $client = new Client();
        $token_decode = json_decode($token)->accessToken;
        $get_data=$client->request('GET','http://localhost:3030/datapengajar', [
               'headers' => [
                        'Authorization'     => $token_decode
                      ]
            ]);
        $dataguru = json_decode($get_data->getBody()->getContents());
        // dd($dataguru);
        return view('dataguru::index', compact('dataguru'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
       
        return view('dataguru::layouts.addform');
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
       
        return view('dataguru::edit',['dataguru' => $datakursus]);
                
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
    public function destroy($id)
    {
      $get_token  = session()->get('token');
      $client     = new Client();
      $token      = json_decode($get_token);
      $headers    = $token->accessToken;
      $client->request('DELETE', env('API_URL').'/dataguru/'.$id, [
          'headers' => [
              'Authorization' => $headers
          ]
      ]);
      return redirect('dataguru');
    }

}
