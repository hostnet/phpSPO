<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:12:31+00:00 
 */
namespace Office365\Common;


use Office365\Runtime\ResourcePath;
class RoleAssignment extends Entity
{
    /**
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return array
     */
    public function getResourceScopes()
    {
        if (!$this->isPropertyAvailable("ResourceScopes")) {
            return null;
        }
        return $this->getProperty("ResourceScopes");
    }
    /**
     * @var array
     */
    public function setResourceScopes($value)
    {
        $this->setProperty("ResourceScopes", $value, true);
    }
    /**
     * @return RoleDefinition
     */
    public function getRoleDefinition()
    {
        if (!$this->isPropertyAvailable("RoleDefinition")) {
            $this->setProperty("RoleDefinition", new RoleDefinition($this->getContext(), new ResourcePath("RoleDefinition", $this->getResourcePath())));
        }
        return $this->getProperty("RoleDefinition");
    }
}