<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Entity;


class DeviceComplianceDeviceOverview extends Entity
{
    /**
     * @return integer
     */
    public function getPendingCount()
    {
        if (!$this->isPropertyAvailable("PendingCount")) {
            return null;
        }
        return $this->getProperty("PendingCount");
    }
    /**
     * @var integer
     */
    public function setPendingCount($value)
    {
        $this->setProperty("PendingCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getNotApplicableCount()
    {
        if (!$this->isPropertyAvailable("NotApplicableCount")) {
            return null;
        }
        return $this->getProperty("NotApplicableCount");
    }
    /**
     * @var integer
     */
    public function setNotApplicableCount($value)
    {
        $this->setProperty("NotApplicableCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getSuccessCount()
    {
        if (!$this->isPropertyAvailable("SuccessCount")) {
            return null;
        }
        return $this->getProperty("SuccessCount");
    }
    /**
     * @var integer
     */
    public function setSuccessCount($value)
    {
        $this->setProperty("SuccessCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getErrorCount()
    {
        if (!$this->isPropertyAvailable("ErrorCount")) {
            return null;
        }
        return $this->getProperty("ErrorCount");
    }
    /**
     * @var integer
     */
    public function setErrorCount($value)
    {
        $this->setProperty("ErrorCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getFailedCount()
    {
        if (!$this->isPropertyAvailable("FailedCount")) {
            return null;
        }
        return $this->getProperty("FailedCount");
    }
    /**
     * @var integer
     */
    public function setFailedCount($value)
    {
        $this->setProperty("FailedCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getConfigurationVersion()
    {
        if (!$this->isPropertyAvailable("ConfigurationVersion")) {
            return null;
        }
        return $this->getProperty("ConfigurationVersion");
    }
    /**
     * @var integer
     */
    public function setConfigurationVersion($value)
    {
        $this->setProperty("ConfigurationVersion", $value, true);
    }
}