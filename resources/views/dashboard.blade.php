@extends('layouts.app')

@section('title', 'Dashboard - JennyBeauty')

@section('content')
    <div class="bg-gradient-to-r from-rose-500 to-pink-400 rounded-3xl p-8 text-white shadow-lg mb-8 flex flex-col md:flex-row justify-between items-center">
        <div>
            <span class="px-3 py-1 rounded-full bg-white/20 text-xs font-semibold uppercase tracking-wider">Beauty Store Portal</span>
            <h1 class="text-3xl font-bold mt-3">Halo, {{ $username }}! ✨</h1>
            <p class="text-rose-50 mt-2 text-sm max-w-xl">
                Selamat datang di dashboard pengelolaan produk skincare dan kosmetik <strong>JennyBeauty</strong>. Pantau stok serum, pelembap, krim mata, hingga kosmetik terbaikmu hari ini.
            </p>
        </div>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
           class="mt-6 md:mt-0 px-6 py-3 rounded-xl bg-white text-rose-600 font-semibold text-sm shadow hover:bg-rose-50 transition">
            Lihat Katalog Produk &rarr;
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-10">
        <div class="bg-white p-6 rounded-2xl border border-rose-100 shadow-sm">
            <p class="text-xs font-semibold text-slate-400 uppercase">Total Produk</p>
            <p class="text-2xl font-bold text-slate-800 mt-2">{{ $stats['total_products'] }} Item</p>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-rose-100 shadow-sm">
            <p class="text-xs font-semibold text-slate-400 uppercase">Total Stok Tersedia</p>
            <p class="text-2xl font-bold text-rose-600 mt-2">{{ $stats['total_stock'] }} Pcs</p>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-rose-100 shadow-sm">
            <p class="text-xs font-semibold text-slate-400 uppercase">Pendapatan Bulan Ini</p>
            <p class="text-2xl font-bold text-emerald-600 mt-2">{{ $stats['revenue_month'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-rose-100 shadow-sm">
            <p class="text-xs font-semibold text-slate-400 uppercase">Produk Terlaris</p>
            <p class="text-sm font-bold text-slate-800 mt-2 line-clamp-2">{{ $stats['best_seller'] }}</p>
        </div>
    </div>

    <h2 class="text-xl font-bold text-slate-800 mb-4">Produk Unggulan JennyBeauty</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach(array_slice($products, 0, 3) as $item)
            <div class="bg-white rounded-2xl border border-rose-100 overflow-hidden shadow-sm hover:shadow-md transition">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-48 object-cover">
                <div class="p-5">
                    <span class="text-xs font-semibold text-rose-600 bg-rose-50 px-2.5 py-1 rounded-full">{{ $item['category'] }}</span>
                    <h3 class="font-bold text-slate-800 mt-2">{{ $item['name'] }}</h3>
                    <p class="text-xs text-slate-500 mt-1">Cocok untuk: {{ $item['skin_type'] }}</p>
                    <div class="flex justify-between items-center mt-4 pt-3 border-t border-slate-100">
                        <span class="font-bold text-rose-600">Rp {{ number_format($item['price'], 0, ',', '.') }}</span>
                        <span class="text-xs text-slate-500">Stok: {{ $item['stock'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection