// application/models/User.php
<?php
 
class Application_Model_User
{
    protected $_name;
    protected $_pseudo;
    protected $_mdp;
    protected $_age;
    protected $_id;
 
    public function __set($name, $value);
    public function __get($name);
 
    public function setName($text);
    public function getName();
 
    public function setPseudo($pseudo);
    public function getPseudo();
 
    public function setMdp($mdp);
    public function getMdp();
 
    public function setAge($age);
    public function getAge();

    public function setId($id);
    public function getId();
}
}
 
class Application_Model_UserMapper
{
    public function save(Application_Model_User $user);
    public function find($id);
    public function fetchAll();
}

?>