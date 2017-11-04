<?php

use PHPUnit\Framework\TestCase;

class AjaxCallbackTest extends TestCase
{
    public function test_if_ajax_callback_is_defined()
    {
        ajax('https://jsonip.com', function ($data) {
            $this->assertTrue($data['success']);
            $this->assertStringStartsWith('{"ip',$data['data']);
        });
    }
}
