@extends('layouts.app')

@section('title', 'Login - JennyBeauty Skincare & Cosmetics')

@section('content')
<div class="min-h-[75vh] flex items-center justify-center">
    <div class="max-w-md w-full bg-white rounded-3xl shadow-xl border border-rose-100 p-8">
        <div class="text-center mb-8">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-rose-500 to-pink-400 flex items-center justify-center text-white font-bold text-2xl mx-auto mb-4 shadow-md">
                JB
            </div>
            <h1 class="text-2xl font-bold text-slate-800">Selamat Datang di JennyBeauty</h1>
            <p class="text-sm text-slate-500 mt-1">Sistem Manajemen Penjualan Skincare & Kosmetik</p>
        </div>

        <form action="{{ route('login.post') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Username</label>
                <input type="text" name="username" required placeholder="Masukkan nama Anda"
                       value="Jenny Nur Fadila"
                       class="w-full px-4 py-3 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 text-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Password</label>
                <input type="password" name="password" required placeholder="••••••••" value="123456"
                       class="w-full px-4 py-3 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 text-sm">
            </div>

            <button type="submit"
                    class="w-full py-3.5 rounded-xl bg-gradient-to-r from-rose-500 to-pink-500 text-white font-semibold text-sm shadow-md hover:opacity-95 transition">
                Masuk ke Dashboard
            </button>
        </form>
    </div>
</div>
@endsection