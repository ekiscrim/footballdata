<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\FixtureService;
use AppBundle\Service\MatchService;
use AppBundle\Entity\Fixture;

class FixturesController extends Controller
{


    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $fixtureList = $this->get('app.fixtures_parser');

        $fixture = $this->getDoctrine()->getRepository('AppBundle:Fixture')->findAll();


        if(array_diff_assoc($fixture,$fixtureList->decodeFixture())){
            return $this->render('fixtures/fixtures.html.twig',$fixtureList->decodeFixture());
        }else{
            $em = $this->container->get('doctrine')->getEntityManager();
            

            $fixtures = $fixtureList->decodeFixture();

            foreach($fixtures['rounds'] as $data){ //recorro jornadas 38
                foreach($data['matches'] as $partido){
                    $entity = new Fixture;

                    $entity->setJornada($data['name']);
                    $entity->setFecha($partido['date']);
                    $entity->setEquipo1($partido['team1']['name']);
                    $entity->setEquipo2($partido['team2']['name']);
                    $entity->setResultado1($partido['score1']);
                    $entity->setResultado2($partido['score2']);
                    $em->persist($entity);
                }

                
                $em->flush();
            }
                   
            return $this->render('fixtures/fixtures.html.twig',$fixtureList->decodeFixture());
        }

        

    }
    /**
     * @Route("/match/jornada/{round}/partido/{match}", name="match")
     */
    public function matchAction($round,$match,Request $request)
    {
        $matches = $this->get('app.matches_parser');

        return $this->render('matches/match.html.twig',$matches->decodeMatch($round,$match));

    }
}
