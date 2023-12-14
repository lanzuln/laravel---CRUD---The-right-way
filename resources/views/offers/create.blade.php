<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#"><span><img src="{{ asset('laravel.png') }}" alt=""
                                width="30"></span> Laravel CRUD</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-middle">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"><span class="menu_icon"><i
                                        class="fa-solid fa-gauge"></i></span> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="menu_icon"><i
                                        class="fa-brands fa-buffer"></i></span> Offers</a>
                        </li>
                    </ul>
                    <form class="d-flex" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-outline-success" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <h3 class="text-center pb-4">Create offer</h3>
                        <form class="row g-3" action="{{route('offers.store')}}" method="post">
                            @csrf
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="inputEmail4">
                                @error('title')
                                <p class="error_message">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Price</label>
                                <input type="number" name="price" class="form-control" id="inputEmail4">
                                @error('price')
                                <p class="error_message">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Category</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($category as $item)
                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                <p class="error_message">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Location</label>
                                <select class="form-select" name="location_id" aria-label="Default select example">
                                    <option selected disabled>Select Location</option>
                                    @foreach ($location as $item)
                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                                @error('location_id')
                                <p class="error_message">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="formFileSm" class="form-label">Image</label>
                                <input class="form-control form-control-sm" name="image" id="formFileSm" type="file">
                                @error('image')
                                <p class="error_message">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="" cols="20" rows="5"></textarea>
                                @error('description')
                                <p class="error_message">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="row pt-4">
                                <div class="col-6">
                                    <button  class="btn btn-outline-danger w-100"><i
                                        class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-success w-100">Sign in</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
