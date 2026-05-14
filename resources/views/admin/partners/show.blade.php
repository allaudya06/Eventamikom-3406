@extends('layouts.admin')
@section('title', 'Detail Partner - Admin')

@section('page_title', 'Detail Partner')
@section('page_subtitle', 'Informasi lengkap partner.')
@section('content')
<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8 max-w-3xl">
    <div class="space-y-6">
        <!-- Logo -->
        <div class="flex justify-center">
            @if($partner->logo_path)
            <img src="{{ asset('storage/' . $partner->logo_path) }}" class="w-32 h-32 rounded-xl object-contain border border-slate-200 p-2" alt="{{ $partner->name }}">
            @else
            <div class="w-32 h-32 rounded-xl bg-slate-100 flex items-center justify-center text-slate-400">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            @endif
        </div>

        <!-- Partner Info -->
        <div class="border-t pt-6">
            <dl class="space-y-4">
                <div>
                    <dt class="text-sm font-bold text-slate-600">Nama Partner</dt>
                    <dd class="text-lg text-slate-900">{{ $partner->name }}</dd>
                </div>

                @if($partner->type)
                <div>
                    <dt class="text-sm font-bold text-slate-600">Jenis Partner</dt>
                    <dd>
                        <span class="inline-block px-3 py-1 rounded-full text-sm font-bold {{ $partner->type === 'Technology Partner' ? 'bg-indigo-100 text-indigo-700' : 'bg-slate-100 text-slate-700' }}">
                            {{ $partner->type }}
                        </span>
                    </dd>
                </div>
                @endif

                @if($partner->description)
                <div>
                    <dt class="text-sm font-bold text-slate-600">Deskripsi</dt>
                    <dd class="text-slate-700 whitespace-pre-wrap">{{ $partner->description }}</dd>
                </div>
                @endif

                @if($partner->website)
                <div>
                    <dt class="text-sm font-bold text-slate-600">Website</dt>
                    <dd><a href="{{ $partner->website }}" target="_blank" class="text-indigo-600 hover:underline">{{ $partner->website }}</a></dd>
                </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @if($partner->contact_email)
                    <div>
                        <dt class="text-sm font-bold text-slate-600">Email Kontak</dt>
                        <dd class="text-slate-700">{{ $partner->contact_email }}</dd>
                    </div>
                    @endif

                    @if($partner->contact_phone)
                    <div>
                        <dt class="text-sm font-bold text-slate-600">Nomor Telepon</dt>
                        <dd class="text-slate-700">{{ $partner->contact_phone }}</dd>
                    </div>
                    @endif
                </div>

                <div>
                    <dt class="text-sm font-bold text-slate-600">Status</dt>
                    <dd>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold {{ $partner->is_active ? 'bg-green-100 text-green-700' : 'bg-slate-100 text-slate-600' }}">
                            {{ $partner->is_active ? 'Aktif' : 'Tidak Aktif' }}
                        </span>
                    </dd>
                </div>

                <div class="text-sm text-slate-400 pt-4 border-t">
                    <p>Dibuat: {{ $partner->created_at->format('d M Y H:i') }}</p>
                    <p>Diperbarui: {{ $partner->updated_at->format('d M Y H:i') }}</p>
                </div>
            </dl>
        </div>

        <!-- Actions -->
        <div class="flex gap-3 pt-4 border-t">
            <a href="{{ route('admin.partners.edit', $partner->id) }}" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 active:scale-95 transition">
                Edit Partner
            </a>
            <a href="{{ route('admin.partners.index') }}" class="px-6 py-3 bg-slate-200 text-slate-700 rounded-xl font-bold hover:bg-slate-300 active:scale-95 transition">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
