<?php

declare(strict_types=1);

namespace App\Commands;

final class CreateYearCommand
{
    public function __construct(public int $schoolYear) {}

}