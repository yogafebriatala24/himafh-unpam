<div>
    @section('title')
        Rooms Manajemen
    @endsection

    <div>
        <!-- Button trigger modal -->
        @if ($isCreate)
            <div class="card">
                <div class="card-body">
                    <label for="">Nama Room</label>
                    <input type="text" class="form-control" wire:model="nama">
                    @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    <div class="row mt-2">
                        <div class="col">
                            <label for="" class="">Untuk Reguler</label>
                            <select class="form-select" wire:model="user_reguler">
                                <option value="">Pilih</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                            @error('user_reguler') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col">
                            <label for="" class="">Status Room</label>
                            <select class="form-select" wire:model="status">
                                <option value="">Pilih</option>
                                <option value="tutup">Tutup</option>
                                <option value="buka">Buka</option>
                            </select>
                            @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="btn btn-primary" wire:click="tambah">Buat Room</div>
                        <div class="btn btn-outline-primary" wire:click="confirmCreate">Cancel</div>
                    </div>
                </div>
            </div>
        @else
            <button type="button" class="btn btn-primary mb-4" wire:click="confirmCreate">
                Tambah data
            </button>
        @endif
    </div>
    <div class="row">
        @forelse ($rooms as $item)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">Room 1</div>
                </div>
            </div>
        @empty
            <div class="pagetitle text-center">
                <h1>Data Kosong</h1>
            </div>
        @endforelse
    </div>
</div>
