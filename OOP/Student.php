<?php
class Student {
    public $name;
    public $lastname;
    public $groupNr;
    public $id;

    public function __construct($name, $lastname, $groupNr, $id)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->groupNr = $groupNr;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getGroupNr()
    {
        return $this->groupNr;
    }

    /**
     * @param mixed $groupNr
     */
    public function setGroupNr($groupNr): void
    {
        $this->groupNr = $groupNr;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}