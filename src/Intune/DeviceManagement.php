<?php

/**
 * Modified: 2020-05-29T07:19:37+00:00
 */
namespace Office365\Intune;

use Office365\Entity;

use Office365\Runtime\ResourcePath;
class DeviceManagement extends Entity
{
    /**
     * @return DeviceManagementSettings
     */
    public function getSettings()
    {
        if (!$this->isPropertyAvailable("Settings")) {
            return null;
        }
        return $this->getProperty("Settings");
    }
    /**
     * @var DeviceManagementSettings
     */
    public function setSettings($value)
    {
        $this->setProperty("Settings", $value, true);
    }
    /**
     * @return IntuneBrand
     */
    public function getIntuneBrand()
    {
        if (!$this->isPropertyAvailable("IntuneBrand")) {
            return null;
        }
        return $this->getProperty("IntuneBrand");
    }
    /**
     * @var IntuneBrand
     */
    public function setIntuneBrand($value)
    {
        $this->setProperty("IntuneBrand", $value, true);
    }
    /**
     * @return SoftwareUpdateStatusSummary
     */
    public function getSoftwareUpdateStatusSummary()
    {
        if (!$this->isPropertyAvailable("SoftwareUpdateStatusSummary")) {
            $this->setProperty("SoftwareUpdateStatusSummary", new SoftwareUpdateStatusSummary($this->getContext(), new ResourcePath("SoftwareUpdateStatusSummary", $this->getResourcePath())));
        }
        return $this->getProperty("SoftwareUpdateStatusSummary");
    }
    /**
     * @return DeviceCompliancePolicyDeviceStateSummary
     */
    public function getDeviceCompliancePolicyDeviceStateSummary()
    {
        if (!$this->isPropertyAvailable("DeviceCompliancePolicyDeviceStateSummary")) {
            $this->setProperty("DeviceCompliancePolicyDeviceStateSummary", new DeviceCompliancePolicyDeviceStateSummary($this->getContext(), new ResourcePath("DeviceCompliancePolicyDeviceStateSummary", $this->getResourcePath())));
        }
        return $this->getProperty("DeviceCompliancePolicyDeviceStateSummary");
    }
    /**
     * @return DeviceConfigurationDeviceStateSummary
     */
    public function getDeviceConfigurationDeviceStateSummaries()
    {
        if (!$this->isPropertyAvailable("DeviceConfigurationDeviceStateSummaries")) {
            $this->setProperty("DeviceConfigurationDeviceStateSummaries", new DeviceConfigurationDeviceStateSummary($this->getContext(), new ResourcePath("DeviceConfigurationDeviceStateSummaries", $this->getResourcePath())));
        }
        return $this->getProperty("DeviceConfigurationDeviceStateSummaries");
    }
    /**
     * @return OnPremisesConditionalAccessSettings
     */
    public function getConditionalAccessSettings()
    {
        if (!$this->isPropertyAvailable("ConditionalAccessSettings")) {
            $this->setProperty("ConditionalAccessSettings", new OnPremisesConditionalAccessSettings($this->getContext(), new ResourcePath("ConditionalAccessSettings", $this->getResourcePath())));
        }
        return $this->getProperty("ConditionalAccessSettings");
    }
    /**
     * @return ApplePushNotificationCertificate
     */
    public function getApplePushNotificationCertificate()
    {
        if (!$this->isPropertyAvailable("ApplePushNotificationCertificate")) {
            $this->setProperty("ApplePushNotificationCertificate", new ApplePushNotificationCertificate($this->getContext(), new ResourcePath("ApplePushNotificationCertificate", $this->getResourcePath())));
        }
        return $this->getProperty("ApplePushNotificationCertificate");
    }
    /**
     * @return ManagedDeviceOverview
     */
    public function getManagedDeviceOverview()
    {
        if (!$this->isPropertyAvailable("ManagedDeviceOverview")) {
            $this->setProperty("ManagedDeviceOverview", new ManagedDeviceOverview($this->getContext(), new ResourcePath("ManagedDeviceOverview", $this->getResourcePath())));
        }
        return $this->getProperty("ManagedDeviceOverview");
    }
    /**
     * @return string
     */
    public function getIntuneAccountId()
    {
        if (!$this->isPropertyAvailable("IntuneAccountId")) {
            return null;
        }
        return $this->getProperty("IntuneAccountId");
    }
    /**
     * @var string
     */
    public function setIntuneAccountId($value)
    {
        $this->setProperty("IntuneAccountId", $value, true);
    }
}