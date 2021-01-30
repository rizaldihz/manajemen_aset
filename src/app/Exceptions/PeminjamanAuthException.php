<?php

namespace App\Exceptions;

use Exception;

class PeminjamanAuthException extends Exception
{
    public function report()
    {
        \Log::debug('User tidak terautentikasi');
    }
}
