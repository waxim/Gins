<?php

namespace Gins\Tests;

class GenderTest extends \PHPUnit_Framework_TestCase
{
    public function testGenderList()
    {
        $genders = new \Gins\Genders();
        $this->assertTrue(is_array($genders->getAll()));
    }

    public function testCanAddAGender()
    {
        $gender = new \Gins\Gender();
        $genders = new \Gins\Genders();

        $current_genders = count($genders->getAll());
        $genders->addGender($gender);

        $this->assertSame($current_genders + 1, count($genders->getAll()));
    }

    public function testCanFindAGenderByTerm()
    {
        $genders = new \Gins\Genders();
        $term = 'Male';

        $male = $genders->findOrFailByTerm($term);
        $this->assertSame($male->getTerm(), $term);
    }

    public function testCanFindAGenderByValue()
    {
        $genders = new \Gins\Genders();
        $value = 'm';

        $male = $genders->findOrFailByValue($value);
        $this->assertSame($male->getValue(), $value);
    }

    /**
     * @expectedException \Gins\Exceptions\GenderNotRegistered
     */
    public function testCantFindAGenderByTerm()
    {
        $genders = new \Gins\Genders();
        $term = 'Cup';

        $gender = $genders->findOrFailByTerm($term);
        $this->assertSame($gender->getTerm(), $term);
    }

    /**
     * @expectedException \Gins\Exceptions\GenderNotRegistered
     */
    public function testCantFindAGenderByValue()
    {
        $genders = new \Gins\Genders();
        $value = '?';

        $gender = $genders->findOrFailByValue($value);
        $this->assertSame($gender->getValue(), $value);
    }

    public function testCanSetAndGetNouns()
    {
        $male = new \Gins\Genders\Male();
        $nouns = new \Gins\Pronouns\She();

        $this->assertSame($male->getNouns()->getNoun(), 'He');
        $male->setNouns($nouns);
        $this->assertSame($male->getNouns()->getNoun(), 'She');
    }
}
