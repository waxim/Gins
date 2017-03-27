<?php

namespace Gins\Tests;

class FaeTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "fae";
    protected $subject = "Fae";
    protected $object = "Faer";
    protected $possessive = "Faer";
    protected $possessive_plural = "Faers";
    protected $reflective = "Faerself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\Fae();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
