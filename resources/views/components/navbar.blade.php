<nav class="bg-white/90 backdrop-blur-md border-b border-rose-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-rose-500 to-pink-400 flex items-center justify-center text-white font-bold text-lg shadow-sm">
                    JB
                </div>
                <span class="font-bold text-xl bg-gradient-to-r from-rose-600 to-pink-500 bg-clip-text text-transparent">
                    JennyBeauty
                </span>
            </div>

            <div class="flex items-center space-x-6 text-sm font-medium">
                <a href="{{ route('dashboard', ['username' => request('username', 'Jenny Nur Fadila')]) }}"
                   class="{{ request()->routeIs('dashboard') ? 'text-rose-600 font-bold' : 'text-slate-600 hover:text-rose-500' }}">
                    Dashboard
                </a>
                <a href="{{ route('pengelolaan', ['username' => request('username', 'Jenny Nur Fadila')]) }}"
                   class="{{ request()->routeIs('pengelolaan') ? 'text-rose-600 font-bold' : 'text-slate-600 hover:text-rose-500' }}">
                    Katalog & Pengelolaan
                </a>
                <a href="{{ route('profile', ['username' => request('username', 'Jenny Nur Fadila')]) }}"
                   class="{{ request()->routeIs('profile') ? 'text-rose-600 font-bold' : 'text-slate-600 hover:text-rose-500' }}">
                    Profile
                </a>
                <a href="{{ route('login') }}"
                   class="px-4 py-2 rounded-full bg-rose-100 text-rose-600 hover:bg-rose-200 transition text-xs font-semibold">
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>