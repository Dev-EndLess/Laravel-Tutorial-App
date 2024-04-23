<x-layout>
    <div class="mx-4">
        <x-card class="p-10 max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold mb-1">
                    Create new Event
                </h2>
                <p class="mb-4">Post a new Event for your Band</p>
            </header>

            <form method="POST" action="/bands">
                {{-- This tag protect from CSRF (Cross-Site Request Forgery) attack --}}
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">Band Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="ticket" class="inline-block text-lg mb-2">Ticket Price</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="ticket"
                        placeholder="Example: 20€" />
                    @error('ticket')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">Event Location</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                        placeholder="Example: Bologna, Estragon Club" />
                    @error('location')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="website" class="inline-block text-lg mb-2">
                        Website URL
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" />
                    @error('website')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Tags (Genre)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                        placeholder="Example: Death Metal, Melodic Death, Techinical Death" />
                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Band Logo
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                    @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                </div> --}}

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">
                        Band Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                        placeholder="Include tasks, requirements, salary, etc"></textarea>
                        @error('description')
                        <p class="text-red-500 text-base mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Launch Event
                    </button>

                    <a href="/" class="bg-white border text-black rounded py-2 px-4 hover:bg-gray-200"> Back </a>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>
