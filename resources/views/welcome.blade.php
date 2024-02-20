<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PRODUCTION - SAI</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/production.png')}}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('assets/css/font.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <style>
        .icon-box .menu {
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s ease;
        }

        .icon-box:hover .menu {
            visibility: visible;
            opacity: 1;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 80%;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="#">Welcome To Production</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <!-- <li><a class="nav-link scrollto" href="#services">Menu</a></li>
                    <li><a class="getstarted scrollto" href="#about">About Us</a></li> -->
                    <li><a class="nav-link scrollto" href="#services">Menu</a></li>
                    <li><a class="getstarted scrollto" href="http://10.62.131.46">Home</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <section id="services" class="services">
        <div class="container">

            <div class="section-title mb-3 pt-5" data-aos="fade-up">
                <h2>Menu</h2>
                <p>Crafting Excellence, Scene by Scene.</p>
            </div> 

            <div class="row">
                @foreach($links as $link)
                <div class="col-sm-6 col-md-4 col-xl-3 d-flex align-items-stretch mb-5 lg-0">
                    <div class="text-center w-100">
                        <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100">
                            <button type="button" class="icon menu dropdown-btn d-flex align-items-center justify-content-center position-absolute top-0 end-0 mt-2 me-2 p-2" style="height: 30px; width: 30px;">
                                <img class="img" src="assets/img/menu.png" alt="Your Image" style="max-height: 20px;">
                            </button>
                            <div class="dropdown-content">
                                <form id="deleteForm{{ $link->id }}" action="{{ route('links.destroy', $link->id) }}" method="POST">
                                    <a id="editDataBtn" value="{{$link->id}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <a type="submit" class="deleteBtn">Delete</a>
                                </form>
                            </div>
                            <a href="http://{{$link->url}}">
                                <div class="icon d-flex align-items-center justify-content-center" style="height: 100px; width: 100px;"><img src="{{ asset('images/'. $link->gambar . '.png') }}" alt="Your Image" style="max-height: 100px;">
                                </div>
                                <h4 class="title"><a href="http://{{$link->url}}">{{ $link->title}}</a></h4>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 lg-0">
                    <div class="text-center w-100" id="tambahDataBtn" style="cursor: pointer;">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon d-flex align-items-center justify-content-center p-3" style="height: 100px; width: 100px;"><i class="bx bx-plus"></i></div>
                            <h4 class="title">Tambah Menu</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section> -->

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Choose Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @for($i = 1; $i <= 14; $i++) <div class="col-md-4 mb-3">
                            <img src="{{ asset('images/'. $i .'.png') }}" value="{{$i}}" alt="Image {{$i}}" class="img-fluid image-option" data-bs-toggle="modal" data-bs-target="#linkModal">
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="linkModal" tabindex="-1" role="dialog" aria-labelledby="linkModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="linkModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="linkForm">
                        <div class="form-group mb-3">
                            <label for="NIK">URL</label>
                            <input type="text" class="form-control form-control-user" id="url" name="url" required autofocus value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">NAMA</label>
                            <input type="text" class="form-control form-control-user" id="title" name="title" required autofocus value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="gambar">Gambar</label>
                            <input type="text" class="form-control form-control-user" id="gambar" name="gambar" required autofocus value="" hidden>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">
                                Choose Image
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-2">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" id="submitBtn" onclick="submitForm()">Save Change</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="passModal" tabindex="-1" role="dialog" aria-labelledby="passModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="passModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="NIK">Masukan Password</label>
                            <input type="password" class="form-control form-control-user" id="password" name="password" required autofocus value="">
                        </div>
                </div>
                <div class="modal-footer p-2">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" id="passBtn">confirm</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/plugins/jquery-3.6.4.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageOptions = document.querySelectorAll('.image-option');

            imageOptions.forEach(function(imageOption) {
                imageOption.addEventListener('click', function() {
                    const imageUrl = this.getAttribute('value');
                    document.getElementById('gambar').value = imageUrl;
                });
            });

            var dropdownBtns = document.querySelectorAll('.dropdown-btn');

            dropdownBtns.forEach(function (btn) {
                btn.addEventListener('click', function (event) {
                    var dropdownContent = this.nextElementSibling;

                    dropdownBtns.forEach(function (otherBtn) {
                        if (otherBtn !== btn) {
                            otherBtn.nextElementSibling.style.display = 'none';
                        }
                    });

                    if (dropdownContent.style.display === 'block') {
                        dropdownContent.style.display = 'none';
                    } else {
                        dropdownContent.style.display = 'block';
                    }
                    event.stopPropagation();
                });
            });

            document.addEventListener('click', function () {
                dropdownBtns.forEach(function (btn) {
                    btn.nextElementSibling.style.display = 'none';
                });
            });
            document.getElementById('password').addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    document.getElementById('passBtn').click();
                }
            });
        });
        $(document).ready(function() {
            var btnId = '';
            var value = '';
            var linkIdToDelete;
            $('#tambahDataBtn, #editDataBtn, .deleteBtn').click(function() {
                btnId = $(this).attr('id');
                if (btnId === 'editDataBtn') {
                    value = $(this).attr('value');
                } else if ($(this).hasClass('deleteBtn')){
                    btnId = 'delete';
                    linkIdToDelete = $(this).closest('form').attr('id').replace('deleteForm', '');
                }
                $('#passModal').modal('show');
            });

            $('#passModal #passBtn').click(function() {
                var password = $('#password').val();

                $.ajax({
                    url: '{{ route('passwords') }}',
                    type: 'POST',
                    data: { password: password },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.message === 'Password is correct') {
                            console.log(btnId);
                            if (btnId === 'delete') {
                                $('#deleteForm' + linkIdToDelete).submit();
                            } else if (btnId === 'tambahDataBtn') {
                                resetFormFields();
                                $('#submitBtn').text('Submit');
                                $('#linkModalLabel').text('Tambah Shortcut');
                                $('#linkForm').attr('action', '{{ route('links.store') }}');
                                $('#linkModal').modal('show');
                            } else if (btnId === 'editDataBtn') {
                                $('#submitBtn').text('Update');
                                $('#linkModalLabel').text('Edit Shortcut');
                                var id = value;
                                var editUrl = '{{ route('links.edit', ':id') }}'.replace(':id', id);
                                $.ajax({
                                    url: editUrl,
                                    type: 'GET',
                                    success: function(response) {
                                        var link = response.link;
                                        $('#title').val(link.title);
                                        $('#url').val(link.url);
                                        $('#gambar').val(link.gambar);
                                        $('#linkForm').attr('action', '{{ route('links.update', ':id') }}'.replace(':id', id));
                                        $('#linkModal').modal('show');
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(error);
                                    }
                                });
                            }
                            
                        } else if (response.message === 'Password is incorrect') {
                            alert('Password SALAH!');
                        }
                        $('#password').val('');
                        $('#passModal').modal('hide');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
                
                return false;
            });

            function resetFormFields() {
                $('#url').val('');
                $('#title').val('');
                $('#gambar').val('');
            }
        });


        function submitForm() {
            var formData = $('#linkForm').serialize();
            var actionUrl = $('#linkForm').attr('action');
            var method = 'POST';

            if ($('#submitBtn').text() === 'Update') {
                method = 'PUT';
            }

            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: actionUrl,
                type: method,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    $('#linkModal').modal('hide');

                    // Swal.fire({
                    //     title: "Success",
                    //     text: "Data Berhasil Disimpan",
                    //     icon: "success",
                    //     timer: 3500
                    // }).then(function() {
                    // });
                    window.location.reload();
                },
                error: function(xhr, status, error) {}
            });
        }
    </script>

    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>