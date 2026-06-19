<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="card">
        @if (session('success'))
        <span style="background: greenyellow;">{{session('success')}}</span>
        @endif

        @foreach ($users as $item)
        <div style="display: flex; justify-content: center; align-items: center;" class="">
            <img style="background: black;  width: 100px;" src="{{asset('storage/'.$item->image)}}" alt="">

        </div>

        @endforeach
    </div>
    <div style="border: 2px solid black; padding: 12px; margin-top: 23px;" class="container">
        <h2>register</h2>
        <form action="/user/store" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="name" type="text" value="{{old('name')}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="">

                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>

                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control">

                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" value="{{old('password')}}" type="password" class="form-control"
                    id="exampleInputPassword1" placeholder="Password">
            </div>
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>