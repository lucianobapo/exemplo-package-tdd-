<?php
namespace ErpNET\Tests\Models;

use ErpNET\Tests\TestCase;
//use Illuminate\Foundation\Testing\DatabaseMigrations;

class ModelsTestCase extends TestCase
{
//    use DatabaseMigrations;

    protected $testClass = null;
    protected $testDateFields = [];

    public static function setupBeforeClass()
    {
//        var_dump(config('database.default'));
        // note that method chaining is supported
//        FactoryMuffin::setFakerLocale('en_EN')->setSaveMethod('save'); // optional step
//        FactoryMuffin::loadFactories(database_path('factories/FactoryMuffin'));
    }

    public function test_sample_factory()
    {
        if (is_null($this->testClass)) {
            $this->markTestSkipped(
                '$this->testClass is null.'
            );
        } else {
            $class = $this->app->make($this->testClass);
            $record = factory(get_class($class->model))->create();
            $this->assertInstanceOf(get_class($class->model), $record);
        }
    }

    public function test_date_fields()
    {
        if (count($this->testDateFields)>0) {
            foreach($this->testDateFields as $field){
                // Instantiate, fill with values, save and return
                $class = $this->app->make($this->testClass);
                $record = factory(get_class($class->model))->create();

                // Regular expression that represents d/m/Y pattern
                $expected = '/\d{2}\/\d{2}\/\d{4}/';

                // True if preg_match finds the pattern
                $matches = ( preg_match($expected, $record->$field) ) ? true : false;

                $this->assertTrue( $matches );
            }

        } else {
            $this->markTestSkipped(
                "Class $this->testClass date fields missing."
            );
        }

    }
}
