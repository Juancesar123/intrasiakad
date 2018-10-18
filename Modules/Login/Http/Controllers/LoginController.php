<?php

namespace Modules\Login\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GuzzleHttp\Client;

class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('login::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('login::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
     $client = new Client();
      $value = session('token');
      $headers = ['Authorize' => 'Barier '.$value];
      $send = $client->post(env('API_URL').'/datakursus', $headers,[
        'form_params' => [
          'username' => request()->get('email'),
          'password' => request()->get('password'),
        ]
      ]);
      dd($send);
      $data = $res->getContents();
      $request->session()->put('token', $data);
      return redirect('home');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('login::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('login::edit');
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
