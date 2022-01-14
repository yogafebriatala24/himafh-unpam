<div>
    @section('title')
        Manajemen Calon Kandidat
    @endsection

    <a href="{{ route('livewire-calon-create') }}" class="btn btn-danger">
        Tambah Calon
    </a>

    <section class="section profile mt-4">
        <div class="row">
            @forelse ($kandidats as $item)
                <div class="col-xl-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('/storage/' . $item->image) }}" alt="Card image cap"
                            style="height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->user->name }}</h5>
                        </div>
                    </div>

                </div>
            @empty

            @endforelse
        </div>
    </section>
</div>
