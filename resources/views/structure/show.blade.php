<x-app-layout>

    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter une nouvelle structure') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex justify-end my-8">
                        <span class="block w-8 cursor-pointer"  id="btnprn">
                            <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-black" fill-rule="evenodd">
                                    <g id="icon-shape">
                                        <path
                                            d="M16,16 L20,16 L20,6 L0,6 L0,16 L4,16 L4,10 L16,10 L16,16 Z M4,10 L16,10 L16,20 L4,20 L4,10 Z M6,12 L14,12 L14,18 L6,18 L6,12 Z M4,0 L16,0 L16,5 L4,5 L4,0 Z M2,8 L4,8 L4,10 L2,10 L2,8 Z M6,8 L8,8 L8,10 L6,10 L6,8 Z"
                                            id="Combined-Shape"></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Code Structure</h3>
                            <span class="block text-xs text-gray-500">{{$structer->code_structer}}</span>
                        </div>
                        
                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Date Cr??ation</h3>
                            <span class="block text-xs text-gray-500">{{$structer->date_creation}}</span>
                        </div>

                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Type Structure</h3>
                            <span class="block text-xs text-gray-500">{{$structer->type_structure}}</span>
                        </div>

                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Matricule fiscale</h3>
                            <span class="block text-xs text-gray-500">{{$structer->matricule_fiscale}}</span>
                        </div>

                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Jort Creation</h3>
                            <span class="block text-xs text-gray-500">{{$structer->jort_creation}}</span>
                        </div>

                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Num??ro Compte Bancaire</h3>
                            <span class="block text-xs text-gray-500">{{$structer->num_compte_bancaire}}</span>
                        </div>

                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Delegation</h3>
                            <span class="block text-xs text-gray-500">{{$structer->delegation->nom}}</span>
                        </div>

                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Cr??e le</h3>
                            <span class="block text-xs text-gray-500">{{$structer->created_at->diffForHumans()}}</span>
                        </div>

                        <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                            <h3 class="font-bold text-sm ">Derni??re mise a jour</h3>
                            <span class="block text-xs text-gray-500">{{$structer->updated_at->diffForHumans()}}</span>
                        </div>

                        
                    </div>
                    <h1 class="my-5 font-bold text-lg">Membres:</h1>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($members as $member)
                            
                            <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                                <h3 class="font-bold text-sm ">Nom</h3>
                                <span class="block text-xs text-gray-500">{{$member->firstname}}</span>
                            </div>
                            <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                                <h3 class="font-bold text-sm ">Code Adh??rent</h3>
                                <span class="block text-xs text-gray-500">{{$member->code_adherent}}</span>
                            </div>
                            <div class="w-full py-3 px-3 bg-white border border-gray-200 rounded shadow-xl">
                                <h3 class="font-bold text-sm ">Type</h3>
                                <span class="block text-xs text-gray-500">{{$member->type_adherent}}</span>
                            </div>
                        @endforeach
                    </div>


                    <div class="flex justify-end my-8">
                        <a href="{{route('structures.index')}}" class="bg-gray-200 px-4 py-2 rounded-xl">Fermer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
