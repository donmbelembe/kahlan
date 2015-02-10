<?php
namespace kahlan\matcher;

class ToContain
{
    /**
     * Expect that `$actual` contain the `$expected` value.
     *
     * @param  collection $actual The actual value.
     * @param  mixed      $expected The expected value.
     * @return boolean
     */
    public static function match($actual, $expected)
    {
        if (is_string($actual)) {
            return strpos($expected, $actual) !== false;
        } elseif (is_array($actual)) {
            foreach ($actual as $key => $value) {
                if ($value === $expected) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Returns the description message.
     *
     * @return string The description message.
     */
    public static function description()
    {
        return "contain expected.";
    }
}
