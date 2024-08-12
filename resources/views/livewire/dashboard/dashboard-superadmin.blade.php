<div>
    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">

                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Layanan</h4>
                        </div>
                        <div class="card-body">
                            {{ $layanan->count('id') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">

                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-tags" aria-hidden="true"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jenis Layanan</h4>
                        </div>
                        <div class="card-body">
                            {{ $jenisLayanan->count('id') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">

                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Blog</h4>
                        </div>
                        <div class="card-body">
                            {{ $blogs->count('id') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">

                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pelanggan Count</h4>
                        </div>
                        <div class="card-body">
                            {{ $ListOrders->count('id') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>