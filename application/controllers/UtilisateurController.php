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
         $request = $this->getRequest();
         $form    = new Application_Forms_Utilisateur();
        /*if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $titre = new Application_Model_Utilisateur($form->getValues());
                $mapper  = new Application_Model_UtilisateurMapper();
                $mapper->save($titre);
                return $this->_helper->redirector('index');
            }
        }
        $this->view->form = $form;*/
    }
    
    
}
