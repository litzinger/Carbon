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

use Carbon\CarbonInterface;
use DateTimeInterface;

/**
 * @psalm-immutable
 *
 * Represents a time unit, such as
 * millennium, century, decade, year, quarter, month, week, day, hour, minute, second, millisecond, microsecond
 *
 * You can use it to represent other units.
 *
 * A time unit using this interface MUST:
 * - have a constant a single name, "season", "moon", "shift", "quarter of an hour"
 *   if the unit cannot be named in a way that is always the same and applicable
 * - return a UnitValueInterface for any given valid datetime.
 *
 * A time unit using this interface CAN:
 * - be defined by a fixed amount of another unit
 *   (such as 1 hour = 60 minutes)
 * - be defined by a more rule, list of intervals
 *   (such as 1 month = N days, with N depending on the current year and month)
 */
interface UnitInterface
{
    /**
     * Unit object must be immutable, so getName() should always return the same
     * value if called multiple times on a given instance.
     */
    public function getName(): string;

    /**
     * Return a value (that can be represented by a number) for any given datetime.
     *
     * @param DateTimeInterface|CarbonInterface|string|int|float $dateTime can be any representation of a date-time
     *                                                                     that Carbon constructor supports.
     *                                                                     It assumes that `new Carbon($dateTime)`
     *                                                                     can be used to represent this parameter.
     *                                                                     So int|float is UNIX timestamp,
     *                                                                     string is an absolute or relative date/time
     *                                                                     string.
     */
    public function valueForDateTime($dateTime): UnitValueInterface;
}
