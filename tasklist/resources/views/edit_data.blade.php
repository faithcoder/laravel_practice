<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 p-4">
            <a href="{{url('/')}}" class="btn btn-warning mb-4">Show Data</a>

            <form action="{{url('/update-data/'.$editData->id)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $editData->name }}" class="form-control" id="exampleInputPassword1">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" name="email" value="{{ $editData->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>