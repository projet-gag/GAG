<?php

class Model_DbTable_User extends Zend_Db_Table_Abstract
{
    
    /**
     * Nom de la table.
     */
    protected $_name = 'user';
    
    /**
     * Clef primaire de la table.
     */
    protected $_primary = 'id';
	protected $_dependentTables = array(
		'Model_DbTable_Flux_Rapport'
		);
		
    /**
     * Vérifie si une entrée flux_doc existe.
     *
     * @param array $data
     *
     * @return integer
     */
   
    
    /**
     * Récupère toutes les entrées flux_doc avec certains critères
     * de tri, intervalles
     *
     * @return array
     */
    public function getAll($order=null, $limit=0, $from=0)
    {
        $query = $this->select()
                    ->from( array("user" => "user") );
                    
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
    
    
=======
<?php
class Application_Model_DbTable_User extends Zend_Db_Table_Abstract
{
    /** Table name */
    protected $_name    = 'user';

}