<x-layout>
    @include('partials._search')

    <div class="flex justify-between mx-12">
    <a href="/"
        class="bg-gray-50 inline-block border border rounded-lg text-black p-2 mb-4
        hover:border-red-500 hover:text-red-500"><i
            class="fa-solid fa-arrow-left hover:text-red-500"></i> <span class="text-xl">Back</span>
    </a>
    <a href="/bands/{{ $band->id }}/edit"
        class="bg-gray-50 ml-12 inline-block border border rounded-lg text-black p-2 mb-4
        hover:bg-black hover:text-white">
        <i class="fa-solid fa-pencil"></i> <span class="text-xl">Edit</span>
    </a>
</div>

    <div class="mx-12">
        <x-card class="mx-0">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="{{ $band->logo ? asset('storage/' . $band->logo) : asset('/images/no-image.png') }}"
                    alt="band-image" />
                <h3 class="text-2xl mb-2">{{ $band->name }}</h3>
                <div class="text-xl font-bold mb-4">{{ $band->ticket }}</div>
                <x-band-tags :tags="$band->tags" />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $band->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div class="lg:w-1/2">
                    <h3 class="text-3xl font-bold mb-4">
                        Band Description
                    </h3>
                    <div class="text-lg justify-center items-center flex flex-col space-y-6">{{ $band->description }}
                        <a href="mailto:{{ $band->email }}"
                            class="w-full lg:w-1/2 bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact the Band</a>
                        <a href="{{ $band->website }}" target="_blank"
                            class="block w-full lg:w-1/2 bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">

        </x-card>
    </div>
</x-layout>
