<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class DeviceGeoLocation extends ClientValue
{
    /**
     * @var double
     */
    public $Longitude;
    /**
     * @var double
     */
    public $Latitude;
    /**
     * @var double
     */
    public $Altitude;
    /**
     * @var double
     */
    public $HorizontalAccuracy;
    /**
     * @var double
     */
    public $VerticalAccuracy;
    /**
     * @var double
     */
    public $Heading;
    /**
     * @var double
     */
    public $Speed;
}