<?php

namespace Dgame\Soap\Component\Bipro;

use Dgame\Soap\Node;

/**
 * Class GetShipment
 * @package Dgame\Soap\Component\Bipro
 */
class GetShipment extends Node
{
    /**
     * @var Request|null
     */
    public $request = null;

    /**
     * GetShipment constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        parent::__construct();

        $this->request = $request;
        $this->appendAttributes(
            [
                'xmlns' => [
                    'transfer' => 'http://www.bipro.net/namespace/transfer'
                ]
            ]
        );
    }
}