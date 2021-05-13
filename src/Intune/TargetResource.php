<?php

/**
 * Modified: 2020-05-24T21:37:20+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class TargetResource extends ClientValue
{
    /**
     * @var string
     */
    public $Id;
    /**
     * @var string
     */
    public $DisplayName;
    /**
     * @var string
     */
    public $Type;
    /**
     * @var string
     */
    public $UserPrincipalName;
}