<?php

class form
{
  public $form;


  public function __construct($action, $method)
  {
    $this->form = '<form action="'. $action . '" method="'. $method.'" >';
  }

// faire une methode qui concatene

  public function setTexte($name,$firstName)
  {
    $this->form .= '<input name="' . $name . '" type="texte" . "value=" '. $value . '"> '.' <br/>  '.'<input firstName="' . $firstName .'" type="texte". "value=" '. $value . '">  >'.' <br/>  ';
  }

  public function setSubmit($submit)
  {
    $this->form.='<input submit="'. $submit . '" type="submit" >' .' </form >';
  }


  function getForm(){

    return $this->form;

  }

}

// faire un require et mettre dans index.php
$form = new Form("index.php","post");
$form->setTexte('qsdfsd','wvvc');
$form->setSubmit('envoyer');
echo $form->getForm();
// var_dump($form);

// faire un require et mettre dans index.php
