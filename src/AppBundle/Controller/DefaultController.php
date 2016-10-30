<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Categorie');
		$query = $repository->createQueryBuilder('p')
		    ->where('p.parent is NULL')
		    ->getQuery();
		
		$categories = $query->getResult();
		
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'categories' => $categories,
        ]);
    }
	
	public function lostPasswordAction(Request $request)
	{
        $form = $this->createFormBuilder()
            ->add('identifier', 'text',['label'=>'Email ou Username'])
            ->add('save', 'submit', array('label' => 'Envoyer'))
            ->getForm();
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        	$em = $this->getDoctrine()->getManager();
        	$data = $request -> request->all();
			$form = $data['form'];
			$identifier = $form['identifier'];
			
			$user = $this->get('fos_user.user_manager')->findUserByUsernameOrEmail($identifier);
			
	        if (null === $user) {
	            return $this->render('FOSUserBundle:Resetting:request.html.twig', array(
	                'invalid_username' => $username
	            ));
	        }
	
	        if ($user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
	            return $this->render('FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig');
	        }
			
	        if (null === $user->getConfirmationToken()) {
	            /** @var $tokenGenerator \FOS\UserBundle\Util\TokenGeneratorInterface */
	            $tokenGenerator = $this->get('fos_user.util.token_generator');
	            $user->setConfirmationToken($tokenGenerator->generateToken());
	        }
	
	        $this->get('fos_user.mailer')->sendResettingEmailMessage($user);
	        $user->setPasswordRequestedAt(new \DateTime());
	        $this->get('fos_user.user_manager')->updateUser($user);
	
	        return $this->render('FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig');
        }

        return $this->render('default/lostPassword.html.twig', array(
            'form' => $form->createView(),
        ));
	}
}
