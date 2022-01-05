@extends('layouts.admin')

@section('title')
    Create Pasangan Calon
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('paslon.store') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label for="">Pasang Nomor Urut</label>
                        <input type="number" class="form-control" name="nomor">
                    </div>
                    <div class="col-6">
                        <label for="">Ketua</label>
                        <select name="ketua_id" class="form-select">
                            <option>Pilih Ketua</option>
                            @foreach ($ketuas as $item)
                                <option value="{{ $item->id }}">{{ $item->user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Wakil</label>
                        <select name="wakil_id" class="form-select">
                            <option>Pilih Wakil</option>
                            @foreach ($wakils as $item)
                                <option value="{{ $item->id }}">{{ $item->user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label for=""> Visi</label>
                        <textarea id="editor" name="visi"></textarea>
                    </div>
                    <div class="col-6">
                        <label for=""> Misi</label>
                        <textarea id="editor2" name="misi"></textarea>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-himafh">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @push('script')
        <script src="//cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script>
        <script>
            CKEDITOR.replace("editor");
            CKEDITOR.replace("editor2");
        </script>

    @endpush
@endsection
