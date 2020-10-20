<div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<h1 class="font-bold mb-2">Create Post</h1>
                <textarea wire:model="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="What do u think?"></textarea>

                <div class="flex justify-end">
                    <button wire:click="createPost" class="mt-2 px-4 py-2 bg-blue-600 text-white hover:bg-blue-300 rounded-md">Post</button>
                </div>
</div>
