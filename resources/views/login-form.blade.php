<div>
    <body>
        <div class="h-screen bg-blue-500 flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
                <div class="flex justify-center mb-6">
                    <img src="https://i.ibb.co.com/Byfjjmh/Screenshot-2024-04-22-043255-1.png" alt="Logo Profile" class="w-40 h-30">
                </div>
                <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

                @if ($errorMessage)
                    <div class="bg-red-200 text-red-800 p-2 rounded mb-4">
                        {{ $errorMessage }}
                    </div>
                @endif
                <form wire:submit.prevent="login">
                    <div class="mb-4">
                        <label for="username" class="block font-medium mb-1">Username</label>
                        <input type="text" id="username" wire:model="username" class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block font-medium mb-1">Password</label>
                        <input type="password" id="password" wire:model="password" class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </body>
</div>
