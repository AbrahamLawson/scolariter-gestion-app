<div class="mg-5">
    <div class="bg-fuchsia-300 overflow-hidden shadow-xl sm:rounded-lg p-8">
        {{-- Titre et Boutton Créer --}}
        <div class="flex justify-between items-center">
            <h4 class="text-white font-bold">Liste des Années scolaires</h4>
            <a href="{{route('settings.create-school-year')}}" class="bg-fuchsia-500 hover:bg-fuchsia-700 text-white font-bold py-2 px-4 rounded">
                Nouvelle Année Scolaire
            </a>
        </div>

        {{-- Message apres une action --}}
        <div class="flex flex-col">
            <div class="block p-2 bg-emerald-400 text-white rounded-sm shadow-sm mt-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </div>
        </div>

        {{-- Tableau --}}
        <div class="overflowx-auto sm:mx-6 lg:mx-8 mt-4">
            <div class="overflow-hidden">
                <table class="min-w-full text-center">
                    <thead class="border-b bg-gray-50">
                        <tr>
                            <th class="text-sm font-medium text-gray-900 py-6 px-6">Année</th>
                            <th class="text-sm font-medium text-gray-900 py-6 px-6">Année</th>
                            <th class="text-sm font-medium text-gray-900 py-6 px-6">Année</th>
                            <th class="text-sm font-medium text-gray-900 py-6 px-6">Année</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="border-b-4 border-gray-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2020</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2021</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2022</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2023</td>
                        </tr>
                        <tr class="border-b-4 border-gray-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2020</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2021</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2022</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2023</td>
                        </tr>
                    </tbody>
                </table>

                {{-- Pagination --}}

            </div>
        </div>

    </div>



</div>