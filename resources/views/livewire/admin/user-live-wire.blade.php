<div>
    @section('title')
        User Manajemen
    @endsection
    <div>


        <div class="card">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="cari nama, nim, email"
                            wire:model="keyword">
                    </div>
                    <div class="col d-flex justify-content-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mt-2">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <span class="text-primary mt-2" wire:loading wire:target="keyword">
                    <div class="spinner-border" role="status">
                        <span class="sr-only"></span>
                    </div>
                </span>

                <!-- Default Table -->
                <table class="table table-hover text-xsmall">
                    <thead>
                        <tr class="fs-6">
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">NIM</th>
                            <th scope="col">REGULER</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($users as $item)

                            @if ($userId === $item->id && $click >= 2)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td><input type="text" class="form-control form-control-sm"
                                            wire:keydown.enter="update" wire:model="name"></td>
                                    <td><input type="text" class="form-control form-control-sm"
                                            wire:keydown.enter="update" wire:model="email"></td>
                                    <td><input type="number" class="form-control form-control-sm"
                                            wire:keydown.enter="update" wire:model="nim"></td>
                                    <td><input type="text" class="form-control form-control-sm"
                                            wire:keydown.enter="update" wire:model="reg"></td>
                                    <td wire:click="doubleClick({{ 0 }})" class="text-primary">Cancel</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <span class="text-primary mt-2 d-flex justify-content-center">
                                            <div class="spinner-border" role="status" wire:loading wire:target="update">
                                                <span class="sr-only"></span>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <th scope="row" wire:click="doubleClick({{ $item->id }})">{{ $i }}
                                    </th>
                                    <td wire:click="doubleClick({{ $item->id }})">{{ $item->name }}</td>
                                    <td wire:click="doubleClick({{ $item->id }})">{{ $item->email }}</td>
                                    <td wire:click="doubleClick({{ $item->id }})">{{ $item->nim }}</td>
                                    <td wire:click="doubleClick({{ $item->id }})">{{ $item->reguler }}</td>
                                    <td class="text-center">
                                        <div class="text-danger btn btn-link" wire:click="hapus({{ $item->id }})">
                                            <i class="bi bi-trash"></i>
                                        </div>

                                    </td>
                                </tr>
                            @endif


                            @php
                                $i++;
                            @endphp
                        @empty

                        @endforelse

                    </tbody>
                </table>
                <!-- End Default Table Example -->
                @if (!$maxLimit)
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-primary btn-sm" wire:click="limitAdd">Load More</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
