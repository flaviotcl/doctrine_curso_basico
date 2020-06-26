<?php


namespace App\Entity;

/**
 * @Entity
 * @Table(name="categories")
 */

class Category
{
    /**
     * @Id
     * @CoLumn(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @CoLumn(type="string" , length=100)
     */
    private $name;

    
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

    

    
}
