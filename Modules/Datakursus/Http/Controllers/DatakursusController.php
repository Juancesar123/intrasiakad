<?php

namespace Modules\Datakursus\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;

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
          $get_data=$client->request('GET',env('API_URL').'/datakursus/', [
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
      $client = new Client();
      $value = session('token');
      $token_decode = json_decode($value)->accessToken;
      $res = $client->post(env('API_URL').'/datakursus',[
        'headers' => [
            'Authorization'     => $token_decode
        ],
          'form_params' => [
            'namakursus' => $request->namaKursus
         ]
      ]);
      return redirect('datakursus');
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
    public function edit($id)
    {
        $token = session()->get('token');
        $client = new Client();
        $token_decode = json_decode($token)->accessToken;
        $get_data=$client->request('GET',env('API_URL').'/datakursus/'.$id, [
                'headers' => [
                        'Authorization'     => $token_decode
                    ]
            ]);
        $datakursus = json_decode($get_data->getBody()->getContents());
        //var_dump($datakursus);
        return view('datakursus::edit',['datakursus' => $datakursus]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request,$id)
    {
          $token = session()->get('token');
          $client = new Client();
          $kam = json_decode($token);
          $headers = ['Authorization' => $kam->accessToken];
          $send = $client->request('PATCH',env('API_URL').'/datakursus/'.$id,
            [
            'headers' => [
                'Authorization' => $headers
            ],
            'form_params' => [
                'namakursus' => $request->namakursus,
            ]
          ]);
          return redirect('jadwalkursus');
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
        $client->request('DELETE', env('API_URL').'/datakursus/'.$id, [
            'headers' => [
                'Authorization' => $headers
            ]
        ]);
        return redirect('datakursus');
    }

    public function addform()
    {
        return view('datakursus::addform');
    }

}
