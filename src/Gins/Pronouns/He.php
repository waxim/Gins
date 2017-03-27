<?php

namespace Gins\Pronouns;

class He extends \Gins\Pronoun
{
    /**
     * Store a value for this pronoun.
     *
     * @var string
     */
    protected $value = 'he';

    /**
     * The Subject noun.
     *
     * @var string
     */
    protected $subject = 'He';

    /**
     * The Object noun.
     *
     * @var string
     */
    protected $object = 'Him';

    /**
     * The Possessive noun.
     *
     * @var string
     */
    protected $possessive = 'His';

    /**
     * The Possessive Plural noun.
     *
     * @var string
     */
    protected $possessive_plural = 'His';

    /**
     * The Reflection noun.
     *
     * @var string
     */
    protected $reflective = 'Himself';
}
