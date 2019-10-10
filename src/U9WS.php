<?php

/*
 *
 *
 * (c) Allen, Li <morningbuses@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Goodcatch\U9WS;

use SoapClient;
use SoapFault;

/**
 * Class U9WS
 * @package Goodcatch\U9WS
 */
class U9WS
{

    private $client;
    private $functions;

    public function __construct (array $config)
    {
        try
        {
            $wsdl = printf ($config ['WSDL'], $config ['Host']);
            $this->client = new SoapClient ($wsdl);

            $this->functions = $this->client->__getFunctions();
        } catch (SoapFault $e) {
            echo $e->getMessage();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function test (array $param) {

        return $this->client->get($param);

    }
}