<div>
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">JUMLAH DPT</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <span class="text-success small pt-1 fw-bold">{{ $jmlDpt }}</span> <span
                                        class="text-muted small pt-2 ps-1">Pemilih</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">JUMLAH CALON </h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-check-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <span class="text-success small pt-1 fw-bold">{{ $jmlCalon }}</span> <span
                                        class="text-muted small pt-2 ps-1">Calon</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">JUMLAH PASLON </h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-bounding-box"></i>
                                </div>
                                <div class="ps-3">
                                    <span class="text-success small pt-1 fw-bold">{{ $jmlPaslon }}</span> <span
                                        class="text-muted small pt-2 ps-1">Paslon</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Suara</h5>

                    <!-- Bar Chart -->
                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#barChart'), {
                                type: 'bar',
                                data: {
                                    labels: ['Suara Terpakai', 'Sisa Suara'],
                                    datasets: [{
                                        label: 'Diagram Suara',
                                        data: [{{ $suaraTerpakai }}, {{ $sisaSuara }}],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                        ],
                                        borderColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(255, 159, 64)',
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                    </script>
                    <!-- End Bar CHart -->

                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script src="{{ asset('NiceAdmin/assets/vendor/chart.js/chart.min.js') }}"></script>
    @endpush
</div>
