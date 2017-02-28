<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Fixtures;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Service\FixtureService;
use AppBundle\Service\MatchService;

use Unirest;

class FixturesApiController extends Controller
{


    /**
     * @Route("/api/jornada/{jornada}", name="homepageApi")
     */
    public function indexAction($jornada,Request $request)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $client = new\GuzzleHttp\Client();

        $path = 'https://api.myjson.com/bins/1hhskd';
        $response = $client->request('GET',$path);
        $data = json_decode($response->getBody()->getContents(),true);

        $entity = new Fixtures;
        $existe = $this->getDoctrine()->getRepository('AppBundle:Fixtures')->findBy(array('jornada' => $jornada));
        
        if($existe){
            //recorrer el json?
            echo "existe";
        }else{
            echo "no existe";
        }
        /*
        $entity->setJornada($data['jornada']);
        $entity->setTeam1($data['encuentro'][0]['team1']);
        $entity->setTeam2($data['encuentro'][0]['team2']);
        $entity->setDate($data['encuentro'][0]['date']);
        $entity->setResult($data['encuentro'][0]['result']);

        $em->persist($entity);
        $em->flush();*/

        
        //var_dump($data);
    }
}
