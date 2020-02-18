<?php

namespace Riipandi\LaravelOpsi\Test;

use Riipandi\LaravelOpsi\Opsi;

class HelperTest extends BaseTest
{
    /** @test */
    public function it_can_get_instance()
    {
        $this->assertInstanceOf(Opsi::class, opsi());
    }

    /** @test */
    public function it_can_set()
    {
        opsi(['foo' => 'bar']);

        $this->assertDatabaseHas('settings', ['key' => 'foo', 'value' => 'bar']);
    }

    /** @test */
    public function it_can_get_default()
    {
        $this->assertEquals('baz', opsi('foo', 'baz'));
    }

    /** @test */
    public function it_can_get()
    {
        opsi(['foo' => 'bar']);

        $this->assertEquals('bar', opsi('foo', 'baz'));
    }

    /** @test */
    public function it_can_check_if_exists()
    {
        $this->assertFalse(opsi_exists('foo'));

        opsi(['foo' => 'bar']);

        $this->assertTrue(opsi_exists('foo'));
    }

    /** @test */
    public function it_can_remove()
    {
        opsi(['foo' => 'bar']);

        $this->assertDatabaseHas('settings', ['key' => 'foo', 'value' => 'bar']);

        opsi()->remove('foo');

        $this->assertDatabaseMissing('settings', ['key' => 'foo', 'value' => 'bar']);
    }
}
