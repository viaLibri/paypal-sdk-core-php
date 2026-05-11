<?php
use PHPUnit\Framework\TestCase;
use PayPal\Formatter\FormatterFactory;
class FormatterFactoryTest extends TestCase {
	
	/**
	 * @test
	 */
	public function testValidBinding() {
		$this->assertEquals('PayPal\Formatter\PPNVPFormatter', get_class(FormatterFactory::factory('NV')));
		$this->assertEquals('PayPal\Formatter\PPSOAPFormatter', get_class(FormatterFactory::factory('SOAP')));
	}
	
	/**
	 * @test
	 */
	public function testInvalidBinding() {
		$this->expectException('\InvalidArgumentException');
		FormatterFactory::factory('Unknown');
	}
}
