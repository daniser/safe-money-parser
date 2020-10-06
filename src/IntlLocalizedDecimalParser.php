<?php

declare(strict_types=1);

namespace TTBooking\SafeMoneyParser;

use Money\Currencies;
use Money\Parser\IntlLocalizedDecimalParser as OriginalMoneyParser;
use NumberFormatter;

final class IntlLocalizedDecimalParser extends FallbackMoneyParser
{
    /**
     * @param NumberFormatter $formatter
     * @param Currencies $currencies
     */
    public function __construct(NumberFormatter $formatter, Currencies $currencies)
    {
        parent::__construct(new OriginalMoneyParser($formatter, $currencies));
    }
}
