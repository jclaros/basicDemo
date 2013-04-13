<?php
namespace Demo\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of BlogController
 *
 * @author Jonathan Claros <jclaros at lysoftbo.com>
 */
class BlogController extends Controller
{
  public function showAction($id) 
  {
    //$em = $this->getDoctrine()->getEntityManager();
    $em = $this->getDoctrine()->getManager();
    
    $blog = $em->getRepository('DemoBlogBundle:Blog')->find($id);
    
    if(!$blog)
    {
      throw $this->createNotFoundException('unable to find the post');
    }
    
    
    return $this->render('DemoBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
      ));
  }
}

