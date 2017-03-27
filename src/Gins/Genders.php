<?php

namespace Gins;

use Gins\Exceptions\GenderNotRegistered as GenderNotRegistered;

class Genders
{
    /**
     * An array of our genders.
     *
     * @var array
     */
    protected $genders = [];

    /**
     * Fill out our genders.
     *
     * @param array $genders
     *
     * @return $this
     */
    public function __construct(array $genders = [])
    {
        $inbuilt = [
            new \Gins\Genders\Male(),
            new \Gins\Genders\Female(),
        ];

        $this->genders = array_merge($genders, $inbuilt);
    }

    /**
     * Check all of our genders for a value
     * if we dont find one throw error.
     *
     * @param string $value
     *
     * @throws GenderNotRegistered
     *
     * @return Gins\Gender
     */
    public function findOrFailByValue($value)
    {
        foreach ($this->genders as $gender) {
            if ($gender->getValue() == $value) {
                return $gender;
            }
        }

        throw new GenderNotRegistered();
    }

    /**
     * Check all of our genders for a term
     * if we dont find one throw error.
     *
     * @param string $term
     *
     * @throws GenderNotRegistered
     *
     * @return Gins\Gender
     */
    public function findOrFailByTerm($term)
    {
        foreach ($this->genders as $gender) {
            if ($gender->getTerm() == $term) {
                return $gender;
            }
        }

        throw new GenderNotRegistered();
    }

    /**
     * Add a gender.
     *
     * @param Gins\Gender $gender
     *
     * @return void
     */
    public function addGender(\Gins\Gender $gender)
    {
        array_push($this->genders, $gender);
    }

    /**
     * Get all our genders.
     *
     * @return array|Gins\Gender
     */
    public function getAll()
    {
        return $this->genders;
    }
}
