<div>
    @section('title')
        Manajemen Kandidat
    @endsection

    <div class="btn btn-primary">
        Tambah Pasangan Calon
    </div>
    <div class="row mt-4">
        @forelse ($paslons as $item)
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <img src="" alt="">
                        <div class="row">
                            @foreach ($item->kandidat as $kandidat)
                                <div class="col">
                                    <img src="https://images.unsplash.com/photo-1639314014466-e7713a9eb75a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                        alt="" class="img-fluid rounded mb-1">
                                    <div class="" style="font-weight: 700">
                                        {{ $kandidat->user->name }}
                                    </div>
                                    <div class="text-sm f6" style="font-size: 13px;">
                                        Calon {{ $kandidat->role }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4">
                            <div class="text-center" style="font-weight: 700">
                                Visi
                            </div>
                            <div class="">
                                {{ $item->visi }}
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="text-center" style="font-weight: 700">
                                Misi
                            </div>
                            <div class="">
                                {{ $item->misi }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h2>Data Kosong</h2>
        @endforelse
    </div>
</div>
