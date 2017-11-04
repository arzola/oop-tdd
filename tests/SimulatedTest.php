<?php

use PHPUnit\Framework\TestCase;
use App\Ajax;

class SimulatedTest extends TestCase
{
    public function test_if_simulated_api_works()
    {
        $items = '';
        $ajax = Ajax::create([
            'url' => 'https://dog.ceo/api/breeds/list/all',
            'success' => function ($json) use (&$items) {
                $items = $json;
            }
        ]);
        $this->assertInstanceOf('App\Ajax', $ajax);
        $this->assertStringStartsWith('{"status":"success","message":{"affenpinscher"', $items);
    }

    /**
     * @expectedException \Error
     */
    public function test_if_we_cannot_create_an_instance()
    {
        $ajax = new Ajax([]);
    }

    public function test_if_public_method_get_data_is_avaialable()
    {
        $ajax = Ajax::create([
            'url' => 'https://dog.ceo/api/breeds/list/all'
        ]);
        $data = $ajax->getData();
        $this->assertStringStartsWith('{"status":"success","message":{"affenpinscher"', $data);
    }
}
