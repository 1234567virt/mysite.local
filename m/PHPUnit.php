<?php
require_once ("m/model.php");


class BasketPerformanceTest extends PHPUnit_Extensions_PerformanceTestCase {

    protected $fixture;

    protected function setUp()
    {
        $this->fixture = $this->Basket;
    }

    protected function tearDown()
    {
        $this->fixture = NULL;
    }

    public function testbasket()
    {
        $this->setMaxRunningTime(1);
        $this->fixture->square(4);
    }
    public function testSelectProduct()
    {
        $this->setMaxRunningTime(1);
        $this->fixture->square(4);
    }
}
class MySuite extends PHPUnit_Framework_TestSuite {

    protected $sharedFixture;

    public static function suite()
    {
        $suite = new MySuite('C_ProductTest');
        $suite->addTestSuite('BasketTest');
        $suite->addTestSuite('UserTest');
        $suite->addTestSuite('BasketPerformanceTest');
        return $suite;
    }
}
?>