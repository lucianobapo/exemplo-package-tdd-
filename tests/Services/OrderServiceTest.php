<?php
namespace ErpNET\Tests\Services;


class OrderServiceTest extends ServiceTestCase
{
    protected $testClass = \ErpNET\App\Interfaces\OrderServiceInterface::class;
    protected $orderClass = \ErpNET\App\Models\RepositoryLayer\OrderRepositoryInterface::class;

    protected $testDateFields = ['posted_at'];

    public function test_order_creation(){
        $fake = array (
            'pagamento' => 'credito',
            'cep' => '28893280',
            'nome' => 'Angie',
            'email' => 'angiemarianne@outlook.com',
            'endereco' => 'Avenida Brasil',
            'bairro' => 'Extensão do Bosque',
            'numero' => '123',
            'itens' =>
                array (
                    0 =>
                        array (
                            'id' => '140',
                            'nome' => 'Água Com Gás Schin 500ml',
                            'quantidade' => '1',
                            'valor' => '4.00',
                            '$$hashKey' => 'object:545',
                        ),
                ),
        );

        $class = $this->app->make($this->testClass);
//        $class = new $this->testClass;
        $this->assertInstanceOf($this->testClass, $class);

        $orderClass = $this->app->make($this->orderClass);
        $this->assertInstanceOf($this->orderClass, $orderClass);

        $order = $class->createOrderWithJson($fake);
        $this->assertInstanceOf($this->orderClass, $order);
    }

//    public function test_relation_with_partner()
//    {
//        // Instantiate, fill with values, save and return
//        $record = factory($this->testClass)->create(['partner_id' => factory(App\Models\Partner::class)->create()->id]);
//        $this->assertEquals( $record->partner_id, $record->partner->id );
//    }
}
