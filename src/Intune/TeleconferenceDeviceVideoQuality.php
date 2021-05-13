<?php

/**
 * Modified: 2020-05-29T07:19:37+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class TeleconferenceDeviceVideoQuality extends ClientValue
{
    /**
     * @var double
     */
    public $AverageInboundFrameRate;
    /**
     * @var double
     */
    public $AverageOutboundFrameRate;
    /**
     * @var double
     */
    public $AverageInboundBitRate;
    /**
     * @var double
     */
    public $AverageOutboundBitRate;
}