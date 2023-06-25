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
 * Represents the value for a given time unit that can be named such as
 * "January" for the month unit or "Monday" for the week unit.
 */
interface NamedUnitValueInterface extends UnitValueInterface
{
    public function getName(): string;
}
