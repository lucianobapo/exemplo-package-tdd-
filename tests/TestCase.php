<?php

namespace ErpNET\Tests;

use ErpNET\App\Providers\ErpnetServiceProvider;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase as Test;

class TestCase extends Test
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
//        putenv('DB_DEFAULT=sqlite_testing');
        $app = require __DIR__.'/../bootstrap/app.php';
//        $app = require __DIR__.'/../vendor/laravel/laravel/bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * Default preparation for each test
     */
    public function setUp()
    {
        if (! $this->app) {
            $this->refreshApplication();
        }


//        config(['database.default'=> 'sqlite_testing']);
//        config(['erpnet.orm'=> 'doctrine']);
        config(['erpnet.orm'=> 'eloquent']);
        config(['database.default'=> 'sqlite']);
        config(['database.connections.sqlite.database'=> ':memory:']);

        $this->app->register(ErpnetServiceProvider::class);

        parent::setUp();

        $this->prepareForTests();

//        $this->app['config']->set('database.default','sqlite');
//        $this->app['config']->set('database.connections.sqlite.database', ':memory:');
    }

    /**
     * Migrates the database and set the mailer to 'pretend'.
     * This will cause the tests to run quickly.
     */
    private function prepareForTests()
    {
//        Artisan::call('migrate');
//        Mail::pretend(true);
    }
}
