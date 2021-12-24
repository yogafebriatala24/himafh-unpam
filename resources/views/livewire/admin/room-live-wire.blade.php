<div>
    @section('title')
        Manajemen Rooms
    @endsection

    <div>
        <!-- Button trigger modal -->
        @if ($isCreate)
            <div class="card ">
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
                <div class="card card-rooms">
                    <div class="p-3">
                        <div class="text-white" style="font-weight: 700">{{ $item->nama }} -
                            {{ $item->user_reguler }}</div>
                        <div class="row mt-2">
                            <div class="text-white col"><span class="mr-2"></span>
                                @if ($item->status === 'buka')
                                    <span class="badge  bg-primary ml-2 mr-2">{{ $item->status }}</span>
                                @else
                                    <span class="badge  bg-warning ml-2 mr-2">{{ $item->status }}</span>
                                @endif
                            </div>
                            <div class=" col text-left">
                            </div>
                        </div>
                        <div class="mt-2 d-flex justify-content-between">
                            @if ($item->status === 'tutup')
                                <div class="text-info fs-6 btn open" wire:click="buka({{ $item->id }})">Buka</div>
                            @else
                                <div class="text-info fs-6 btn" wire:click="buka({{ $item->id }})">Tutup</div>
                            @endif
                            <div class="text-danger btn" wire:click="hapus({{ $item->id }})">Hapus</div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="pagetitle text-center">
                <h1>Data Kosong</h1>
            </div>
        @endforelse
    </div>

    @push('style')
        <style>
            .card-rooms {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='200' height='100' preserveAspectRatio='none' viewBox='0 0 200 100'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1253%26quot%3b)' fill='none'%3e%3crect width='200' height='100' x='0' y='0' fill='url(%23SvgjsLinearGradient1254)'%3e%3c/rect%3e%3cpath d='M125.64 45.55 a20.41 20.41 0 1 0 40.82 0 a20.41 20.41 0 1 0 -40.82 0z' fill='rgba(150%2c 79%2c 81%2c 1)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M-1.33 91.55 a23.7 23.7 0 1 0 47.4 0 a23.7 23.7 0 1 0 -47.4 0z' fill='rgba(150%2c 79%2c 81%2c 1)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M121.84 66.51 a32.99 32.99 0 1 0 65.98 0 a32.99 32.99 0 1 0 -65.98 0z' fill='rgba(150%2c 79%2c 81%2c 1)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M19.78 63.59 a30.44 30.44 0 1 0 60.88 0 a30.44 30.44 0 1 0 -60.88 0z' fill='rgba(150%2c 79%2c 81%2c 1)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1253'%3e%3crect width='200' height='100' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='12.5%25' y1='-25%25' x2='87.5%25' y2='125%25' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1254'%3e%3cstop stop-color='%230e2a47' offset='0'%3e%3c/stop%3e%3cstop stop-color='rgba(150%2c 47%2c 17%2c 1)' offset='1'%3e%3c/stop%3e%3c/linearGradient%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
                background-size: cover;
            }
            

        </style>
    @endpush
</div>
