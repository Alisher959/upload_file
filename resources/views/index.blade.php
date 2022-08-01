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
        <form action="{{ route('index', request()->query()) }}">
            <div class="row justify-content-center">
                <div class="col-7">
                    <!-- Search file start -->
                    <div class="input-group mb-3 mt-3">
                        <input type="text" name="q" class="form-control" placeholder="Masalan: Dars reja" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Qidiruv</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row justify-content-around">

            <div class="col-8">
                <div class="row justify-content-around">
                    @foreach($users as $user)
                    <div class="col-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->title }}</h5>
                                <p class="card-text">{{ $user->text }}</p>
                                <a href="create" class="btn btn-primary">Yuklab olish</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>