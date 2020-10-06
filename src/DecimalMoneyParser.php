<?php

declare(strict_types=1);

namespace TTBooking\SafeMoneyParser;

use Money\Currencies;
use Money\Parser\DecimalMoneyParser as OriginalMoneyParser;

final class DecimalMoneyParser extends FallbackMoneyParser
{
    /**
     * @param Currencies $currencies
     */
    public function __construct(Currencies $currencies)
    {
        parent::__construct(new OriginalMoneyParser($currencies));
    }
}
