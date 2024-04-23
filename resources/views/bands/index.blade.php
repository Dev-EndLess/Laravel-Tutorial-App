<x-layout>
    @include('partials._hero')
    @include('partials._search')

    @if (count($bands) == 0)
        <p>No Bands found</p>
    @endif

    @foreach ($bands as $band)
        <x-band-card :band="$band" />
    @endforeach
</x-layout>
