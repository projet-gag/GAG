<?php
class UtilisateurController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }
    public function utilisateurAction()
    {
        // action body
        $dbD = new Model_DbTable_utilisateur();
        $arr = $dbD->getAll();
        $this->view->result = $arr;
    }
    public function ecrireAction()
    {
        $dbD = new Model_DbTable_utilisateur();
        $dbD->ajouter(array("nom_util"=>$this->_getParam('nom_util', 'rien')));
    }
    
    
}