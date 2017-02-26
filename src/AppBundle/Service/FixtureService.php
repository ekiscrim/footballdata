<?php 
namespace AppBundle\Service;

/**
* 
*/
class FixtureService
{
	
	public function decodeFixture(){
		$client = new\GuzzleHttp\Client();
		$json = 'https://raw.githubusercontent.com/opendatajson/football.json/master/2016-17/es.1.json';
        
        $response = $client->request('GET',$json);

        $data = json_decode($response->getBody()->getContents(),true);

        return $data;
	}
}

 ?>