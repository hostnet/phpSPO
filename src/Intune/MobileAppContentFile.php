<?php

/**
 * Modified: 2020-05-26T22:07:25+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;

class MobileAppContentFile extends ClientObject
{
    /**
     * @return string
     */
    public function getAzureStorageUri()
    {
        if (!$this->isPropertyAvailable("AzureStorageUri")) {
            return null;
        }
        return $this->getProperty("AzureStorageUri");
    }
    /**
     * @var string
     */
    public function setAzureStorageUri($value)
    {
        $this->setProperty("AzureStorageUri", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsCommitted()
    {
        if (!$this->isPropertyAvailable("IsCommitted")) {
            return null;
        }
        return $this->getProperty("IsCommitted");
    }
    /**
     * @var bool
     */
    public function setIsCommitted($value)
    {
        $this->setProperty("IsCommitted", $value, true);
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
    /**
     * @return integer
     */
    public function getSize()
    {
        if (!$this->isPropertyAvailable("Size")) {
            return null;
        }
        return $this->getProperty("Size");
    }
    /**
     * @var integer
     */
    public function setSize($value)
    {
        $this->setProperty("Size", $value, true);
    }
    /**
     * @return integer
     */
    public function getSizeEncrypted()
    {
        if (!$this->isPropertyAvailable("SizeEncrypted")) {
            return null;
        }
        return $this->getProperty("SizeEncrypted");
    }
    /**
     * @var integer
     */
    public function setSizeEncrypted($value)
    {
        $this->setProperty("SizeEncrypted", $value, true);
    }
    /**
     * @return string
     */
    public function getManifest()
    {
        if (!$this->isPropertyAvailable("Manifest")) {
            return null;
        }
        return $this->getProperty("Manifest");
    }
    /**
     * @var string
     */
    public function setManifest($value)
    {
        $this->setProperty("Manifest", $value, true);
    }
}