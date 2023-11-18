<div>
    <div class="card card-primary">
        <div class="card-header">
            <h6>Ulasan pengguna </h66>
        </div>
        <div class="card-body ">
            <div class="row mb-3 border-bottom pb-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4 text-center">
                            <h1>{{ round($surveys->avg('rate'),1) }}</h1>
                            <div style="color: #ffa426">
                                @for($i = 1; $i <= round($surveys->avg('rate'),PHP_ROUND_HALF_DOWN); $i++)
                                    <i class="fas fa-star"></i>
                                    @endfor
                                    @if(round($surveys->avg('rate'),1) >
                                    floor($surveys->avg('rate')))
                                    <i class="fa fa-star-half" aria-hidden="true"></i>

                                    @endif
                            </div>
                            <i class="fa fa-user" aria-hidden="true"></i> {{ $surveys->count() }} pengguna
                        </div>
                        <div class="col-8">
                            <table class="w-100">
                                <tr>
                                    <td width="10">5</td>
                                    <td>
                                        <div class="progress"
                                            style="background:transparent !important; border-radius: 0px !important">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $lima }}%"
                                                aria-valuenow="{{ $lima }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="progress"
                                            style="background:transparent !important; border-radius: 0px !important">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $empat }}%"
                                                aria-valuenow="{{ $empat }}" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="progress"
                                            style="background:transparent !important; border-radius: 0px !important">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $tiga }}%"
                                                aria-valuenow="{{ $tiga }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="progress"
                                            style="background:transparent !important; border-radius: 0px !important">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $dua }}%"
                                                aria-valuenow="{{ $dua }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="progress"
                                            style="background:transparent !important; border-radius: 0px !important">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $satu }}%"
                                                aria-valuenow="{{ $satu }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            @if(!$current or $change)
            <form wire:submit.prevent="save">
                <div class="form-group">
                    <label for="feedback">Berikan tanggapan Anda mengenai aplikasi ini </label>
                    <textarea name="feedback" wire:model="feedback" id=""
                        class="form-control @error('feedback') is-invalid @enderror"></textarea>
                    <div class="rating">
                        <input type="radio" wire:model="rating" value="5" id="rating-5"
                            class="@error('rating') is-invalid @enderror">
                        <label for="rating-5"></label>
                        <input type="radio" wire:model="rating" value="4" id="rating-4"
                            class="@error('rating') is-invalid @enderror">
                        <label for="rating-4"></label>
                        <input type="radio" wire:model="rating" value="3" id="rating-3"
                            class="@error('rating') is-invalid @enderror">
                        <label for="rating-3"></label>
                        <input type="radio" wire:model="rating" value="2" id="rating-2"
                            class="@error('rating') is-invalid @enderror">
                        <label for="rating-2"></label>
                        <input type="radio" wire:model="rating" value="1" id="rating-1"
                            class="@error('rating') is-invalid @enderror">
                        <label for="rating-1"></label>
                    </div>
                    @error('feedback')
                    <span class='invalid-feedback'>
                        <strong>{{ $message }} </strong>
                    </span>
                    @enderror
                    @error('rating')
                    <span class='invalid-feedback'>
                        <strong>{{ $message }} </strong>
                    </span>
                    @enderror
                </div>

                <div class="text-right">
                    <button class="btn btn-primary">Beri ulasan</button>
                </div>
            </form>
            @endif
            <ul class="list-unstyled list-unstyled-border">
                @foreach($surveys as $survey)
                <li class="media">
                    <img alt="image" class="mr-3 rounded-circle" src="{{ $survey->author->profile_photo_url }}"
                        width="50">
                    <div class="media-body">
                        <div class="mt-0 mb-1 font-weight-bold">{{ $survey->author->name }}</div>
                        <div style="color: #ffa426">
                            @for($i = 1; $i<= $survey->rate ; $i++)
                                <i class="fas fa-star"></i>
                                @endfor
                        </div>
                        <div>
                            {{ $survey->message }}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="text-center">
                <a href="{{ route('feedback') }}">Lihat semua ulasan >></a>
            </div>
        </div>

    </div>
</div>
