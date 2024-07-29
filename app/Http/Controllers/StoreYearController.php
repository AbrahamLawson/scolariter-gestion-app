<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Application\SchoolYears\Commands\CreateYearCommand;
use App\Application\SchoolYears\Handlers\CreateYearCommandHandler;
use App\Http\Requests\StoreYearRequest;
use Illuminate\Http\RedirectResponse;

final class StoreYearController extends Controller
{
    private CreateYearCommandHandler $createYearCommandHandler;
    public function __construct(CreateYearCommandHandler $createYearCommandHandler)
    {
        $this->createYearCommandHandler = $createYearCommandHandler;
    }
    public function __invoke(StoreYearRequest $request): RedirectResponse
    {
        $schoolYear = (int) $request->get('school_year');
        $command = new CreateYearCommand($schoolYear);

        $this->createYearCommandHandler->handle($command);

        return redirect()->route('settings')->with('success', 'Année ajouter avec succès');
    }
}
