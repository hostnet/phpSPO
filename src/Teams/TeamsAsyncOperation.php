<?php

/**
 * Modified: 2020-05-26T22:12:31+00:00 
 */
namespace Office365\Teams;


use Office365\Entity;

class TeamsAsyncOperation extends Entity
{
    /**
     * @return integer
     */
    public function getAttemptsCount()
    {
        if (!$this->isPropertyAvailable("AttemptsCount")) {
            return null;
        }
        return $this->getProperty("AttemptsCount");
    }
    /**
     * @var integer
     */
    public function setAttemptsCount($value)
    {
        $this->setProperty("AttemptsCount", $value, true);
    }
    /**
     * @return string
     */
    public function getTargetResourceId()
    {
        if (!$this->isPropertyAvailable("TargetResourceId")) {
            return null;
        }
        return $this->getProperty("TargetResourceId");
    }
    /**
     * @var string
     */
    public function setTargetResourceId($value)
    {
        $this->setProperty("TargetResourceId", $value, true);
    }
    /**
     * @return string
     */
    public function getTargetResourceLocation()
    {
        if (!$this->isPropertyAvailable("TargetResourceLocation")) {
            return null;
        }
        return $this->getProperty("TargetResourceLocation");
    }
    /**
     * @var string
     */
    public function setTargetResourceLocation($value)
    {
        $this->setProperty("TargetResourceLocation", $value, true);
    }
    /**
     * @return OperationError
     */
    public function getError()
    {
        if (!$this->isPropertyAvailable("Error")) {
            return null;
        }
        return $this->getProperty("Error");
    }
    /**
     * @var OperationError
     */
    public function setError($value)
    {
        $this->setProperty("Error", $value, true);
    }
}