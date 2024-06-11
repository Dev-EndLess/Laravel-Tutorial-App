<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Band
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
              @unless($bands->isEmpty())
              @foreach($bands as $band )

                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="show.html">
                            {{$band->name}}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/bands/{{$band->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                class="fa-solid fa-pen-to-square"></i>
                            Edit</a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                      <form method="POST" action="/bands/{{ $band->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-gray-50 ml-12 inline-block border border-red-500 rounded-lg text-red-500 p-2 mb-4
                        hover:bg-red-500 hover:text-white hover:cursor-pointer">
                            <i class="fa-solid fa-trash"></i> <span class="text-xl">Delete</span>
                        </button>
                    </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="border gray">
                  <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">No Bands Found</p>
                  </td>
                </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>
