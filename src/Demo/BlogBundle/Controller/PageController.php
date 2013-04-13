<?php

namespace Demo\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Demo\BlogBundle\Form\EnquiryType;
use Demo\BlogBundle\Entity\Enquiry;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('DemoBlogBundle:Page:index.html.twig');
    }
    
    public function aboutAction() 
    {
      return $this->render('DemoBlogBundle:Page:about.html.twig');
    }
    
    public function contactAction() 
    {
      $enquiry = new Enquiry();
      $form = $this->createForm(new EnquiryType(), $enquiry);
      
      $request = $this->getRequest();
      
      if($request->getMethod() == 'POST')
      {
        $form->bindRequest($request);
        
        if($form->isValid())
        {
          // perform actions
          return $this->redirect($this->generateUrl('demo_blog_base_contact'));
        }
        
      }
      
      
      
      return $this->render('DemoBlogBundle:Page:contact.html.twig',array(
          'form' => $form->createView()
      ));
    }
    
    
    
}
