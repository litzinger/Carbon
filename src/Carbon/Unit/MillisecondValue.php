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
 * Represents the value for a given time unit.
 */
final class MillisecondValue implements UnitValueInterface
{
    public function __construct(
        private readonly int $value,
    ) {
    }

    public function getUnit(): UnitInterface
    {
        return new Microsecond();
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function excludeMilliseconds(): int
    {
        return $this->value % 1e3;
    }

    public function asSeconds(): float
    {
        return $this->value * 1e-6;
    }
}
