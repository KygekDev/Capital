<?php

declare(strict_types=1);

namespace SOFe\Capital\Transfer;

use SOFe\Capital\MainClass;

/**
 * A method to initiate money transfer between accounts.
 */
interface TransferMethod {
    public function register(MainClass $plugin) : void;
}
