<?php

class Application_Model_User extends Application_Model_Abstract
{

    protected $_name;
    protected $_lastName;
    protected $_email;
    protected $_password;
    protected $_typeUser;
    protected $_dateBirth;
    protected $_sex;
    protected $_id;

    /*public function __construct(array $options = null)
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
    }*/

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = (int)$id;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = (string)$name;

    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->_lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;

    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;

    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;

    }

    /**
     * @return mixed
     */
    public function getTypeUser()
    {
        return $this->_typeUser;
    }

    /**
     * @param mixed $typeUserId
     */
    public function setTypeUser($typeUser)
    {
        $this->_typeUser = $typeUser;

    }

    /**
     * @return mixed
     */
    public function getDateBirth()
    {
        return $this->_dateBirth;
    }

    /**
     * @param mixed $dateBirth
     */
    public function setDateBirth($dateBirth)
    {
        $this->_dateBirth = $dateBirth;

    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->_sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->_sex = $sex;

    }

}

