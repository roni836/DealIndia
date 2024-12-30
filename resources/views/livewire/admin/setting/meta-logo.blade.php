<div class="col-lg-6">
    <div class="border rounded-lg shadow-sm bg-white">
        <!-- Card Header -->
        <div class="border-b py-2 px-4 flex items-center justify-between">
            <h5 class="text-lg font-medium text-gray-700">Meta Logo</h5>
            <button 
                wire:click="toggle" 
                class="text-blue-500 underline hover:text-blue-700 transition focus:outline-none"
            >
                {{ !$isEdit ? 'Edit' : 'Cancel' }}
            </button>
        </div>

        <!-- Card Body -->
        <div class="p-4">
            <div class="flex items-center gap-4">
                @if ($isEdit)
                    <div class="flex flex-col w-full">
                        <input 
                            wire:model="meta_logo" 
                            type="file" 
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="Meta logo section"
                            id="meta_logo"
                        />
                        <button 
                            wire:click="update" 
                            type="submit" 
                            class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600 transition"
                        >
                            Save
                        </button>
                    </div>
                @else
                    <p class="text-gray-700 text-base mb-0">
                        @if (!empty($meta_logo))
                            <div class="mx-auto">
                                <div wire:loading wire:target="toggle" class="py-3">
                                    <div class="animate-spin rounded-full h-6 w-6 border-t-2 border-blue-500"></div>
                                    <p class="mt-2 text-sm text-gray-500">Loading...</p>
                                </div>
                                <div wire:loading.remove wire:target="toggle" class="text-center">
                                    <img 
                                        src="{{ asset('storage/images/setting/' . $meta_logo) }}" 
                                        alt="meta logo" 
                                        class="w-1/2 h-auto rounded-md shadow"
                                    />
                                </div>
                            </div>
                        @else
                            <div class="text-center">
                                <div wire:loading wire:target="toggle" class="py-3">
                                    <div 
                                        class="h-2 bg-blue-500 rounded-full animate-pulse w-1/4 mx-auto"
                                        role="status"
                                    ></div>
                                    <p class="mt-2 text-sm text-gray-500">Loading...</p>
                                </div>
                                <h1 class="text-2xl font-medium text-gray-400">Logo Upload Here</h1>
                            </div>
                        @endif
                    </p>
                @endif
            </div>
            @error('meta_logo')
                <p class="text-sm text-red-500 mt-2">Meta logo should be of dimension 300 x 100</p>
            @enderror
        </div>
    </div>
</div>
