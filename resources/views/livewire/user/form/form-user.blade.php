<div>
    <section class="section">
        <div class="section-header">
            <h1> {{ __($title) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __($title) }}</div>
            </div>

        </div>

        <div class="section-body">

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form wire:submit.prevent="save">

                                <div class="form-group">
                                    <label for="name">{{__('Fullname') }} <span class='text-danger'>*</span></label>
                                    <input type="hidden" value="" wire:model.defer="selectedItem">
                                    <input wire:model.defer="name" name="name" type="text" id=""
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Email <span class='text-danger'>*</span></label>
                                    <input wire:model.defer="email" name="email" type="text" id=""
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- <div class="form-group">
                                    <label for="name">Whatsapp </label>
                                    <input wire:model.defer="wa" name="wa" type="text" id=""
                                        class="form-control @error('wa') is-invalid @enderror">
                                    @error('wa')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div> --}}



                                <div class="form-group">
                                    <label for="role">Role <span class="text-danger">*</span></label>
                                    <select name="role" wire:model="role" id="job" data-live-search="true"
                                        class="form-control @error('role') is-invalid @enderror">
                                        <option value=""> -- {{__('Pilih Role') }} --</option>
                                        @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>

                                        @endforeach
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>
                                @if($userRole == 'Admin Bank')
                                <div class="form-group">
                                    <label for="bank">Lembaga <span class="text-danger">*</span></label>
                                    <select name="bank" wire:model="bank" id="bank" data-live-search="true"
                                        class="form-control @error('role') is-invalid @enderror">
                                        <option value=""> -- {{__('Pilih Lembaga') }} --</option>
                                        @foreach($banks as $bank)
                                        <option value="{{ $bank->id }}">{{ $bank->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                    @enderror
                                </div>
                                @endif


                                @if(!$selectedItem)
                                <div class="row ">
                                    <div class="col-12">
                                        <div class=" p-4 rounded text-white bg-primary text-center">

                                            Secara default, sistem akan men-generate email sebagai password dan email
                                            berisi informasi login akan dikirimkan kepada pengguna.
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="text-right mt-3">
                                    <a href="{{ route('user') }}" class="btn btn-secondary mr-1">Cancel</a>
                                    <button class="btn btn-primary mr-1">Save</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>