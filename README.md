# PHP Type Coercion Bug
This repository demonstrates a common bug in PHP involving type coercion during comparisons.  The `bar` function incorrectly uses loose comparison (`==`) instead of strict comparison (`===`), leading to unexpected results when comparing values of different types.

## Bug Description
The `bar` function intends to compare two values (`a` and `b`) for equality.  However, it uses loose comparison (`==`), which allows for type coercion. This means that PHP will attempt to convert the values to a compatible type before comparison, leading to potentially incorrect results if the types are different.

## Solution
The `foo` function provides a correct solution using strict comparison (`===`). Strict comparison does not allow for type coercion, ensuring that the function returns `true` only if both the values and their types are identical.