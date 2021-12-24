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
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('/storage/' . $item->image) }}" alt="Card image cap"
                            style="height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->user->name }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            @empty

            @endforelse
        </div>
    </section>
</div>
