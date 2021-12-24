<div>
    @section('title')
        Tambah Calon
    @endsection
    <div class="row">
        <div class="col-6">

            <div>
                <label for="">Pilih dari user</label>
            </div>
            <select class="selectpicker border rounded" data-live-search="true" wire:model="userId">
                <option value="">Pilih User</option>
                @foreach ($users as $item)
                    <option value="{{ $item->id }}" data-tokens="{{ $item->name }}">{{ $item->name }}</option>
                @endforeach
            </select>

        </div>

        <div class="col-6">
            <div>
                {{-- <div>
                    @if ($image === null)
                        <img src="data:image/png;base64,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"
                            alt="" class="img-fluid">
                    @else
                        <img src="{{ $image->temporaryUrl() }}" alt="" class="img-fluid">
                    @endif
                </div> --}}
                <div>
                    <span class="text-primary mt-2" wire:loading wire:target="image">
                        <div class="spinner-border" role="status">
                            <span class="sr-only"></span>
                        </div>
                    </span>
                    <input type="file" class="form-control mt-2" wire:model="image">
                </div>
            </div>
        </div>

    </div>


    @push('style')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('livesearch-bootstrap/dist/css/bootstrap-select.css') }}">
    @endpush
    @push('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('livesearch-bootstrap/dist/js/bootstrap-select.js') }}"></script>
    @endpush
</div>
