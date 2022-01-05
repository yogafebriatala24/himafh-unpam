@extends('layouts.admin')

@section('title')
    Manajemen Pasangan Calon
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ session('status') }}
            </div>
        </div>
    @endif
    <a href="{{ route('paslon.create') }}" class="btn btn-himafh">
        Tambah Paslon
    </a>
    <livewire:admin.paslon-live-wire />
@endsection
