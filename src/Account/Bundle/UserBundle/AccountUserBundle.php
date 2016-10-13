<?php

namespace Account\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AccountUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
