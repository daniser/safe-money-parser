<?php

declare(strict_types=1);

namespace TTBooking\SafeMoneyParser;

use Money\MoneyParser;
use Money\Parser\AggregateMoneyParser as OriginalMoneyParser;

final class AggregateMoneyParser extends FallbackMoneyParser
{
    /**
     * @param MoneyParser[] $parsers
     */
    public function __construct(array $parsers)
    {
        parent::__construct(new OriginalMoneyParser($parsers));
    }
}
