@php
    $projectsUrl = route('admin.projects.index');
    $poetryUrl = route('admin.poetry.index');
    $messagesUrl = route('admin.messages.index');
@endphp

@extends('admin.layouts.admin')

@section('title','Admin Dashboard')

@section('content')
    <div class="bg-[#161615] border border-[#3E3E3A] rounded-2xl p-6">
        <h2 class="text-2xl font-semibold">Admin Dashboard</h2>
        <p class="text-sm text-emerald-200/70 mt-1">Manage your portfolio content.</p>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="rounded-xl border border-white/10 bg-zinc-900/30 p-4">
                <div class="text-sm text-emerald-200/70">Projects</div>
                <div class="text-3xl font-semibold mt-1">{{ $projectsCount }}</div>
            </div>
            <div class="rounded-xl border border-white/10 bg-zinc-900/30 p-4">
                <div class="text-sm text-emerald-200/70">Poetry</div>
                <div class="text-3xl font-semibold mt-1">{{ $poetryCount }}</div>
            </div>
            <div class="rounded-xl border border-white/10 bg-zinc-900/30 p-4">
                <div class="text-sm text-emerald-200/70">Messages</div>
                <div class="text-3xl font-semibold mt-1">{{ $messagesCount }}</div>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <a href="{{ $projectsUrl }}" class="rounded-xl border border-[#3E3E3A] bg-[#161615] p-5 hover:border-emerald-400 transition">
                <div class="font-semibold">Projects</div>
                <div class="text-sm text-gray-400 mt-1">CRUD for your work.</div>
            </a>
            <a href="{{ $poetryUrl }}" class="rounded-xl border border-[#3E3E3A] bg-[#161615] p-5 hover:border-emerald-400 transition">
                <div class="font-semibold">Poetry</div>
                <div class="text-sm text-gray-400 mt-1">Urdu shairi library.</div>
            </a>
            <a href="{{ $messagesUrl }}" class="rounded-xl border border-[#3E3E3A] bg-[#161615] p-5 hover:border-emerald-400 transition">
                <div class="font-semibold">Messages</div>
                <div class="text-sm text-gray-400 mt-1">Inbox from contact form.</div>
            </a>
        </div>
    </div>
@endsection


