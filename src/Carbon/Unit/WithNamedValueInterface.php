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

interface WithNamedValueInterface
{
    /**
     * Return a value (that can be represented either by a number or by a name)
     * for any given datetime.
     *
     * @param DateTimeInterface|CarbonInterface|string|int|float $dateTime can be any representation of a date-time
     *                                                                     that Carbon constructor supports.
     *                                                                     It assumes that `new Carbon($dateTime)`
     *                                                                     can be used to represent this parameter.
     *                                                                     So int|float is UNIX timestamp,
     *                                                                     string is an absolute or relative date/time
     *                                                                     string.
     */
    public function valueForDateTime($dateTime): NamedUnitValueInterface;
}
