<?php

namespace App\Livewire;

use App\Domain\SchoolYears\Models\SchoolYear;
use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        $schoolYearList = SchoolYear::paginate(10);
        return view('livewire.settings', compact('schoolYearList'));
    }
}
