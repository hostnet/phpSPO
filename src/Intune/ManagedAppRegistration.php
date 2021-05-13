<?php

/**
 * Modified: 2020-05-26T22:12:31+00:00 
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;

class ManagedAppRegistration extends ClientObject
{
    /**
     * @return string
     */
    public function getApplicationVersion()
    {
        if (!$this->isPropertyAvailable("ApplicationVersion")) {
            return null;
        }
        return $this->getProperty("ApplicationVersion");
    }
    /**
     * @var string
     */
    public function setApplicationVersion($value)
    {
        $this->setProperty("ApplicationVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getManagementSdkVersion()
    {
        if (!$this->isPropertyAvailable("ManagementSdkVersion")) {
            return null;
        }
        return $this->getProperty("ManagementSdkVersion");
    }
    /**
     * @var string
     */
    public function setManagementSdkVersion($value)
    {
        $this->setProperty("ManagementSdkVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getPlatformVersion()
    {
        if (!$this->isPropertyAvailable("PlatformVersion")) {
            return null;
        }
        return $this->getProperty("PlatformVersion");
    }
    /**
     * @var string
     */
    public function setPlatformVersion($value)
    {
        $this->setProperty("PlatformVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getDeviceType()
    {
        if (!$this->isPropertyAvailable("DeviceType")) {
            return null;
        }
        return $this->getProperty("DeviceType");
    }
    /**
     * @var string
     */
    public function setDeviceType($value)
    {
        $this->setProperty("DeviceType", $value, true);
    }
    /**
     * @return string
     */
    public function getDeviceTag()
    {
        if (!$this->isPropertyAvailable("DeviceTag")) {
            return null;
        }
        return $this->getProperty("DeviceTag");
    }
    /**
     * @var string
     */
    public function setDeviceTag($value)
    {
        $this->setProperty("DeviceTag", $value, true);
    }
    /**
     * @return string
     */
    public function getDeviceName()
    {
        if (!$this->isPropertyAvailable("DeviceName")) {
            return null;
        }
        return $this->getProperty("DeviceName");
    }
    /**
     * @var string
     */
    public function setDeviceName($value)
    {
        $this->setProperty("DeviceName", $value, true);
    }
    /**
     * @return string
     */
    public function getUserId()
    {
        if (!$this->isPropertyAvailable("UserId")) {
            return null;
        }
        return $this->getProperty("UserId");
    }
    /**
     * @var string
     */
    public function setUserId($value)
    {
        $this->setProperty("UserId", $value, true);
    }
    /**
     * @return string
     */
    public function getVersion()
    {
        if (!$this->isPropertyAvailable("Version")) {
            return null;
        }
        return $this->getProperty("Version");
    }
    /**
     * @var string
     */
    public function setVersion($value)
    {
        $this->setProperty("Version", $value, true);
    }
    /**
     * @return MobileAppIdentifier
     */
    public function getAppIdentifier()
    {
        if (!$this->isPropertyAvailable("AppIdentifier")) {
            return null;
        }
        return $this->getProperty("AppIdentifier");
    }
    /**
     * @var MobileAppIdentifier
     */
    public function setAppIdentifier($value)
    {
        $this->setProperty("AppIdentifier", $value, true);
    }
}