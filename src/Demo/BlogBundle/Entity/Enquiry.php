<?php
namespace Demo\BlogBundle\Entity;


use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;

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
  
  
  public static function loadValidatorMetadata(ClassMetadata $metadata) 
  {
    
    $metadata->addPropertyConstraint('name', new NotBlank());
    $metadata->addPropertyConstraint('email', new Email(array(
        'message' => 'this blog does not accept invalid emails: Insert a real one!'
    )));
    $metadata->addPropertyConstraint('subject', new NotBlank());
    $metadata->addPropertyConstraint('subject', new MaxLength(50));
    $metadata->addPropertyConstraint('body', new MinLength(50));
    
    
  }
  
  
}

