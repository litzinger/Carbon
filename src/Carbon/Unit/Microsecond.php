<?php

declare(strict_types=1);

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon\Unit;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;
use DateTimeInterface;

final class Microsecond implements UnitInterface
{
    public function getName(): string
    {
        return 'microsecond';
    }

    public function valueForDateTime(
        DateTimeInterface|CarbonInterface|string|int|float $dateTime,
    ): UnitValueInterface {
        return new MicrosecondValue(CarbonImmutable::make($dateTime)->microsecond);
    }
}
