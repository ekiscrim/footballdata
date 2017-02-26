<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\FixtureService;
use AppBundle\Service\MatchService;

class FixturesController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $fixtureList = $this->get('app.fixtures_parser');

        return $this->render('fixtures/fixtures.html.twig',$fixtureList->decodeFixture());

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
