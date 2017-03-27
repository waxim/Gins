<?php

namespace Gins\Tests;

class PronounsTest extends \PHPUnit_Framework_TestCase
{
    public function testPronounList()
    {
        $pronouns = new \Gins\Pronouns();
        $this->assertTrue(is_array($pronouns->getAll()));
    }

    public function testCanAddAPronoun()
    {
        $him = new \Gins\Pronouns\He();
        $nouns = new \Gins\Pronouns();

        $current = count($nouns->getAll());
        $nouns->addNoun($him);

        $this->assertSame($current + 1, count($nouns->getAll()));
    }

    public function testCanFindAPronounByValue()
    {
        $pronouns = new \Gins\Pronouns();
        $value = "he";

        $male = $pronouns->findOrFailByValue($value);
        $this->assertSame($male->getValue(), $value);
    }

    /**
     * @expectedException \Gins\Exceptions\PronounNotRegistered
     */
    public function testCantFindAPronounByValue()
    {
        $pronouns = new \Gins\Pronouns();
        $value = "m";

        $male = $pronouns->findOrFailByValue($value);
        $this->assertSame($male->getValue(), $value);
    }
}
