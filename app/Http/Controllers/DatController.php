<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class DatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', "https://crm.zoho.com/crm/private/xml/Leads/insertRecords?newFormat=1&authtoken=6dac6fc64d506a14b8bb27df348a1566&xmlData=<Leads><row no='1'><FL val='Lead Source'>Web Download</FL><FL val='First Name'>contacto 1</FL><FL val='Last Name'>apellido</FL><FL val='Email'>testing@testing.com</FL><FL val='Title'>Manager</FL><FL val='Potentials'>kaka</FL><FL val='Phone'>1234567890</FL><FL val='Home Phone'>0987654321</FL><FL val='Other Phone'>1212211212</FL><FL val='Fax'>02927272626</FL><FL val='Mobile'>292827622</FL></row></Leads> ", [
        'form_params' => [
            'name' => 'krunal',
        ]
    ]);
    $response = $response->getBody()->getContents();
    echo '<pre>';
    print_r($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
