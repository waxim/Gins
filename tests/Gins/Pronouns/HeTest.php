<?php

namespace Gins\Tests;

class HeTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "he";
    protected $subject = "He";
    protected $object = "Him";
    protected $possessive = "His";
    protected $possessive_plural = "His";
    protected $reflective = "Himself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\He();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
