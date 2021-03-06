<?php

/**
 * This file is part of Immutable package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Serafim\Immutable\Immutable;

if (! function_exists('immutable')) {
    /**
     * @psalm-param \Closure(): void $callable
     *
     * @param Closure $expr
     * @param object|null $context
     * @return object
     */
    function immutable(\Closure $expr, object $context = null): object
    {
        return Immutable::execute($expr, $context);
    }
}
