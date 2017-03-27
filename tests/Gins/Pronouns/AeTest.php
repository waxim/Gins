<?php

namespace Gins\Tests;

class AeTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "ae";
    protected $subject = "Ae";
    protected $object = "Aer";
    protected $possessive = "Aer";
    protected $possessive_plural = "Aers";
    protected $reflective = "Aerself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\Ae();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
