<div>

    <form wire:submit.prevent="register" class="space-y-6 max-w-md mx-auto mt-8">
        <div>
            <input type="text" wire:model="name"
                   class="w-full px-4 py-3 border border-gray-300 rounded-md text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                   placeholder="Full Name" 
                   required />
            @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <input type="email" wire:model="email"
                   class="w-full px-4 py-3 border border-gray-300 rounded-md text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                   placeholder="Email Address"
                   required />
            @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <input type="text" wire:model="mobile"
                   class="w-full px-4 py-3 border border-gray-300 rounded-md text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                   placeholder="Phone Number"
                   required />
            @error('mobile') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit"
                style="color: #000; padding: 14px 24px; font-size: 16px; font-weight: bold; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease;background-color: #facc15;color: #000; padding: 20px 40px; font-size: 22px;       font-weight: bold; border: none; border-radius: 12px; cursor: pointer; transition: background-color 0.3s ease;">
            JOIN THE CHALLENGE NOW!
        </button>

        @if (session('status'))
  	        <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center text-xl">
  	            {{ session('status') }}
  	        </div>
  	    @endif
    </form>

    <script>
        window.addEventListener('redirectAfterDelay', () => {
            setTimeout(() => {
                window.location.href = '/testimonials';
            }, 3000);
        });
    </script>
</div>

