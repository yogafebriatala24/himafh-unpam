<div>
    @section('title')
        User Manajemen
    @endsection
    <div>


        <div class="card">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-3">
                        <input type="text" class="form-control" placeholder="cari nama, nim, email"
                            wire:model.debounce.400ms="keyword">
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        {{-- file excel input --}}
                        <div class="">
                            <div class="input-group">
                                <input type="file" class="form-control" wire:model="fileExcel"
                                    id="{{ $iteration }}">
                                <div class="btn btn-himafh" wire:click="hendleImportExcel">
                                    Button</div>
                            </div>
                            <div>
                                @error('fileExcel') <span class="text-danger">{{ $message . '!' }}</span> @enderror
                            </div>
                        </div>

                        <div class="text-primary mt-2" wire:loading wire:target="hendleImportExcel">
                            <div class="spinner-border" role="status">
                                <span class="sr-only"></span>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="btn btn-himafh" wire:click="generatePassword">Isi Password kosong</div>
                    </div>

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
                            <th scope="col">PASSWORD</th>
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
                            {{-- untuk di edit --}}
                            @if ($userId === $item->id && $click >= 2)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td><input type="text" class="form-control form-control-sm"
                                            wire:keydown.enter="update" wire:model="name"></td>
                                    <td><input type="text" class="form-control form-control-sm"
                                            wire:keydown.enter="update" wire:model="password"></td>
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
                                    @if ($item->passwordtwo !== null)
                                        <td wire:click="doubleClick({{ $item->id }})">
                                            {{ Illuminate\Support\Facades\Crypt::decryptString($item->passwordtwo) }}
                                        </td>
                                    @else
                                        <td wire:click="doubleClick({{ $item->id }})">Password Kosong</td>
                                    @endif
                                    <td wire:click="doubleClick({{ $item->id }})">{{ $item->nim }}</td>
                                    <td wire:click="doubleClick({{ $item->id }})">{{ $item->reguler }}</td>
                                    <td class="">
                                        <a href="https://wa.me/62{{ $item->no_tlp }}/?text=Hallo {{ $item->name }}, kami dari tim KPU Hima FH. %0a %0aPassword pemira anda : *{{ Illuminate\Support\Facades\Crypt::decryptString($item->passwordtwo) }}* %0a %0aJangan sebarkan password ini kepada siapapun! %0a %0alogin di: https://himafhunpam.com/login"
                                            class="btn btn-link text-success">
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
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
                <div class="">
                    <div class="flex justify-content-center">
                        <div class="" wire:loading wire:target="limitAdd">
                            <span class="text-primary my-1 d-flex justify-content-center">
                                <div class="spinner-border" role="status">
                                    <span class="sr-only"></span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                @if (!$maxLimit)

                    <div class="d-flex justify-content-center">
                        <div class="btn btn-primary btn-sm" wire:click="limitAdd">Load More</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
