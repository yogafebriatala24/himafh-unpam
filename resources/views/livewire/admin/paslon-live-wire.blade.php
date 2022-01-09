<div class="mt-4">
    <div class="row">
        @forelse ($paslons as $item)
            <div class="col-6">
                <div class="card">
                    <div class="card-body py-3">
                        <h3 class="text-center ">
                            <div class="bg-danger d-inline text-white px-1 rounded-circle">
                                {{ $item->nomor }}
                            </div>
                        </h3>
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('/storage/' . $item->ketua->image) }}"
                                    class="img-fluid img-kandidat rounded">
                                <h5 class="mt-2 text-center">
                                    {{ $item->ketua->user->name }}
                                </h5>
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('/storage/' . $item->wakil->image) }}"
                                    class="img-fluid img-kandidat rounded">
                                <h5 class="mt-2 text-center">
                                    {{ $item->wakil->user->name }}
                                </h5>
                            </div>
                        </div>
                        <hr>
                        @if ($cekId === $item->id)
                            <h5>Visi</h5>
                            {!! $item->visi !!}
                            <h5>Visi</h5>
                            {!! $item->visi !!}
                        @endif
                        <div class="d-grid gap-2">
                            <div class="btn btn-himafh  btn-block" wire:click="cek({{ $item->id }})">Cek Visi Misi
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <div class="btn btn-outline-danger  btn-block"
                                        wire:click="hapus({{ $item->id }})">
                                        Hapus
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <a href="{{ route('paslon.edit', $item->id) }}"
                                        class="btn btn-outline-primary  btn-block">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="card">
                <div class="card-body">
                    <h4>Data Kosong</h4>
                </div>
            </div>
        @endforelse
    </div>

    @push('style')
        <style>
            .img-kandidat {
                object-fit: cover;
                height: 300px;
                width: 100%;
                object-position: center;
            }

            h5 {
                font-weight: bold
            }

        </style>
    @endpush
</div>
