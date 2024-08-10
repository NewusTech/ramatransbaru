<div>

    <section class="section">
        <div class="section-header">
            <h1> {{  __($title) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Permissions') }}</div>
            </div>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills w-100" role="tablist">
                                <li class="nav-item mr-1">
                                    <a class="nav-link active" id="main-tab" data-toggle="tab" href="#main" role="tab"
                                        aria-controls="main" aria-selected="true">{{ __('All') }} <span
                                            class="badge badge-white">{{ count($users) }}
                                        </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trash-tab" data-toggle="tab" href="#trash" role="tab"
                                        aria-controls="trash" aria-selected="false">{{ __('Trash') }} <span
                                            class="badge badge-primary">{{ count($trash) }}</span></a>
                                </li>
                                <li class="nav-pill ml-auto">
                                    @can('users.create')
                                    <a class="nav-link active" href="#" wire:click="open('add')" data-toggle="tooltip"
                                        title="{{ __('Add New') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    @endcan
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">

                                <!-- Main -->
                                <div class="tab-pane fade show active" id="main" role="tabpanel"
                                    aria-labelledby="main-tab">
                                    <div class="float-left">
                                        <select class="form-control selectric">
                                            <option value=''>{{ __('Action For Selected') }}</option>
                                            @can('users.create')
                                            <option value='delete' wire:click="confirm(null, true)">{{ __('Delete')}}
                                            </option>
                                            @endcan
                                        </select>
                                    </div>
                                    <div class="float-right">
                                        <form>
                                            <div class="input-group">
                                                <input wire:model="search" type="text" class="form-control"
                                                    placeholder="Search">

                                            </div>
                                        </form>
                                    </div>

                                    <div class="clearfix mb-3"></div>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>

                                                <th class="text-center pt-2">
                                                    <div class="custom-checkbox custom-checkbox-table custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            wire:click="multiple('all')" data-checkbox-role="dad"
                                                            class="custom-control-input" id="checkbox-all">
                                                        <label for="checkbox-all"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>{{__('Name') }}</th>
                                                <th>{{__('Email') }}</th>
                                                <th>{{__('Phone') }}</th>
                                                <th>{{__('Address') }}</th>
                                                <th>{{__('Created At') }}</th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td class="text-center pt-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                wire:click="multiple" wire:model="selectedItems"
                                                                class="custom-control-input" value="{{ $user->id }}"
                                                                id="checkbox-{{ $user->id }}">
                                                            <label for="checkbox-{{ $user->id }}"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->name }} <br> <span
                                                            class="text-info">{{ $user->refcode }}</span></td>
                                                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                                    <td><a href="tel:{{ $user->phone  }}">{{ $user->phone  }}</a></td>
                                                    <td>{{ $user->address  }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>

                                                        <div class="dropdown d-inline mr-2">
                                                            <button class="btn btn-primary " type="button"
                                                                id="dropdownMenuButton" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu" x-placement="top-start"
                                                                style="position: absolute; transform: translate3d(0px, -10px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                @can('users.edit')
                                                                <a class="dropdown-item"
                                                                    wire:click="open('update', {{ $user->id }})"
                                                                    href="#">{{__('Edit') }}</a>
                                                                @endcan
                                                                @can('users.delete')
                                                                <a class="dropdown-item"
                                                                    wire:click="confirm({{ $user->id }})"
                                                                    href="#">{{__('Delete') }}</a>
                                                                @endcan
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="float-right">
                                        {{ $users->links() }}

                                    </div>
                                </div>
                                <!-- End Main -->

                                <!-- Trash -->
                                <div class="tab-pane fade" id="trash" role="tabpanel" aria-labelledby="trash-tab">
                                    <div class="float-left">
                                        <select class="form-control selectric">
                                            <option value=''>{{__('Action For Selected') }}</option>
                                            @can('users.create')
                                            <option value='deletePermanently' wire:click="confirm(null, true, true)">
                                                {{__('Delete Permanently') }}
                                            </option>
                                            @endcan
                                        </select>
                                    </div>
                                    <div class="float-right">
                                        <form>
                                            <div class="input-group">
                                                <input wire:model="search" type="text" class="form-control"
                                                    placeholder="{{ __('Search') }}">

                                            </div>
                                        </form>
                                    </div>

                                    <div class="clearfix mb-3"></div>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>

                                                <th class="text-center pt-2">
                                                    <div class="custom-checkbox custom-checkbox-table custom-control">
                                                        <input type="checkbox" data-checkboxes="mytrash"
                                                            wire:click="multiple('all')" data-checkbox-role="dad"
                                                            class="custom-control-input" id="checkbox-all">
                                                        <label for="checkbox-all"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>{{__('Name') }}</th>
                                                <th>{{__('Email') }}</th>
                                                <th>{{__('Phone') }}</th>
                                                <th>{{__('Address') }}</th>
                                                <th>{{__('Created At') }}</th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                @foreach($trash as $user)
                                                <tr>
                                                    <td class="text-center pt-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mytrash"
                                                                wire:click="multiple" wire:model="selectedItems"
                                                                class="custom-control-input" value="{{ $user->id }}"
                                                                id="checkbox-{{ $user->id }}">
                                                            <label for="checkbox-{{ $user->id }}"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->name }}br> <span
                                                            class="text-info">{{ $user->refcode }}</span></td>
                                                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                                    <td><a href="tel:{{ $user->phone  }}">{{ $user->phone  }}</a></td>
                                                    <td>{{ $user->address  }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>

                                                        <div class="dropdown d-inline mr-2">
                                                            <button class="btn btn-primary " type="button"
                                                                id="dropdownMenuButton" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu" x-placement="top-start"
                                                                style="position: absolute; transform: translate3d(0px, -10px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                @can('users.edit')
                                                                <a class="dropdown-item"
                                                                    wire:click="open('update', {{ $user->id }})"
                                                                    href="#">{{__('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    wire:click="restore({{ $user->id }})"
                                                                    href="#">{{__('Restore') }}</a>
                                                                @endcan
                                                                @can('users.delete')
                                                                <a class="dropdown-item"
                                                                    wire:click="confirm({{ $user->id }}, false, true)"
                                                                    href="#">{{__('Delete') }}</a>
                                                                @endcan
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="float-right">
                                        {{ $trash->links() }}

                                    </div>
                                </div>
                                <!-- End Trash -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __($title) }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="refcode">{{__('Customer Code') }} <span class='text-danger'>*</span></label>
                            <input wire:model="refcode" name="refcode" type="text" readonly
                                class="form-control @error('refcode') is-invalid @enderror">
                            @error('refcode')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('Fullname') }} <span class='text-danger'>*</span></label>
                            <input wire:model="name" name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Email <span class='text-danger'>*</span></label>
                            <input wire:model="email" name="email" type="text"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('Phone') }} <span class='text-danger'>*</span></label>
                            <input wire:model="phone" name="phone" type="text"
                                class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('Address') }} <span class='text-info'
                                    style='font-size:10px'>(Optional)</span></label>
                            <input wire:model="address" name="email" type="text"
                                class="form-control @error('address') is-invalid @enderror">
                            @error('address')
                            <span class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" wire:keydown.enter="save" wire:click="save"
                        class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
