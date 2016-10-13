<?php
namespace Common\Bundle\EmailBundle\Mailer;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Hip\MandrillBundle\Message;

class MandrillMailer 
{
	protected $container;

	protected $apiKey;

	protected $senderEmail;

	protected $senderName;

	private $receiver;

	private $subject; 

	private $template;

	private $data;

	public function __construct(Container $container, $apiKey, $sender, $senderName, $template)
	{
		$this->senderEmail = $sender;
		$this->senderName = $senderName;
		$this->apiKey = $apiKey;
		$this->container = $container;
		$this->template = $template;
	}

	public function setSenderEmail( $email )
	{
		$this->senderEmail = $email;
	}

	public function setSenderName( $name ) 
	{
		$this->senderName = $name;
	}

	public function setReceiver( $email )
	{
		$this->receiver = $email;
	}

	public function setSubject( $subject )
	{
		$this->subject = $subject;
	}

	public function setTemplate( $template )
	{
		$this->template = $template;
	}

	public function setData( $data )
	{
		$this->data = $data;
	}

	public function sendMail($to ='', $subject = '', $template = '', $data = array() ) 
	{

		if ( !isset($this->receiver) ) 
		{
			$this->receiver = $to;
		}

		if ( !isset($this->subject) ) 
		{
			$this->subject = $subject;
		}

		if ( !isset($this->template) ) 
		{
			$this->template = $template;
		}

		if ( !isset($this->data) ) 
		{
			$this->data = $data;
		}


		if ( !empty($this->senderEmail) && !empty($this->senderName) && !empty($this->receiver) && !empty($this->template) ) 
		{
	        // Get the ManDrill email dispatcher
	        $dispatcher = $this->container->get('hip_mandrill.dispatcher');
	        // Get the Twig service to render the view
	        $twig       = $this->container->get('twig');

	        // Create a new Message object to send
	        $message = new Message();
	        $message
	            ->setFromEmail( $this->senderEmail )
	            ->setFromName( $this->senderName )
	            ->addTo($this->receiver )
	            ->setSubject($this->subject )
	            ->setHtml(
	                $twig->render('CommonEmailBundle:Email:'.$this->template .'.html.twig', $this->data )
	            );

	        // Use the dispatcher to send the email via Mandrill
	        if ( $dispatcher->send($message) ) {
	        	return true;
	        }

	        return false; 
	    }

	    return false;
	}
}