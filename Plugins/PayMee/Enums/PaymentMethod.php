<?php

namespace PayMee\Enums;

/**
 * Class PaymentMethod
 *
 * @package PayMee\Enums
 */
abstract class PaymentMethod extends BasicEnum
{
    const BB_TRANSFER = "BB_TRANSFER";
    const BRADESCO_TRANSFER = "BRADESCO_TRANSFER";
    const ITAU_TRANSFER_GENERIC = "ITAU_TRANSFER_GENERIC";
    const ITAU_TRANSFER_PF = "ITAU_TRANSFER_PF";
    const ITAU_TRANSFER_PJ = "ITAU_TRANSFER_PJ";
    const ITAU_DI = "ITAU_DI";
    const SANTANDER_TRANSFER = "SANTANDER_TRANSFER";
    const SANTANDER_DI = "SANTANDER_DI";
}
