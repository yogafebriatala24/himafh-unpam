<div class="container">
    @if ($sudahMilih)
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h3>Anda Sudah Memilih</h3>
                    </div>
                </div>
            </div>
        </div>
    @else
    <div class="row justify-content-center">
        @foreach ($paslons as $item)
        <div class="col-12 col-lg-4 d-flex align-items-stretch mt-2">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('/storage/' . $item->foto) }}"
                                    class="img-fluid" alt="" />
                <div class="row text-center">
                    <div class="col">
                        <div class="member-info">
                            <h6 class="mt-2" style="font-weight: bold">{{ $item->ketua->user->name }}</h6>
                            <span style="font-size: 11px">Calon Ketua Umum</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="member-info">
                            <h6 class="mt-2" style="font-weight: bold">{{ $item->wakil->user->name }}</h6>
                            <span style="font-size: 11px">Calon Wakil Ketua Umum</span>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <a href="{{route('vote', $item->id)}}" class="btn btn-danger btn-sm text-center">Vote Pasangan Calon 0{{ $item->nomor }}</a>
                </div>

            </div>
        </div>
        {{-- <div class="col-md-6">
            
            <div class="card">
                <div class="card-body">
                   {{$item->nomor}}
                   <a href="{{route('vote', $item->id)}}" class="btn btn-danger" >Pilih {{$item->nomor}}</a>
                </div>
            </div>
        </div> --}}
        @endforeach
    </div>
    @endif
    
</div>
