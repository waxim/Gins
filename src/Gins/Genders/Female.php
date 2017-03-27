<?php

namespace Gins\Genders;

class Female extends \Gins\Gender
{
    /**
     * The english term for the gender.
     *
     * @var string
     */
    protected $term = "Female";

    /**
     * The value used to id this gender.
     *
     * @var string
     */
    protected $value = "f";

    /**
     * Construct our gender
     *
     * @return $this
     */
    public function __construct()
    {
        $this->noun = new \Gins\Pronouns\She();
    }
}
