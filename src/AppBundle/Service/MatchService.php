<?php 
namespace AppBundle\Service;

/**
* 
*/
class MatchService
{
	
	public function decodeMatch($round,$match){
        $client = new\GuzzleHttp\Client();
        $json = 'https://raw.githubusercontent.com/opendatajson/football.json/master/2016-17/es.1.json';
        
        $response = $client->request('GET',$json);

        $data = json_decode($response->getBody()->getContents(),true);
        $partido = array_filter($data['rounds'][$round]['matches'][$match]);


        return $partido;
	}
}

 ?>