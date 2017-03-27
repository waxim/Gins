<?php

namespace Gins\Tests;

class XeTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "xe";
    protected $subject = "Xe";
    protected $object = "Xem";
    protected $possessive = "Xyr";
    protected $possessive_plural = "Xyrs";
    protected $reflective = "Xemself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\Xe();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
