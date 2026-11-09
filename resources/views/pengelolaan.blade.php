@extends('layouts.app')

@section('title', 'Pengelolaan Produk Skincare - JennyBeauty')

@section('content')
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Katalog & Pengelolaan Produk Skincare</h1>
            <p class="text-sm text-slate-500">Login sebagai: <span class="font-semibold text-rose-600">{{ $username }}</span></p>
        </div>

        <div class="flex flex-wrap gap-2">
            @foreach($categories as $cat)
                <a href="{{ route('pengelolaan', ['username' => $username, 'category' => $cat]) }}"
                   class="px-3.5 py-1.5 rounded-full text-xs font-semibold transition {{ $categoryFilter === $cat ? 'bg-rose-500 text-white shadow-sm' : 'bg-white text-slate-600 border border-rose-200 hover:bg-rose-50' }}">
                    {{ $cat }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white rounded-2xl border border-rose-100 overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
                <div class="relative">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-52 object-cover">
                    <span class="absolute top-3 left-3 bg-rose-600 text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
                        {{ $product['badge'] }}
                    </span>
                </div>
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center text-xs text-slate-500 mb-1">
                            <span class="font-semibold text-rose-500">{{ $product['category'] }}</span>
                            <span>Skin Type: {{ $product['skin_type'] }}</span>
                        </div>
                        <h3 class="font-bold text-lg text-slate-800">{{ $product['name'] }}</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">{{ $product['description'] }}</p>
                    </div>
                    <div class="mt-5 pt-4 border-t border-rose-50 flex justify-between items-center">
                        <div>
                            <span class="text-xs text-slate-400 block">Harga Jual</span>
                            <span class="text-base font-bold text-rose-600">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                        </div>
                        <span class="px-3 py-1 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                            Stok: {{ $product['stock'] }} pcs
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection