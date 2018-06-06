<?php
class Application_Form_Projet extends Zend_Form
{
    public function init()
    {
        // Set the method for the display form to POST
        $this->setMethod('post');
        // Add a nom element
        $this->addElement('text', 'nom', array(
            'label'      => 'Votre nom:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            'validators' => array(
                array('validator' => 'StringLength', 'options' => array(0, 30))
            )
        ));
        // Add the mdp
        $this->addElement('text', 'mdp', array(
            'label'      => 'Votre mot de passe:',
            'required'   => true,
            'validators' => array(
                array('validator' => 'StringLength', 'options' => array(0, 100))
            )
        ));
        // Add a statut pseudo
        $this->addElement('text', 'pseudo', array(
            'label'      => 'Votre pseudo:',
            'required'   => true,
            'validators' => array(
                array('validator' => 'StringLength', 'options' => array(0, 50
        ));
        // Add age
        $this->addElement('int', 'age', array(
            'label'      => 'Votre age:',
            'required'   => true,
            )
        ));
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Ajouter le Profil',
        ));
        // And finally add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
    }
}