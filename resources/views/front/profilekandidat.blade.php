@extends('layouts.front')

@section('title')
    Profil Kandidat
@endsection

@section('content')
    <section class="section profile container">
        <div class="row">
            <div class="col-xl-4 mt-5">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div
                                class="
                                            card-body
                                            profile-card
                                            pt-4
                                            d-flex
                                            flex-column
                                            align-items-center
                                        ">
                                <img src="{{ asset('/storage/' . $paslon->ketua->image) }}" alt="Profile"
                                    class="rounded-circle img-fluid" style="width: 120px; height: 120px; object-fit: cover" />
                                <div class="pt-2 text-center">
                                    <h4>{{ $paslon->ketua->user->name }}</h4>
                                    <h5>Calon Ketua Umum</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 mt-2">
                        <div class="card">
                            <div
                                class="
                                            card-body
                                            profile-card
                                            pt-4
                                            d-flex
                                            flex-column
                                            align-items-center
                                        ">
                                        <img src="{{ asset('/storage/' . $paslon->wakil->image) }}" alt="Profile"
                                        class="rounded-circle img-fluid" style="width: 120px; height: 120px; object-fit: cover" />
                                    <div class="pt-2 text-center">
                                        <h4>{{ $paslon->wakil->user->name }}</h4>
                                        <h5>Calon Wakil Ketua Umum</h5>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 pt-5">
                <div class="card">
                    <div class="card-body pt-5">
                        <h5 class="card-title">Visi</h5>
                        <p class="small fst-italic">
                            {!!$paslon->visi!!}
                        </p>

                        <h5 class="card-title">
                            Misi
                        </h5>
                        <p class="small fst-italic">
                            {!!$paslon->misi!!}
                        </p>
                        <div class="ratio ratio-16x9">
                            {!!$paslon->frame_ytb!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
