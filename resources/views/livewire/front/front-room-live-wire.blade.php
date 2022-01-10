<div>
    @section('title')
        Room Pemilihan
    @endsection

    @if ($room->status === 'buka')
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            {{ $room->nama }}
                        </div>
                        <h4>Untuk - Reguler {{ $room->user_reguler }}</h4>
                        <div class="d-grid gap-2">
                            <a href="" class="btn btn-danger btn-sm mt-1">Masuk Room</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <h5>Room {{ $room->nama }}, Reguler {{ $room->user_reguler }} Sedang Tutup</h5>
    @endif
</div>
