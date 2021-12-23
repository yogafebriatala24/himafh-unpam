<div>
    @section('title')
        Rooms Manajemen
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
                            <div class="text-info fs-6 btn">Buka</div>
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
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='200' height='100' preserveAspectRatio='none' viewBox='0 0 200 100'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1017%26quot%3b)' fill='none'%3e%3crect width='200' height='100' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M164.0707994743772 68.4335997441673L163.65130585430728 92.46637314232089 188.1035728725308 68.85309336423721z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M178.268%2c109.344C186.17%2c109.409%2c195.372%2c109.232%2c199.251%2c102.348C203.095%2c95.527%2c198.718%2c87.433%2c194.23%2c81.018C190.511%2c75.702%2c184.734%2c72.897%2c178.268%2c72.357C170.411%2c71.701%2c161.377%2c71.406%2c156.909%2c77.902C152.025%2c85.004%2c153.034%2c94.877%2c157.877%2c102.007C162.227%2c108.411%2c170.526%2c109.28%2c178.268%2c109.344' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M81.14165764264693 87.30735939117157L60.29501522808053 80.53387467035463 74.36817292183 108.15400180573798z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M113.39554197257326 75.03873332026342L101.80757213643389 93.58336157052341 131.94017022283325 86.62670315640278z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M94.107%2c55.873C99.344%2c55.799%2c104.984%2c55.238%2c107.895%2c50.884C111.093%2c46.101%2c111.096%2c39.758%2c108.208%2c34.783C105.331%2c29.827%2c99.837%2c27.218%2c94.107%2c27.134C88.212%2c27.047%2c82.302%2c29.3%2c79.27%2c34.357C76.159%2c39.545%2c76.192%2c46.304%2c79.626%2c51.284C82.707%2c55.752%2c88.681%2c55.95%2c94.107%2c55.873' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M46.724%2c59.428C54.551%2c58.955%2c61.169%2c54.492%2c65.391%2c47.885C70.037%2c40.615%2c73.544%2c31.585%2c69.325%2c24.059C65.043%2c16.422%2c55.479%2c14.617%2c46.724%2c14.59C37.909%2c14.563%2c28.65%2c16.504%2c23.882%2c23.919C18.765%2c31.878%2c18.578%2c42.444%2c23.697%2c50.402C28.477%2c57.833%2c37.904%2c59.96%2c46.724%2c59.428' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1017'%3e%3crect width='200' height='100' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
            }

        </style>
    @endpush
</div>
