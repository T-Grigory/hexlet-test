<?php

namespace StringUtilsTest;

use Webmozart\Assert\Assert;

Assert::eq(\StringUtils\capitalize(''), '');

Assert::eq(\StringUtils\capitalize('hello'), 'Hello');

echo "Все тесты пройдены!\n";
