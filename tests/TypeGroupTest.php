<?php

namespace Laymont\Shicontstand\Tests;



class TypeGroupTest extends \Laymont\Shicontstand\Tests\TestCase
{
    public function test_type_group_index()
    {
        $response = $this->get('scs/type_groups/index ');
        $response->assertStatus(200);
    }
}
