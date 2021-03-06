<?php declare(strict_types = 1);


namespace App\Blog;

abstract class ANameObject 
{
    protected $id;
    protected $name;
    protected $description;

    public function __construct(int $id, string $name, ?string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}