<x-guest-layout>
    <div class="text-center mt-20">
        <h1 class="text-3xl font-bold mb-6">Selamat Datang di E-Learning</h1>
        
        <div class="space-x-4">
            <form method="GET" action="{{ route('login') }}">
                <input type="hidden" name="role" value="user">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Login sebagai User</button>
            </form>

            <form method="GET" action="{{ route('login') }}">
                <input type="hidden" name="role" value="admin">
                <button class="bg-green-500 text-white px-4 py-2 rounded">Login sebagai Admin</button>
            </form>
        </div>
    </div>
</x-guest-layout>
