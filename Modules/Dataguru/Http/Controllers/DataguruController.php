<?php

namespace Modules\Dataguru\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DataguruController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
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
        return view('dataguru::create');
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
        $token = session()->get('token');
        $client = new Client();
        $kam = json_decode($token);
        $headers = ['Authorization' => $kam->accessToken];
        $send = $client->request('PATCH',env('API_URL').'/dataguru/'.$id,
          [
          'headers' => [
              'Authorization' => $headers
          ],
          'form_params' => [
              'namaguru' => $request->namaguru,
          ]
        ]);
        return redirect('dataguru');
         
    }

    /**     
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {

    }

}
