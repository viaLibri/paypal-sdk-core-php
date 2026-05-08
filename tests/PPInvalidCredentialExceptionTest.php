<?php
use PHPUnit\Framework\TestCase;
use PayPal\Exception\PPInvalidCredentialException;
/**
 * Test class for PPInvalidCredentialException.
 *
 */
class PPInvalidCredentialExceptionTest extends TestCase
{
    /**
     * @var PPInvalidCredentialException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new PPInvalidCredentialException;
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
    public function testErrorMessage()
    {
      $msg = $this->object->errorMessage();
      $this->assertStringContainsString('Error on line', $msg);
    }
}
?>
