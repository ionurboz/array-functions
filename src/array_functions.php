<?php

namespace Spatie;

/**
 * Get a random value from an array.
 *
 * @param array $array
 *
 * @return string
 */
function array_rand_value(array $array)
{
    if (! count($array)) {
        return;
    }

    $index = array_rand($array);

    return $array[$index];
}

/**
 * Determine if all given needles are present in the haystack.
 *
 * @param array|string $needles
 * @param array $haystack
 * @return bool
 */
function values_in_array($needles, array $haystack)
{
    if (! is_array($needles)) {
        $needles = [$needles];
    }

    return count(array_intersect($needles, $haystack)) == count($needles);
}
