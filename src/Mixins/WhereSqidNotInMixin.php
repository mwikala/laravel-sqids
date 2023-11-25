<?php

declare(strict_types=1);

namespace RedExplosion\Sqids\Mixins;

use Closure;
use Illuminate\Database\Eloquent\Builder;

/** @mixin Builder */
class WhereSqidNotInMixin
{
    public function whereSqidNotIn(): Closure
    {
        return function (array $sqids, $boolean = 'and') {
            /** @phpstan-ignore-next-line  */
            return $this->whereSqidIn(sqids: $sqids, boolean: $boolean, not: true);
        };
    }
}
