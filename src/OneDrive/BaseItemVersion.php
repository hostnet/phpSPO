<?php

/**
 * Modified: 2020-05-25T06:42:59+00:00
 */
namespace Office365\OneDrive;

use Office365\Common\IdentitySet;
use Office365\Entity;


class BaseItemVersion extends Entity
{
    /**
     * @return IdentitySet
     */
    public function getLastModifiedBy()
    {
        if (!$this->isPropertyAvailable("LastModifiedBy")) {
            return null;
        }
        return $this->getProperty("LastModifiedBy");
    }
    /**
     * @var IdentitySet
     */
    public function setLastModifiedBy($value)
    {
        $this->setProperty("LastModifiedBy", $value, true);
    }
    /**
     * @return PublicationFacet
     */
    public function getPublication()
    {
        if (!$this->isPropertyAvailable("Publication")) {
            return null;
        }
        return $this->getProperty("Publication");
    }
    /**
     * @var PublicationFacet
     */
    public function setPublication($value)
    {
        $this->setProperty("Publication", $value, true);
    }
}