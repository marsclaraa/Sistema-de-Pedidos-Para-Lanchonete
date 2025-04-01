<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-4 text-2xl font-bold text-center">Login</h2>

        @if(session()->has('error'))
            <div class="mb-3 text-red-600">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="login">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">E-mail</label>
                <input type="email" id="email" wire:model="email" class="w-full p-2 border rounded">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Senha</label>
                <input type="password" id="password" wire:model="password" class="w-full p-2 border rounded">
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full p-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                Entrar
            </button>
        </form>
    </div>
</div>
