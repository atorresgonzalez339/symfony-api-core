<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 4/8/2021
 * Time: 5:11 PM
 */

namespace App\Service;


class ServiceTest
{
    public function dummyService(): int
    {
        return rand(1,100);
    }
}