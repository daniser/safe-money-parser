<?php

declare(strict_types=1);

namespace TTBooking\SafeMoneyParser;

use Money\Parser\BitcoinMoneyParser as OriginalMoneyParser;

final class BitcoinMoneyParser extends FallbackMoneyParser
{
    /**
     * @param int $fractionDigits
     */
    public function __construct($fractionDigits)
    {
        parent::__construct(new OriginalMoneyParser($fractionDigits));
    }
}
