@extends('layouts.app')

@section('title', 'Profile Pengguna - JennyBeauty')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-3xl border border-rose-100 shadow-sm overflow-hidden">
        <div class="h-32 bg-gradient-to-r from-rose-400 to-pink-500"></div>
        <div class="px-8 pb-8">
            <div class="relative -mt-12 mb-4">
                <div class="w-24 h-24 rounded-2xl bg-white p-1.5 shadow-md inline-block">
                    <div class="w-full h-full rounded-xl bg-rose-100 flex items-center justify-center text-rose-600 font-bold text-3xl">
                        {{ strtoupper(substr($profileData['name'], 0, 1)) }}
                    </div>
                </div>
            </div>

            <h1 class="text-2xl font-bold text-slate-800">{{ $profileData['name'] }}</h1>
            <p class="text-sm font-medium text-rose-600">{{ $profileData['role'] }}</p>

            <div class="mt-6 space-y-4 border-t border-slate-100 pt-6 text-sm">
                <div class="flex justify-between">
                    <span class="text-slate-500">Email Resmi</span>
                    <span class="font-semibold text-slate-800">{{ $profileData['email'] }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Lokasi Store</span>
                    <span class="font-semibold text-slate-800">{{ $profileData['location'] }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Fokus Formulasi Skincare</span>
                    <span class="font-semibold text-rose-600">{{ $profileData['skin_concern'] }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Bergabung Sejak</span>
                    <span class="font-semibold text-slate-800">{{ $profileData['member_since'] }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection