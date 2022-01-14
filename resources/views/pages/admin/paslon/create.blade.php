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
    <form action="{{ route('paslon.store') }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card">
            <div class="card-body">
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="">Masukan Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <div class="col-md-6">
                        <label for="">Frame Youtube</label>
                        <input type="text" class="form-control" name="frame_ytb">
                    </div>
                    <div class="col-12">
                        <label for="">Pasang Nomor Urut</label>
                        <input type="number" class="form-control" name="nomor" value="{{ old('nomor') }}">
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
                        <textarea id="editor" name="visi">{{ old('visi') }}</textarea>
                    </div>
                    <div class="col-6">
                        <label for=""> Misi</label>
                        <textarea id="editor2" name="misi">{{ old('misi') }}</textarea>
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
