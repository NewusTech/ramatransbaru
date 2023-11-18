<div>
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">{{ $content->title }}</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>{{ $content->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-md-12 pe-lg-9 pe-3 mb-6 aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    {!! $content->content !!}
                </div>
            </div>
        </div>
    </div>
</div>