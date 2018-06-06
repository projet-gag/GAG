<?php
class Application_Model_UtilisateurMapper
{
    protected $_dbTable;
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Projet');
        }
        return $this->_dbTable;
    }
    public function save(Application_Model_Projet $projet)
    {
        $data = array(
            'nom'   => $Utilisateur->getNom(),
            'mdp' => $Utilisateur->getMdp(),
            'pseudo' => $Utilisateur->getPseudo(),
            'age' => $Utilisateur->getAge(),
        );
        if (null === ($id = $Utilisateur->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }
    public function find($id, Application_Model_Projet $Utilisateur)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $Utilisateur->setId($row->id)
        ->setNom($row->nom)
        ->setMdp($row->mdp)
        ->setPseudo($row->pseudo)
        ->setAge($row->age);
    }
    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Projet();
            $entry->setId($row->id)
            ->setNom($row->nom)
            ->setMdp($row->mdp)
            ->setPseudo($row->pseudo)
            ->setAge($row->age);
            $entries[] = $entry;
        }
        return $entries;
    }
    public function showAll()
    {
        $result = $this->getDbTable()->getAll();
        return $result;
    }
}
