<?php

class Application_Model_Utilisateur
{
    protected $_name;
    protected $_mdp;
    protected $_pseudo;
    protected $_ageName
    protected $_id;

    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid user property');
        }
        $this->$method($value);
    }

    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid user property');
        }
        return $this->$method();
    }

    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

    public function setName($name)
    {
        $this->_name = (string) $name
        return $this;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setMdp($mdp)
    {
        $this->_mdp = (string) $mdp;
        return $this;
    }

    public function getMdp()
    {
        return $this->_mdp;
    }

    public function setPseudo($pseudo)
    {
        $this->_pseudo = (string) $pseudo;
        return $this;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }
    
     public function setAge($age)
    {
        $this->_age = (int) $age;
        return $this;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function setId($id)
    {
        $this->_id = (int) $id;
        return $this;
    }

    public function getId()
    {
        return $this->_id;
    }
}