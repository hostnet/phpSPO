<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientObject;

class WindowsDefenderAdvancedThreatProtectionConfiguration extends ClientObject
{
    /**
     * @return bool
     */
    public function getAllowSampleSharing()
    {
        if (!$this->isPropertyAvailable("AllowSampleSharing")) {
            return null;
        }
        return $this->getProperty("AllowSampleSharing");
    }
    /**
     * @var bool
     */
    public function setAllowSampleSharing($value)
    {
        $this->setProperty("AllowSampleSharing", $value, true);
    }
    /**
     * @return bool
     */
    public function getEnableExpeditedTelemetryReporting()
    {
        if (!$this->isPropertyAvailable("EnableExpeditedTelemetryReporting")) {
            return null;
        }
        return $this->getProperty("EnableExpeditedTelemetryReporting");
    }
    /**
     * @var bool
     */
    public function setEnableExpeditedTelemetryReporting($value)
    {
        $this->setProperty("EnableExpeditedTelemetryReporting", $value, true);
    }
}