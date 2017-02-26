<?php
/**
 * Created by PhpStorm.
 * User: makles
 * Date: 10/01/17
 * Time: 16:54
 */

namespace AppBundle\Controller;

use AppBundle\Entity\TVSeries;
use AppBundle\Entity\UserSerie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TVSeriesController extends Controller
{
    /**
     * @Route("/series/create")
     * @param Request $request
     */
    public function createAction(Request $request){
        $s = new TVSeries();
        $s->setAuthor($request->get('author'));
        $s->setName($request->get('name'));
        $s->setDescription($request->get('description'));

        $manager =$this->getDoctrine()->getManager();
        $manager->persist($s);
        $manager->flush();

        return new Response('ok');
    }
    /**
     * @Route(name="homepage_index",path="/")
     */
    public function  indexAction(){
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        if($this->get('session')->get('username')==''){
            return $this->render('security/login.html.twig', array(
                'last_username' => $lastUsername,
                'error'         => $error,
            ));
        }        
        
        $s1 = new TVSeries();
        $s1->setId("id1");
        $s1->setAuthor("Author1");
        $s1->setName("Title1");

        $s2 = new TVSeries();
        $s2->setId("id2");
        $s2->setAuthor("Author2");
        $s2->setName("Title2");

        $series = [
            $s1,
            $s2
        ];
        $manager = $this->get('doctrine')->getManager();
        $series = $manager->getRepository(TVSeries::class)->findAll();
        return $this->render('TVSeries/index.html.twig',[
            'username'         => $this->get('session')->get('username'),

            'series' => $series
        ]);
    }

    /**
     * @Route("/")
     * @return Response
     */
    public function listAction(){
        $manager = $this->get('doctrine')->getManager();
        $series = $manager->getRepository(TVSeries::class)->findAll();
        return $this->render('TVSeries/index.html.twig', array(
            'username'         => $this->get('session')->get('username'),
            'series' => $series

        ));
    }

    /**
     * @Route("/ajouterSerie")
     * @return Response
     */
    public function ajouterSerieAction(){
        
        return $this->render('TVSeries/ajouterSerie.html.twig',[

        ]);
    }

    /**
     * @Route("/deleteSerie")
     * @return Response
     */
    public function deleteSerieAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'DELETE
                FROM AppBundle:TVSeries t
                WHERE t.id = :id                '

        )            ->setParameter('id',$request->request->get('id'));
        $query->getResult();
        $manager = $this->get('doctrine')->getManager();
        $series = $manager->getRepository(TVSeries::class)->findAll();
        return $this->render('TVSeries/index.html.twig', array(
            'username'         => $this->get('session')->get('username'),
            'series' => $series

        ));
    }
    /**
     * @Route("/ajouterSerieFin")
     * @return Response
     */
    public function ajouterSerieFinAction(Request $request){

        $s = new TVSeries();
        $s->setAuthor($request->request->get('author'));
        $s->setName($request->request->get('name'));
        $s->setDescription($request->request->get('description'));
        $s->setReleasedAt(new \DateTime('now'));

        $manager =$this->getDoctrine()->getManager();
        $manager->persist($s);
        $manager->flush();

        $manager = $this->get('doctrine')->getManager();
        $series = $manager->getRepository(TVSeries::class)->findAll();
        return $this->render('TVSeries/index.html.twig', array(
            'username'         => $this->get('session')->get('username'),
            'series' => $series

        ));
    }
    /**
     * @Route("/ajouterSeriePerso")
     * @return Response
     */
    public function ajouterSeriePersoAction(Request $request){
        $s = new UserSerie();
        $s->setTvserieId($request->request->get('serieId'));
        $s->setNameserie($request->request->get('name'));
        $s->setUserId($this->get('session')->get('userid'));
        $s->setDate(new \DateTime('now'));
        $manager =$this->getDoctrine()->getManager();
        $manager->persist($s);
        $manager->flush();

        $manager = $this->get('doctrine')->getManager();
        $series = $manager->getRepository(TVSeries::class)->findAll();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT s
                FROM AppBundle:UserSerie s
                WHERE s.userId = :n'

        )->setParameter('n',$this->get('session')->get('userid'));
        $series =$query->getResult();
        return $this->render('TVSeries/messeries.html.twig', array(
            'username'         => $this->get('session')->get('username'),
            'series' => $series

        ));

    }

    /**
     * @Route("/deleteSeriePerso")
     * @return Response
     */
    public function deleteSeriePersoAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'DELETE
                FROM AppBundle:UserSerie u
                WHERE u.id = :id                '

        )            ->setParameter('id',$request->request->get('id'));
        $query->getResult();

        $manager = $this->get('doctrine')->getManager();
        $series = $manager->getRepository(TVSeries::class)->findAll();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT s
                FROM AppBundle:UserSerie s
                WHERE s.userId = :n'

        )->setParameter('n',$this->get('session')->get('userid'));
        $series =$query->getResult();
        return $this->render('TVSeries/messeries.html.twig', array(
            'username'         => $this->get('session')->get('username'),
            'series' => $series

        ));
    }

    /**
     * @Route("/voirSeriePerso")
     * @return Response
     */
    public function voirSeriePersoAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT s
                FROM AppBundle:UserSerie s
                WHERE s.userId = :n'

        )->setParameter('n',$this->get('session')->get('userid'));
        $series =$query->getResult();
        return $this->render('TVSeries/messeries.html.twig', array(
            'username'         => $this->get('session')->get('username'),
            'series' => $series

        ));
    }
}