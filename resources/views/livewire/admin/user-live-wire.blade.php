<div>
    @section('title')
        User Manajemen
    @endsection
    <div>
        <div class="card">
            <div class="card-body">
                <div class="row my-3">
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

                </div>

                <div class="card">
                    <div class="card-body shadow">
                        {{-- filter table --}}
                        <div class="row mb-2">
                            <div class="col">
                                <label for="">Cari</label>
                                <input type="text" class="form-control" placeholder="cari nama, nim, email"
                                    wire:model.debounce.400ms="keyword">
                                <span class="text-primary mt-2" wire:loading wire:target="keyword">
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only"></span>
                                    </div>
                                </span>
                            </div>
                            <div class="col">
                                <label for="">Pilih Reguler</label>
                                <select class="form-select" wire:model="filterReg">
                                    <option value="">Semua Reguler</option>
                                    <option value="A">Reguler A</option>
                                    <option value="B">Reguler B</option>
                                    <option value="C">Reguler C</option>
                                </select>
                                <span class="text-primary mt-2" wire:loading wire:target="filterReg">
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only"></span>
                                    </div>
                                </span>
                            </div>
                            <div class="col">
                                <label for="">Jumlah Data</label>
                                <select class="form-select" wire:model="jmlData">
                                    <option value="">Pilih</option>
                                    <option value="{{ 10 }}">10</option>
                                    <option value="{{ 50 }}">50</option>
                                    <option value="{{ 100 }}">100</option>
                                    <option value="{{ 200 }}">200</option>
                                </select>
                                <span class="text-primary mt-2" wire:loading wire:target="jmlData">
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only"></span>
                                    </div>
                                </span>
                            </div>
                        </div>
                        {{-- endfilter table --}}
                        <!-- Default Table -->
                        <table class="table table-hover text-xsmall">
                            <thead>
                                <tr class="fs-6">
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
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
                                            <td><input type="number" class="form-control form-control-sm"
                                                    wire:keydown.enter="update" wire:model="nim"></td>
                                            <td><input type="text" class="form-control form-control-sm"
                                                    wire:keydown.enter="update" wire:model="reg"></td>
                                            <td wire:click="doubleClick({{ 0 }})" class="text-primary">
                                                Cancel</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <span class="text-primary mt-2 d-flex justify-content-center">
                                                    <div class="spinner-border" role="status" wire:loading
                                                        wire:target="update">
                                                        <span class="sr-only"></span>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td wire:click="doubleClick({{ $item->id }})">{{ $i }}
                                            </td>
                                            <td wire:click="doubleClick({{ $item->id }})">{{ $item->name }}
                                            </td>
                                            <td wire:click="doubleClick({{ $item->id }})">
                                                {{ Str::limit($item->username, 6, $end = '******') }}</td>
                                            <td wire:click="doubleClick({{ $item->id }})">
                                                {{ $item->reguler }}</td>
                                            <td class="">
                                                <a href="https://wa.me/62{{ $item->no_tlp }}/?text=Hallo {{ $item->name }}, kami dari tim KPU Hima FH. %0a %0aPassword login untuk vote pemilihan ketua dan wakil ketua umum Hima FH anda : {{ $item->password_c }} %0a %0aJangan sebarkan password ini kepada siapapun! %0a %0aLink Vote: himafahunpam.com %0aLink Tutorial Vote: bit.ly/TutorialEvotingHimaFhUnpam %0aJangan lupa untuk memilih ya:) Ini nim anda {{ $item->username }}"
                                                    class="btn btn-link text-success">
                                                    <i class="bi bi-whatsapp"></i>
                                                </a>
                                                <div class="text-danger btn btn-link"
                                                    wire:click="hapus({{ $item->id }})">
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
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
