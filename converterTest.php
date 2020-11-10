<?php

namespace SitePoint\Converter;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    public function testSimpleConversion()
    {
        $input = '{"key":"value","key2":"value2"}';
        $output = [
            'key' => 'value',
            'key2' => 'value2'
        ];
        $converter = new \SitePoint\Converter\Converter();
        $this->assertEquals($output, $converter->convertString($input));
    }
}

?>

