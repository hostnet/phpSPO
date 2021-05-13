<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;

class WindowsInformationProtectionAppLearningSummary extends ClientObject
{
    /**
     * @return string
     */
    public function getApplicationName()
    {
        if (!$this->isPropertyAvailable("ApplicationName")) {
            return null;
        }
        return $this->getProperty("ApplicationName");
    }
    /**
     * @var string
     */
    public function setApplicationName($value)
    {
        $this->setProperty("ApplicationName", $value, true);
    }
    /**
     * @return integer
     */
    public function getDeviceCount()
    {
        if (!$this->isPropertyAvailable("DeviceCount")) {
            return null;
        }
        return $this->getProperty("DeviceCount");
    }
    /**
     * @var integer
     */
    public function setDeviceCount($value)
    {
        $this->setProperty("DeviceCount", $value, true);
    }
}