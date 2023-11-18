<div>
    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">

                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-money-bill    "></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Tersalurkan</h4>
                        </div>
                        <div class="card-body">
                            Rp.{{ number_format($pemohon->sum('jumlah_pengajuan')) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">

                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pemohon</h4>
                        </div>
                        <div class="card-body">
                            {{ $pemohon->count('id') }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">

                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Produk</h4>
                        </div>
                        <div class="card-body">
                            {{ $produk->count('id') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Produk Paling diminati
                            <br>
                            <small class="text-muted">berdasarkan jumlah pengajuan</small>
                        </h4> <br>
                    </div>
                    <div class="card-body">

                        @foreach($produk as $p)

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">
                                {{ $p->pengajuans->count() }}</div>
                            <div class="font-weight-bold mb-1">{{ $p->nama }}</div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @livewire('backend.pengajuan.list-pengajuan')

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
