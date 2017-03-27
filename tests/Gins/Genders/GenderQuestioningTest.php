<?php

namespace Gins\Tests;

class GenderQuestioningTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'gqu';
    protected $term = 'Gender Questioning';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\GenderQuestioning();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
