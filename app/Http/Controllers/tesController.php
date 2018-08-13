<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Stream\Stream;
class tesController extends Controller
{
    public function index()
    {
    	$user_detail = $this->get_user_detail();
    	$user_repo = $this->search_repo();
    	return view('tes',compact('user_detail','user_repo'));
    }

    public function get_user_detail($value='')
    {
    	$client = new Client([
            'headers' => ['content-type' => 'application/json' , 'Accept' =>'application/json','x-api-key'=>'e2e4e0b9-2363-c96f-ca22-f17ebc33f545'],
        ]);

        $response = $client->request('GET', 'https://api.github.com/users/andhikamaheva');
        return json_decode($response->getBody()->getContents());

    }

    public function search_repo()
    {
    	$client = new Client([
            'headers' => ['content-type' => 'application/json' , 'Accept' =>'application/json','x-api-key'=>'e2e4e0b9-2363-c96f-ca22-f17ebc33f545'],
        ]);

        $response = $client->request('GET', 'https://api.github.com/users/andhikamaheva/repos');
        return json_decode($response->getBody()->getContents());
        // 7b95774ecc5327881bbdd2d2907d4f28e98d3210 
    }
}
