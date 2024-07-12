<div class="p-3 bg-white shadow-sm">
    {{-- Formulaire --}}
    <form method="POST" action="{{ route('settings.store-year') }}">
        @csrf
        @method('POST')
        <div class="p-5 flex flex-col items-center justify-center text-sm font-bold">
            <label for="school_year">Libeller de l'année scolaire</label>
            <input type="text" name="school_year" id="school_year" value="{{ old('school_year') }}" class="block mt-1 rounded-md border-gray-200" required/>
            @error('school_year')
                <div class="text-sm text-red-500 mt-2">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="p-3 flex items-center justify-center">
            <button type="submit" class="bg-fuchsia-400 hover:bg-fuchsia-700 text-black font-bold py-2 px-4 rounded-md mr-6">Créer</button>

            <a href="{{route('settings')}}" class="bg-red-300 hover:bg-red-700 text-black font-bold py-2 px-4 rounded-md border">Annuler</a>
        </div>
    </form>
</div>
