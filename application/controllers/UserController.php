<?php
class UserController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }
    public function utilisateurAction()
    {
        // action body
        $dbD = new Model_DbTable_User();
        $arr = $dbD->getAll();
        $this->view->result = $arr;
    }
    public function ecrireAction()
    {
        $dbD = new Model_DbTable_User();
        $dbD->ajouter(array("nom_util"=>$this->_getParam('nom_util', 'rien')));
    }
    
    
}