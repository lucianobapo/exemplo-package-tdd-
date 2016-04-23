<?php

namespace ErpNET\Tests\Models;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class OrderTest extends ModelsTestCase
{
    use DatabaseMigrations;

    protected $testClass = \ErpNET\App\Models\RepositoryLayer\OrderRepositoryInterface::class;

    protected $testDateFields = ['posted_at'];

    public function test_relation_with_partner()
    {
        $class = $this->app->make($this->testClass);
        $partnerClass = $this->app->make(\ErpNET\App\Models\RepositoryLayer\PartnerRepositoryInterface::class);
//        dd(get_class($class->model));

        $fields = [
//            'partner_id' => factory(get_class($partnerClass->model))->make()
            'partner_id' => factory(get_class($partnerClass->model))->create()->id
        ];

        // Instantiate, fill with values, save and return
        $record = factory(get_class($class->model))->make($fields);
//        dd($fields);
//        dd($record);
        $this->assertEquals( $record->partner_id, $record->partner->id );
    }
}
