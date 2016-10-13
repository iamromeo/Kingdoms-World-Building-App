<?php 
namespace Common\Bundle\EmailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

// use Hip\MandrillBundle\Message;
// use Hip\MandrillBundle\Dispatcher;

// use Common\Bundle\EmailBundle\Mailer\LittleredMailer;

use Common\Bundle\EmailBundle\Mailer;


class EmailController extends Controller
{

	public function testAction() {

        // Using Mandrill Directly
        // $dispatcher = $this->get('hip_mandrill.dispatcher');

        // $message = new Message();

        // $message
        //     ->setFromEmail('hello@lostkingdom.net')
        //     ->setFromName('Lost King')
        //     ->addTo('lordromeo@gmail.com')
        //     ->setSubject('Some Subject')
        //     ->setHtml('<html><body><h1>Some Content</h1></body></html>');
        //     // ->setSubaccount('Project');

        // $result = $dispatcher->send($message);

        // return new Response('<pre>' . print_r($result, true) . '</pre>');

        // Using the Mailer service
		$testMail = $this->get('mandrill_mailer');
        $testMail->setSenderName('ouga bouuga');
        if ( $testMail->sendMail('lordromeo@gmail.com','hello') )
        {
            die('success');
        }
		
		die('failure');
	}

    public function sandboxAction($templateName = 'customerOrderConfirmation')
    {
        $user = $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getEntityManager();

        $templateParameters = array('user' => $user);
        $templateParameters['password'] = 'WANGDANG';
 

        return $this->render('CommonEmailBundle:Email:'.$templateName.'.html.twig', $templateParameters);
    }
}
