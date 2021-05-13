<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Intune;

use Office365\Runtime\ClientValue;
class ManagedAppDiagnosticStatus extends ClientValue
{
    /**
     * @var string
     */
    public $ValidationName;
    /**
     * @var string
     */
    public $State;
    /**
     * @var string
     */
    public $MitigationInstruction;
}