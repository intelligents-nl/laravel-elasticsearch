<?php

namespace Tests;

use Carbon\Carbon;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    /**
     * Set up the tests.
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @return void
     */
    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.connections.elasticsearch.suffix', '_dev');
    }
}
