@props(['band'])

<x-card class="mx-12">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="images/no-image.png" alt="laravel-image" />
        <div>
            <h3 class="text-xl mb-1">
                <a href="/bands/{{ $band->id }}">Guest Band:  <span class="text-2xl font-bold">{{ $band->name }}</span></a>
            </h3>
            <div class="text-xl text-red-500 font-bold mb-4">Ticket Price: <span class="text-black">{{ $band->ticket }}</span></div>
            <x-band-tags :tags="$band->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{ $band->location }}
            </div>
        </div>
    </div>
</x-card>
