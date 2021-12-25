<div>
    @section('title')
        Manajemen Kandidat
    @endsection

    <a href="{{ route('livewire-calon-create') }}" class="btn btn-primary">
        Tambah Pasangan Calon
    </a>

    <section class="section profile mt-4">
        <div class="row">
            @forelse ($kandidats as $item)
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4">

                            <div class="text-center">
                                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                <h6 style="font-weight: bold">{{ $item->user->name }}</h6>
                                <p>Calon {{ $item->role }}</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="btn text-danger" wire:click="hapus({{ $item->id }})"><i
                                        class="bi bi-trash"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            @empty

            @endforelse
        </div>
    </section>
</div>
