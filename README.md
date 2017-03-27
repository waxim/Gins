[![Build Status](https://travis-ci.org/waxim/Gins.svg?branch=master)](https://travis-ci.org/waxim/Gins) [![StyleCI](https://styleci.io/repos/86361220/shield?branch=master)](https://styleci.io/repos/86361220)

# Gins
Gins (Gender is not sex) is a PHP library that provides you with a host of options for genders and pronouns for your users and customers. Too often I arrive at a site with the form field "Gender" and only "Male/Female" as options. We don't live in that world any more. So this attempts to help developers fix that.

This is by no means comprehensive but hopefully people will help expand it over time and its a marked improvement on the binary way of thinking.

## Genders
We provide a comprehensive list of genders to select from.

```php
$genders = new Gins\Genders();

echo "<select name='gender'>";
foreach ($genders as $gender) {
    echo "<option value='" . $gender->getValue() . "'>";
        echo $gender->getTerm();
    echo "</option>";
}
echo "</select>";
```

Genders will also allow you to pass in a value, and get its term.

```php
$genders = new Gins\Genders();

try {
    $gender = $genders->findOrFailByValue("m");
    print $gender->getTerm(); // "Male"
} catch (GenderNotRegistered $e) {
    print "We couldn't find that gender"
}
```

or pass a term and get a value.

```php
$genders = new Gins\Genders();

try {
    $gender = $genders->findOrFailByTerm("Male");
    print $gender->getValue(); // "m"
} catch (GenderNotRegistered $e) {
    print "We're sorry but we don't have your gender listed,
    but we've logged its term and will get it added soon.";
}
```

Some genders will presume a pronoun to save on inputs if you wish but its normally best to ask people how they like to be identified so you should use these assumptions with caution.

```php
$pronoun = $gender->getPronoun();
print $pronoun->getNoun(); // "He"
```

You may set the pronoun to any valid pronoun object.
```php
$gender->setPronoun($noun);
```

## Pronouns
This is a list of accepted or used pronouns and their derivations. There are 5 standard derivations of pronouns in English. Subject "He/She", Object "Him/Her", Possessive "His/Her", Possessive Pronoun (Plural) "His/Hers", Reflexive "Himself/Herself"

```php
$pronouns = new Gins\Pronouns();

foreach ($pronouns as $noun) {
    print $pro->getNoun(); # He/She
    print $noun->getSubject(); # He/She
    print $noun->getObject(); # Him/Her
    print $noun->getPossessive(); # His/Her
    print $noun->getPossessivePlural(); # His/Hers
    print $noun->getReflexive(); #Himself/Herself
}
```

```php
$noun = new Gins\Pronouns\He();
```

## Expanding
Adding Genders and pronouns is as easy to building new classes which extend the base classes `Gender` or `Pronoun` if you'd like to add genders of pronouns you can start a pull request with your own and I'll merge them in.

Once you've added your own genders and pronouns you can pass them into gins either at constrct or by using the add mehtods.

```php
$custom_gender = new My\Custom\Gender();
$custom_gender_two = new My\Custom\GenderTwo();

$custom_pronoun = new My\Custom\Pronoun();

$genders->addGender($custom_gender);
$genders->addGender($custom_gender_two);

$all_genders = new Gins\Genders([$custom_gender, $custom_gender_two]); # Another way to do it,

$pronouns->addNoun($custom_pronoun);

$all_pronouns = new Gins\Pronouns([$custom_pronoun]); # Another way to do it.
```

Whilst we allow you to patch in your own genders, we'd really love it if you can make a pull request with any missing genders instead.

## Installing
```
composer require waxim/gins
```

## Testing
```
phpunit
```
