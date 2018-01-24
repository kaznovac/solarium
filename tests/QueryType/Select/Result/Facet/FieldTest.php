<?php

namespace Solarium\Tests\QueryType\Select\Result\Facet;

use PHPUnit\Framework\TestCase;
use Solarium\Component\Result\Facet\Field;

class FieldTest extends TestCase
{
    protected $values;
    protected $facet;

    public function setUp()
    {
        $this->values = array(
            'a' => 12,
            'b' => 5,
            'c' => 3,
        );
        $this->facet = new Field($this->values);
    }

    public function testGetValues()
    {
        $this->assertSame($this->values, $this->facet->getValues());
    }

    public function testCount()
    {
        $this->assertSame(count($this->values), count($this->facet));
    }

    public function testIterator()
    {
        $values = array();
        foreach ($this->facet as $key => $value) {
            $values[$key] = $value;
        }

        $this->assertSame($this->values, $values);
    }
}