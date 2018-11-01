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
        return view('jadwalpelajaran::index');
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
    public function edit()
    {
        return view('jadwalpelajaran::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
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
