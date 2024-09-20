<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'api-token' => 'G6Mfo9qxF2yUSzPFz5-Out1BT_5OR9AmdJRMPR1sXdhkny_ccAjTtr0py0X1Z_dYLNY',
            'user-email' => 'eladiog766@gmail.com'
        ])->get('https://www.universal-tutorial.com/api/getaccesstoken');

        $authToken = $response->json('auth_token');

        $countries = Http::withHeaders([
            'Authorization' => 'Bearer ' . $authToken,
            'Accept' => 'application/json'
        ])->get('https://www.universal-tutorial.com/api/countries');

        /* DEBUGGING */
        /*dd($countries->json());*/

        $countries = $countries->json();

        /* resources -> views -> auth -> register.blade.php */
        return view('auth.register', ['countries' => $countries]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
