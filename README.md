# Number Format Precision

<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_precision/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_precision/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_precision/license.svg" alt="License"></a>

![Number Format Precision](https://cdn.davidvandertuijn.nl/github/number_format_precision.png)

PHP built-in function **number_format** rounds by default, this library truncates decimals without rounding.

## Install

```
composer require davidvandertuijn/number_format_precision
```

## Usage

Using PHP built-in function **number_format**:

```php
number_format(1234.5678, 2, '.', ''); // 1234.57
```

Using **number_format_precision**:

```php
number_format_precision(1234.5678, 2, "int")); // 1234.56
number_format_precision(1234.5678, 2, "string")); // "1234.56"
```

