<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
</head>
<style>
    .container {
        padding: 15px;
        margin-top: 15px;
        /* background-color: green; */
    }
</style>

<body>

    <div class="container card">
        <h1 class="text-center">Profile</h1>
        <form action="{{route('profile.store')}}" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" value="{{old('name')}}" placeholder="Name" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">

                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="text" name="age" value="{{old('age')}}" placeholder="Age" class="form-control"
                    id="exampleInputPassword1">
                @error('age')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Father Name</label>
                <input type="text" name="fatherName" value="{{old('fatherName')}}" placeholder="Father Name"
                    class="form-control" id="exampleInputPassword1">
                @error('fatherName')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mother Name</label>
                <input type="text" name="motherName" value="{{old('motherName')}}" placeholder="Mother Name"
                    class="form-control" id="exampleInputPassword1">
                @error('motherName')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>