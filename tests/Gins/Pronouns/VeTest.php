<?php

namespace Gins\Tests;

class VeTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "ve";
    protected $subject = "Ve";
    protected $object = "Ver";
    protected $possessive = "Vis";
    protected $possessive_plural = "Vis";
    protected $reflective = "Verself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\Ve();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
