<div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    @if ($foto)
                        <img src="{{ $foto->temporaryUrl() }}">
                        <label for="">Foto Paslon</label>
                        <input type="file" class="file-control" wire:model="foto">
                    @endif
                </div>
                <div class="col-12">
                    <label for="">Pasang Nomor Urut</label>
                    <input type="number" class="form-control" wire:model.defer='nomor'>
                    @error('nomor') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-6">
                    <label for="">Ketua</label>
                    <select wire:model.defer="idKetua" class="form-select">
                        <option>Pilih Ketua</option>
                        @foreach ($ketuas as $item)
                            <option value="{{ $item->id }}">{{ $item->user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="">Wakil</label>
                    <select wire:model.defer="idKetua" class="form-select">
                        <option>Pilih Wakil</option>
                        @foreach ($wakils as $item)
                            <option value="{{ $item->id }}">{{ $item->user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for=""> Visi</label>
                    <textarea id="editor" wire:model.defer="visi"></textarea>
                </div>
                <div class="col-6">
                    <label for=""> Misi</label>
                    <textarea id="editor2" wire:model.defer="misi"></textarea>
                </div>
                <div class="col-12 mt-4">
                    <div class="btn btn-himafh" wire:click="create">Submit</div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script src="//cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script>
        <script>
            CKEDITOR.replace("editor");
            CKEDITOR.replace("editor2");
        </script>

    @endpush
</div>
