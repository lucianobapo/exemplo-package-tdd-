<?php
namespace ErpNET\Tests\Models;


class PartnerTest extends ModelsTestCase
{
    protected $testClass = \ErpNET\App\Models\Eloquent\Partner::class;

    protected $testDateFields = ['data_nascimento'];

//    public function test_relation_with_user()
//    {
//        // Instantiate, fill with values, save and return
//        $record = factory($this->testClass)->create();
//        $this->assertEquals( $record->user_id, $record->user->id );
//    }
}
