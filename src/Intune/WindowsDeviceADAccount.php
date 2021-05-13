<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class WindowsDeviceADAccount extends ClientValue
{
    /**
     * @var string
     */
    public $DomainName;
    /**
     * @var string
     */
    public $UserName;
}