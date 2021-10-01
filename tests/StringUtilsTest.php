<?php

namespace StringUtilsTest;

require_once __DIR__ . '/../vendor/autoload.php';

use Webmozart\Assert\Assert;

Assert::eq(\StringUtils\capitalize(''), '');

Assert::eq(\StringUtils\capitalize('hello'), 'Hello');

echo "Все тесты пройдены!\n";
