<div>
	@if($isModal)
                @include('livewire.create')
    @endif

	@foreach ($posts as $post)
	<div class="p-4 my-4 bg-white shadow-xl rounded-md">
		<div>

<!-- tombol dropdown -->
			<div class=" float-right hidden sm:flex sm:items-center sm:ml-6">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
						<img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath fill='%23000' fill-rule='nonzero' d='M4 9.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm8 0a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm8 0a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm-16 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm8 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm8 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z'/%3E %3C/svg%3E"/>
                    </x-slot>


                    <x-slot name="content">
                        <!-- isi dropdown  -->
                        @if($post->user->id == Auth::user()->id)
							<x-jet-dropdown-link wire:click="edit({{ $post->id }})">
                            	{{ __('Edit Post') }}
                        	</x-jet-dropdown-link>

                        	<x-jet-dropdown-link wire:click="delete({{ $post->id }})">
                                {{ __('Delete') }}
                        	</x-jet-dropdown-link>

                        @else
                        	<x-jet-dropdown-link wire:click="delete({{ $post->id }})">
                            	{{ __('Report') }}
                        	</x-jet-dropdown-link>

						@endif
                    </x-slot>
                </x-jet-dropdown>
			</div>


				
		

			<!-- box post -->	
			<img class="float-left h-12 w-12 rounded-full mr-2 object-cover" src="{{ $post->user->profile_photo_url }}"/>
			<span>
				<div class="mt-2">
					<div class="text-xl font-bold">{{ $post->user->name }}</div>
					<div class="text-gray-500">{{ $post->created_at->diffForHumans() }}</div>
				</div>
			</span>
		</div>
			<div class="mt-5">
					<p class="block clear-both">{{ $post->body }}</p>	
			</div>
	</div>
	@endforeach
</div>
