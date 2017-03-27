<?php

namespace Gins\Genders;

class Androgyne extends \Gins\Gender
{
    /**
     * The english term for the gender.
     *
     * @var string
     */
    protected $term = "Androgyne";

    /**
     * The value used to id this gender.
     *
     * @var string
     */
    protected $value = "and";

    /**
     * Construct our gender
     *
     * @return $this
     */
    public function __construct()
    {
        $this->noun = new \Gins\Pronouns\Ze();
    }
}
