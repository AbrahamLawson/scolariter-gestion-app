<?php

declare(strict_types=1);

namespace App\Application\SchoolYears\Handlers;

use App\Application\SchoolYears\Commands\CreateYearCommand;
use App\Domain\SchoolYears\Models\SchoolYear;
use Illuminate\Support\Facades\DB;

final class CreateYearCommandHandler
{
    public function handle(CreateYearCommand $command)
    {
        return DB::transaction(function () use ($command) {
            $schoolYear = new SchoolYear();
            $schoolYear->school_year = $command->schoolYear;
            $schoolYear->save();
        });
    }
}
