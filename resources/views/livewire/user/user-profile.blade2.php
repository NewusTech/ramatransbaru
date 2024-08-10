<div>
    <section class="section">
        <div class="section-header">
            <h1> {{ __($title) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('user') }}">User</a></div>
                <div class="breadcrumb-item">{{ __($title) }}</div>
                <div class="breadcrumb-item">{{ __($user->name) }}</div>
            </div>

        </div>

        <div class="section-body">
            <div class="right-part mail-list bg-white overflow-auto">
                <div class="p-3 border-bottom">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4>Mailbox</h4>
                            <span>Here is the list of mail</span>
                        </div>
                        <div class="ms-auto mt-3 mt-md-0">
                            <input placeholder="Search Mail" id="" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                @livewire('user.notifications.unread-notif')
                <!-- Mail list-->
                <div class="table-responsive">
                    <table class="
                  table
                  email-table
                  no-wrap
                  table-hover
                  v-middle
                  customize-table
                ">
                        <tbody>
                            <!-- row -->
                            <tr class="unread">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst1">
                                        <label class="form-check-label" for="cst1">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Hanna Gover</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)"><span class="
                            badge
                            bg-light-danger
                            text-danger
                            font-weight-medium
                            rounded-pill
                            px-3
                            me-2
                          ">Work</span>
                                        <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span>
                                        unde omnis iste natus error sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">12:30 PM</td>
                            </tr>
                            <!-- row -->
                            <tr class="unread">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst2">
                                        <label class="form-check-label" for="cst2">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Genelia Roshan</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)"><span class="
                            badge
                            bg-light-info
                            text-info
                            font-weight-medium
                            rounded-pill
                            px-3
                            me-2
                          ">Business</span>
                                        <span class="blue-grey-text text-darken-4">Inquiry about license </span>for
                                        Admin Template please provide us the license detail
                                    </a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">11:30 AM</td>
                            </tr>
                            <!-- row -->
                            <tr class="unread">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst3">
                                        <label class="form-check-label" for="cst3">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="
                        user-name
                        max-texts
                        text-truncate
                        px-1
                        py-3
                        no-wrap
                      ">
                                    <h5 class="mb-0 text-truncate">Ritesh Deshmukh</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)"><span class="
                            badge
                            bg-light-warning
                            text-warning
                            font-weight-medium
                            px-3
                            rounded-pill
                            me-2
                          ">Friend</span>
                                        <span class="blue-grey-text text-darken-4">Bitbucket (commit Pushed) by
                                            Ritesh</span>Lorem ipsum perspiciatis unde omnis iste natus error
                                        sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">10:30 AM</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst4">
                                        <label class="form-check-label" for="cst4">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Akshay Kumar</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)"><span class="
                            badge
                            bg-light-info
                            text-info
                            font-weight-medium
                            rounded-pill
                            px-3
                            me-2
                          ">Work</span>Perspiciatis unde omnis- iste Lorem ipsum perspiciatis
                                        unde omnis iste natus error sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">9:30 AM</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst5">
                                        <label class="form-check-label" for="cst5">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">John Abraham</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)"><span class="
                            badge
                            bg-light-success
                            text-success
                            font-weight-medium
                            rounded-pill
                            px-3
                            me-2
                          ">Work</span>
                                        Lorem ipsum perspiciatis- unde omnis iste natus error
                                        sitnatus error sit voluptatem voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">Mar 10</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst6">
                                        <label class="form-check-label" for="cst6">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Akshay Kumar</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)">
                                        Lorem ipsum perspiciatis - unde omnis iste natus error
                                        sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">Mar 09</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst7">
                                        <label class="form-check-label" for="cst7">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Hanna Gover</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)">
                                        Unde omnis Lorem ipsum perspiciatis - unde omnis iste
                                        natus error sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">Mar 09</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst8">
                                        <label class="form-check-label" for="cst8">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Akshay Kumar</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)">
                                        Iste natus error sit lorem - ipsum perspiciatis unde
                                        omnis iste natus error sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">Mar 09</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst9">
                                        <label class="form-check-label" for="cst9">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Hanna Gover</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)"><span class="
                            badge
                            bg-light-danger
                            text-danger
                            font-weight-medium
                            rounded-pill
                            px-3
                            me-2
                          ">Work</span>
                                        Lorem ipsum perspiciatis unde omnis iste natus error sit
                                        voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">12:30 PM</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst10">
                                        <label class="form-check-label" for="cst10">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Akshay Kumar</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)">
                                        Lorem ipsum perspiciatis - unde omnis iste natus error
                                        sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">Mar 09</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst11">
                                        <label class="form-check-label" for="cst11">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0">Hanna Gover</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)">
                                        Unde omnis Lorem ipsum perspiciatis - unde omnis iste
                                        natus error sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">Mar 09</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst12">
                                        <label class="form-check-label" for="cst12">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Akshay Kumar</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)">
                                        Iste natus error sit lorem - ipsum perspiciatis unde
                                        omnis iste natus error sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">Mar 09</td>
                            </tr>
                            <!-- row -->
                            <tr class="">
                                <!-- label -->
                                <td class="chb">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="cst13">
                                        <label class="form-check-label" for="cst13">&nbsp;</label>
                                    </div>
                                </td>
                                <!-- star -->
                                <td class="starred"><i class="far fa-star"></i></td>
                                <!-- User -->
                                <td class="user-image">
                                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                        width="30">
                                </td>
                                <td class="user-name">
                                    <h5 class="mb-0 text-truncate">Hanna Gover</h5>
                                </td>
                                <!-- Message -->
                                <td class="max-texts text-truncate px-1 py-3 no-wrap">
                                    <a class="link" href="javascript: void(0)">Lorem ipsum perspiciatis unde omnis iste
                                        natus error
                                        sit voluptatem</a>
                                </td>
                                <!-- Attachment -->
                                <td class="clip"><i class="fa fa-paperclip"></i></td>
                                <!-- Time -->
                                <td class="time">12:30 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-3 mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>



</div>

@push('scripts')

<script>

</script>
@endpush
