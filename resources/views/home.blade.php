<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    
    <meta name="author" content="" />
    <title>Personal - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <style>
        body {
            background: url("{{ asset('assets/assets/bg.jpg') }}") center/cover no-repeat fixed;
        }

        .zoom-on-hover .bg-white {
            transition: transform 0.3s ease;
        }

        .zoom-on-hover:hover .bg-white {
            transform: scale(1.1);
        }

        .zoom-on-hover:hover {
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light py-3 mb-5">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2 class="fw-bolder text-primary">PRODUCTION</h2>
                </a>
            </div>
        </nav>
        <!-- Header-->
        <div class="d-flex">
            <div class="container d-flex align-items-center justify-content-center">
                <div class="row w-100">
                    <!-- <div class="col-md-3 mb-5 d-flex align-items-center justify-content-center text-center ">
                        <a href="#" class="zoom-on-hover">
                            <div class="position-relative" style="width: 170px; height: 170px;">
                                <img src="{{ asset('images/1707970140936.png') }}" alt="Image" class="position-absolute start-50 translate-middle"
                                    style="width: 250px; height: auto; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                                <div class="bg-white shadow px-2 d-flex align-items-center justify-content-center text-center"
                                    style="position: absolute; width: 100%; height: 100%; border-radius: 15px; backdrop-filter: blur(20px); opacity:30%">
                                    <div class="m-1 border w-80 h-80"></div>
                                </div>
                            </div>
                        </a>
                    </div> -->
                    @foreach($links as $link)
                    <div class="col-md-3 mb-5 d-flex align-items-center justify-content-center text-center">
                        <a href="{{$link->url}}" class="zoom-on-hover">
                            <div class="bg-white shadow px-2 d-flex align-items-center justify-content-center text-center"
                                style="width: 170px; height: 170px; border-radius: 15px; backdrop-filter: blur(20px);">
                                <div class="position-relative">
                                    <img src="{{ asset('images/'. $link->url . '.png') }}" alt="Image" class="position-absolute start-50 translate-middle"
                                        style="width: 250px; height: auto; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                </div>
                                <div class="m-1 border w-80 h-80"></div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <div class="col-md-3 mb-5 d-flex align-items-center justify-content-center text-center">
                        <a class="zoom-on-hover" id="tambahDataBtn">
                            <div class="bg-white shadow px-2 d-flex align-items-center justify-content-center text-center"
                                style="width: 170px; height: 170px; border-radius: 15px; backdrop-filter: blur(20px);">
                                <div class="position-relative">
                                    <img src="{{ asset('images/more.png') }}" alt="Image" class="position-relative"
                                        style="width: 170px; height: auto;">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Choose Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @for($i = 1; $i <= 14; $i++)
                        <div class="col-md-4 mb-3"> 
                            <img src="{{ asset('images/'. $i .'.png') }}" value="{{$i}}" alt="Image {{$i}}" class="img-fluid image-option" data-bs-toggle="modal" data-bs-target="#linkModal">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="linkModal" tabindex="-1" role="dialog" aria-labelledby="linkModalLabel"
        aria-hidden="true">
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
                <div class="modal-footer p-0 pt-2 pe-2">
                    <button type="button" class="btn btn-sm bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm bg-gradient-primary" id="submitBtn" onclick="submitForm()">Save Change</button>
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
                    <form id="linkForm">
                        <div class="form-group mb-3">
                            <label for="NIK">Masukan Password</label>
                            <input type="password" class="form-control form-control-user" id="password" name="password" required autofocus value="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-0 pt-2 pe-2">
                    <button type="button" class="btn btn-sm bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm bg-gradient-primary" id="submitBtn" onclick="submitForm()">Save Change</button>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('assets/js/plugins/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageOptions = document.querySelectorAll('.image-option');

            imageOptions.forEach(function (imageOption) {
                imageOption.addEventListener('click', function () {
                    const imageUrl = this.getAttribute('value');
                    document.getElementById('gambar').value = imageUrl;
                });
            });
        });
        $(document).ready(function() {
            $('#tambahDataBtn').click(function() {
                resetFormFields();
                $('#submitBtn').text('Submit');
                $('#linkModalLabel').text('Tambah Shortcut');
                $('#linkForm').attr('action', '{{ route('links.store') }}');

                $('#passModal').modal('show');
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

            if (actionUrl.includes('update-user')) {
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
                    Swal.fire({
                        title: "Success",
                        text: "Data Berhasil Disimpan",
                        icon: "success",
                        timer: 3500
                    });
                },
                error: function(xhr, status, error) {}
            });
            }
    </script>
</body>

</html>