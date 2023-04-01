<?php

declare(strict_types=1);

namespace Flat3\Lodata\Tests\Count;

use Flat3\Lodata\Tests\Drivers\WithCSVDriver;

/**
 * @group csv
 */
class CSVTest extends Count
{
    use WithCSVDriver;
}
