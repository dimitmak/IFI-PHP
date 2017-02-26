<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Entity\TVSeries;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login_form")
     */
    public function loginAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $manager = $this->get('doctrine')->getManager();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT u
                FROM AppBundle:User u
                WHERE u.name = :n AND u.password = :p'

        )->setParameter('n',$request->request->get('_username'))
            ->setParameter('p',$request->request->get('_password'));
        $user =$query->getResult();
    if(sizeof($user)>0){
        $this->get('session')->set('username', $user[0]->getName());
        $this->get('session')->set('userid', $user[0]->getId());
        $manager = $this->get('doctrine')->getManager();
        $series = $manager->getRepository(TVSeries::class)->findAll();
        return $this->render('TVSeries/index.html.twig', array(
            'username'         => $this->get('session')->get('username'),
            'series' => $series

        ));
    }

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {/*
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'DELETE
                FROM AppBundle:User u
                '

        );
        $user =$query->getResult();*/
        return $this->render('security/register.html.twig', array(
            'error'         => '',

        ));
    }
    /**
     * @Route("/registerUser", name="registerUser")
     */
    public function registerUserAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT u
                FROM AppBundle:User u
                WHERE u.name = :n'

        )->setParameter('n',$request->request->get('_username'));
        $user =$query->getResult();
        if(sizeof($user)>0)
        {
            $error = "utilisateur existant";
            return $this->render('security/register.html.twig', array(
                'error'         => $error,

            )); 
        }
        $s = new User();
        $s->setName($request->request->get('_username'));
        $s->setPassword($request->request->get('_password'));

        $manager =$this->getDoctrine()->getManager();
        $manager->persist($s);
        $manager->flush();

        return $this->render('security/login.html.twig', array(
            'last_username' => $request->request->get('_username'),
            'error'         => '',
        ));

    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        $this->get('session')->set('username', '');
        $this->get('session')->set('userid', '');
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
    }
}