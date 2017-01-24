<?php

namespace AppBundle\Service;

class CustomDateService
{
    public function getCurrentTime()
    {
        return date('d/m/Y H:i:s');
    }
}
