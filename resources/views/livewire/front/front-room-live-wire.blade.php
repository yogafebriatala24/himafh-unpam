<div>
    @section('title')
        Room Pemilihan
    @endsection

    @if ($room)
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            {{ $room->nama }}
                        </div>
                        <h4>Untuk - Reguler {{ $room->user_reguler }}</h4>
                        <div class="d-grid gap-2">
                            <a href="{{route('pilih')}}" class="btn btn-danger btn-sm mt-1">Masuk Room</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body text-center">
                    <h3>Tidak Ada Room</h3>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
