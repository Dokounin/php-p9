<?php

namespace App\Todo;

class Tag
{
    private $id;
    private $name;
    private $task;

    public function __construct($id, $name, $task = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->task = $task ?? [];
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
     * Get the value of task
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set the value of task
     *
     * @return  self
     */
    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    public function addTask($task)
    {
        // si le tag n'est pas présent dans la liste,
        // on l'ajoute à la liste
        if (!in_array($task, $this->task))
            $this->task[] = $task;

        return $this;
    }

    public function removeTag($task)
    {
        $index = array_search($task, $this->task);

        if ($index !== false) {
            // le tag a été trouvé
            // suppression du tag trouvé
            array_splice($this->task, $index, 1);
        }

        return $this;
    }
}
