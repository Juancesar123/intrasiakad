<?php

namespace Modules\Login\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GuzzleHttp\Exception\GuzzleException;
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
     $client = new Client();
      // $headers = ['Authorization' => 'Bearer '];
      // dd($headers);
      $send = $client->post(env('API_URL').'/authentication',[
        'form_params' => [
          'strategy' => 'local',
          'email' => $request->email,
          'password' => $request->password,
        ]
      ]);
      $data = $send->getBody()->getContents();
      $request->session()->put('token', $data);
      return redirect('homepage');
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

    public function register()
    {
      return view('login::register');
    }

    public function authregister(Request $request)
    {

      $validateRegister = $request->validate([
        'email' => 'required',
        'password' => 'required',
      ]);

        $client = new Client;
        $res = $client->request('POST',env('API_URL').'/users',[
           'form_params' => [
             'email' => $request->email,
             'password' => $request->password,
           ]
         ]);

       // $data = $res->getBody()->getContents();
       // $request->session()->put('token', $data);
       return redirect()->route('formLogin');
    }

    public function logout()
    {
      session()->flush();
      return redirect()->route('formLogin');
    }
}
