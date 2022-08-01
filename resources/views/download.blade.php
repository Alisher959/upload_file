<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload and find file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="contaier">
        <h2 class="text-center mb-5 mt-5">Faylni yuklab olishingiz uchun bitta fayl yuklashingiz kerak</h2>

        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-7">
                    <div class="mb-3">
                        <label for="file" class="form-label">Fayl yuklang</label>
                        <input type="file" name="file" id="file" class="form-control" id="inputGroupFile02">
                    </div>

                </div>
                <div class="col-7">
                    <div class="mb-3">
                        <label for="title" class="form-label">Sarlavhani kiriting </label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Sarlavhani kiriting" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-7">
                    <div class="mb-3">
                        <label for="text" class="form-label">Matnni kiriting</label>
                        <textarea class="form-control" name="text" placeholder="Matnni kiriting" id="text" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-7">
                    <button type="submit" class="btn btn-primary">Yuklash</button>
                </div>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>