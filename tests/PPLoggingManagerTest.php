<?php
use PHPUnit\Framework\TestCase;
use PayPal\Core\PPLoggingManager;
/**
 * Test class for PPLoggingManager.
 *
 */
class PPLoggingManagerTest extends TestCase
{
    /**
     * @var PPLoggingManager
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new PPLoggingManager('InvoiceTest');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * @test
     */
    public function testError()
    {
    	 $this->object->error('Test Error Message');
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function testWarning()
    {
        $this->object->warning('Test Warning Message');
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function testInfo()
    {
        $this->object->info('Test info Message');
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function testFine()
    {
        $this->object->fine('Test fine Message');
        $this->assertTrue(true);
    }
}
?>
