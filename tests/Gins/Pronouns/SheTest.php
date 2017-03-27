<?php

namespace Gins\Tests;

class SheTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "she";
    protected $subject = "She";
    protected $object = "Her";
    protected $possessive = "Her";
    protected $possessive_plural = "Hers";
    protected $reflective = "Herself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\She();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
