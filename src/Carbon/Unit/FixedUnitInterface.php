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

/**
 * @psalm-immutable
 *
 * Represents a time unit that can be obtained by multiplying another unit by a fixed multiplier such as
 * millennium, century, decade, year, quarter, week, hour, minute, second, millisecond, microsecond.
 *
 * You can use it to represent other units.
 *
 * You can return a non-zero value with getBase() (that will be added before the multiplication) to shift
 * all value (for instance, if getMultipliedUnit() return "month", the value will be an integer between 1 and 12,
 * but if getBase() return -1, then it will be an integer between 0 and 11.
 *
 * A fixed time unit using this interface MUST:
 * - respect UnitInterface contract
 * - have value that can be represented by a number which always equal ($multipliedUnit + $base) * $multiplier
 */
interface FixedUnitInterface extends UnitInterface
{
    /**
     * Unit object must be immutable, so getMultipliedUnit() should always return the same
     * value if called multiple times on a given instance.
     */
    public function getMultipliedUnit(): UnitInterface;

    /**
     * Unit object must be immutable, so getMultiplier() should always return the same
     * value if called multiple times on a given instance.
     */
    public function getMultiplier(): float;

    /**
     * Unit object must be immutable, so getBase() should always return the same
     * value if called multiple times on a given instance.
     */
    public function getBase(): float;
}
