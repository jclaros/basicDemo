<?php
namespace Demo\BlogBundle\Entity;
/**
 * Description of Enquiry
 *
 * @author Jonathan Claros <jclaros at lysoftbo.com>
 */
class Enquiry 
{
  
  protected $name;
  
  protected $email;
  
  protected $subject;
  
  protected $body;
  
  public function __construct() 
  {
    
  }
  
  public function getName() 
  {
    return $this->name;
  }
  
  public function getEmail() 
  {
    return $this->email;
  }
  
  public function getSubject() 
  {
    return $this->subject;
  }
  
  public function getBody() 
  {
    return $this->body;
  }
  
  public function setName($name) 
  {
    $this->name = $name;
  }
  
  public function setEmail($email) 
  {
    $this->email = $email;
  }
  
  public function setSubject($subject) 
  {
    $this->subject = $subject;
  }
  
  public function setBody($body) 
  {
    $this->body = $body;
  }
  
  
}

