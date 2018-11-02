<?php

namespace Modules\JadwalPelajaran\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class JadwalPelajaranController extends Controller
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
      $get_data=$client->request('GET',env('API_URL').'/jadwalkursus/', [
             'headers' => [
                      'Authorization'     => $token_decode
                    ]
          ]);
      $jadwalpelajaran = json_decode($get_data->getBody()->getContents());
    return view('jadwalpelajaran:index',compact('jadwalpelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('jadwalpelajaran::create');
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
        return view('jadwalpelajaran::show');
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
      $get_data = $client->request('GET',env('API_URL').'/jadwalkursus/'.$id, [
        'headers' => [ 'Authorization' => $token_decode ]
      ]);
      $get_data_teacher = $client->request('GET',env('API_URL').'/datapengajar/',[
        'headers' => [ 'Authorization'=> $token_decode  ]
      ]);
      $get_Data_kursus = $client->request('GET',env('API_URL').'/datakursus/', [
        'headers' => [ 'Authorization' => $token_decode ]
      ]);
      $dataJadwalPlajaran = json_decode($get_data->getBody()->getContents());
      $dataTeacher = json_decode($get_data_teacher->getBody()->getContents());
      $datakursus = json_decode($get_Data_kursus->getBody()->getContents());
      $teacher = [];
      $kursus = [];
      foreach ($dataTeacher as $key) {
        $teacher[$key->id] =$key->namapengajar;
      }
      foreach ($datakursus as $key) {
        $kursus[$key->id] = $key->namakursus;
      }
      // dd($dataJadwalPlajaran);
        return view('jadwalpelajaran::edit',compact('dataJadwalPlajaran','teacher','kursus'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {dd($request);
    }

    public function addform()
    {
        return view('jadwalpelajaran::addform');
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
        $client->request('DELETE', 'localhost:3030/jadwalkursus/'.$id, [
                'headers' => [
                'Authorization' => $headers
                ]
                ]);
    }
}
