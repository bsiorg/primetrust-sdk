<?php

use BsiOrg\PrimeTrust\Tests\TestCase;

class PrimeTrustTest extends TestCase
{
    public function test_primetrust_client_setup_correctly()
    {
        $this->assertTrue(config('primetrust.url') == '');
    }
}
