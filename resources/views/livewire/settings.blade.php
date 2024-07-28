 <div class="mg-5 ">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
        {{-- Titre et Boutton Créer --}}
        <div class="flex justify-between items-center">
            <h4 class="text-black font-bold">Liste des Années scolaires</h4>
            <a href="{{route('settings.create-school-year')}}" class="hover:bg-fuchsia-700 text-black font-bold py-2 px-4 rounded border border-solid border-fuchsia-700">
                Nouvelle Année Scolaire
            </a>
        </div>

        {{-- Message apres une action --}}
        <div class="flex flex-col">
            @if(session('success'))
                <div class="block p-2 bg-emerald-400 text-white rounded-sm shadow-sm mt-2 max-w-md mx-auto">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        {{-- Tableau --}}
        <div class="overflowx-auto sm:mx-6 lg:mx-8 mt-4">
            <div class="overflow-hidden">
                <table class="min-w-full text-center">
                    <thead class="border-b bg-gray-50">
                        <tr>
                            <th class="text-sm font-medium text-gray-900 py-6 px-6">Id</th>
                            <th class="text-sm font-medium text-gray-900 py-6 px-6">Année Scolaire</th>
                            <th class="text-sm font-medium text-gray-900 py-6 px-6">Statut</th>
                            <th class="text-sm font-medium text-gray-900 py-6 px-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($schoolYearList as $schoolYear)
                            <tr class="border-b-4 border-gray-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$schoolYear->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$schoolYear->school_year}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    @if($schoolYear->active === '1')
                                        <span class="p-1 bg-green-600 text-white text-sm rounded-sm"> Actif </span>
                                    @else
                                        <span class="p-1 bg-red-600 text-white text-sm rounded-sm"> Inactif </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    @if($schoolYear->active === '1')
                                        <button class="p-1 border-2 border-solid border-red-600 rounded-sm hover:bg-red-600 "> Rendre Inactif</button>
                                    @else
                                        <button class="p-1 border-2 border-solid border-green-600 rounded-sm hover:bg-green-600"> Rendre Actif </button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                        @endforelse
                    </tbody>
                </table>

                {{-- Pagination --}}
                <div class="mt-1">
                    {{$schoolYearList->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
