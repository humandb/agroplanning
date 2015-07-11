<?php

namespace AgroPlanning\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AgroPlanningUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
