<?php
namespace Demo\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of EnquiryType
 *
 * @author Jonathan Claros <jclaros at lysoftbo.com>
 */
class EnquiryType extends AbstractType
{
  
  public function buildForm(FormBuilderInterface $builder, array $options) 
  {
    $builder->add('name');
    $builder->add('email','email');
    $builder->add('subject');
    $builder->add('body','textarea');
  }
  
  
  public function getName() 
  {
    return 'contact';
  }
}

