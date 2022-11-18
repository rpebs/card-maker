<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet" />
    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }

        .bootstrap-tagsinput {
            width: 100%;
        }
    </style>

    <title>Welcome to card-maker</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Isi Data Card') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama"
                                        placeholder="Masukkan Nama" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan"
                                        required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                                        required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">No Handphone</label>
                                    <input type="text" class="form-control" name="no_hp"
                                        placeholder="No Handphone">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram"
                                        placeholder="Link Instagram">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook"
                                        placeholder="Link Facebook">
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Github</label>
                                    <input type="text" class="form-control" name="github" placeholder="Link Github">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="google" placeholder="Link Gmail">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin"
                                        placeholder="Link Linkedin">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Skill</label>
                                    <input type="text" class="form-control" name="tags" data-role="tagsinput"
                                        placeholder="Masukkan Skill" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Warna Background</label>
                                    <input type="color" class="form-control" name="bg_color"
                                        placeholder="Warna Background" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Warna Card</label>
                                    <input type="color" class="form-control" name="card_color"
                                        placeholder="Warna Card" required>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('File') }}</label>
                                <div class="col-md-12">
                                    <input type="file" class="form-control" name="gambar" required>
                                </div>
                            </div>



                            <div class="form-group justify-content-center row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
