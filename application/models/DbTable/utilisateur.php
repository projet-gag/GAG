<?php

class Model_DbTable_utilisateur extends Zend_Db_Table_Abstract
{
    
    /**
     * Nom de la table.
     */
    protected $_name = 'utilisateur';
    
    /**
     * Clef primaire de la table.
     */
    protected $_primary = 'id';
    /**
     * Récupère toutes les entrées flux_doc avec certains critères
     * de tri, intervalles
     *
     * @return array
     */
    public function getAll($order=null, $limit=0, $from=0)
    {
        $query = $this->select()
                    ->from( array("utilisateur" => "utilisateur") );
                    
        if($order != null)
        {
            $query->order($order);
        }
        if($limit != 0)
        {
            $query->limit($limit, $from);
        }
        return $this->fetchAll($query)->toArray();
    }
}
