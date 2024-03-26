<?php

class sensor
{
    private int $id;
    private int $unite;
    private float $maxValues;
    private float $minValues;
    private float $accuracy;
    private string $name;
    private string $ip;
    private string $desc;
    
    
    
    public function __construct($id, $unite, $max, $min, $accuracy, $name, $ip, $desc) {
        $this->id = $id;
        $this->unite = $unite;
        $this->maxValues = $max;
        $this->minValues = $min;
        $this->accuracy = $accuracy;
        $this->name = $name;
        $this->ip = $ip;
        $this->desc = $desc;
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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * @param mixed $unite
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;
    }

    /**
     * @return mixed
     */
    public function getMaxValues()
    {
        return $this->maxValues;
    }

    /**
     * @param mixed $maxValues
     */
    public function setMaxValues($maxValues)
    {
        $this->maxValues = $maxValues;
    }

    /**
     * @return mixed
     */
    public function getMinValues()
    {
        return $this->minValues;
    }

    /**
     * @param mixed $minValues
     */
    public function setMinValues($minValues)
    {
        $this->minValues = $minValues;
    }

    /**
     * @return mixed
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * @param mixed $accuracy
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;
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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }


}

