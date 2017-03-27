<?php

namespace Gins\Genders;

class Other extends \Gins\Gender
{
    /**
     * The english term for the gender.
     *
     * @var string
     */
    protected $term = 'Other';

    /**
     * The value used to id this gender.
     *
     * @var string
     */
    protected $value = 'o';

    /**
     * Alt term.
     *
     * @var string
     */
    protected $freevalue;

    /**
     * Set a free value.
     *
     * @param $term
     */
    public function setTerm($term)
    {
        $this->freevalue = $term;
    }

    /**
     * Get our term.
     *
     * @return string
     */
    public function getTerm()
    {
        return isset($this->freevalue) ? $this->freevalue : $this->term;
    }
}
