<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | E-Learning</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-500 via-cyan-500 to-green-400">

    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Login E-Learning</h2>
            <p class="text-sm text-gray-500">Silakan masuk ke akun Anda</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    required autofocus
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
            </div>

            <!-- Role Select -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Login sebagai</label>
                <select name="role" id="role" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox" name="remember"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                    Remember me
                </label>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-4">
                <div class="flex flex-col sm:flex-row sm:items-center text-sm text-gray-600 space-y-1 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">
                        Lupa password?
                    </a>
                    <span>
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">
                            Daftar di sini
                        </a>
                    </span>
                </div>

                <button type="submit"
                    class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-green-500 border border-transparent rounded-md font-semibold text-sm text-white shadow-sm hover:from-blue-700 hover:to-green-600 transition">
                    Masuk
                </button>
            </div>
        </form>
    </div>
</body>
</html>
