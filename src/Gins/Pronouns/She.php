<?php

namespace Gins\Pronouns;

class She extends \Gins\Pronoun
{
    /**
     * Store a value for this pronoun.
     *
     * @var string
     */
    protected $value = 'she';

    /**
     * The Subject noun.
     *
     * @var string
     */
    protected $subject = 'She';

    /**
     * The Object noun.
     *
     * @var string
     */
    protected $object = 'Her';

    /**
     * The Possessive noun.
     *
     * @var string
     */
    protected $possessive = 'Her';

    /**
     * The Possessive Plural noun.
     *
     * @var string
     */
    protected $possessive_plural = 'Hers';

    /**
     * The Reflection noun.
     *
     * @var string
     */
    protected $reflective = 'Herself';
}
