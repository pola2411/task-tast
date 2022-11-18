<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Document</title>

</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <form action="{{ route('search') }}">
                    @csrf
                    <div class="form-group">

                        <label for="exampleInputEmail1">Search</label>
                        <input type="text" name="search" class="form-control">
                    </div>

                    <ul>
                        <h5>Categories</h5>
                        <li><input type="radio" name="search" value="category-1" id="">category-1</li>
                        <li><input type="radio" name="search" value="category-2" id="">category-2</li>
                        <li><input type="radio" name="search" value="category-3" id="">category-3</li>


                    </ul>
                    <ul>
                        <h5>Brands</h5>
                        <li><input type="radio" name="search" value="brand-1" id="">brand-1</li>
                        <li><input type="radio" name="search" value="brand-2" id="">brand-2</li>
                        <li><input type="radio" name="search" value="brand-3" id="">brand-3</li>


                    </ul>

                    <button type="submit" class="btn btn-primary">search</button>
                    <a href="{{ route('all') }}"class="btn btn-info mx-auto">Back</a>


                </form>


            </div>
            <div class="col-md-9">

                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-md-6">
                            <h3>{{ $item->product }}</h3>

                        </div>
                    @endforeach


                    @if ($count > 20)
                        <a class="btn btn-info mx-auto" href="{{ route('pr.index') }}">Less </a>
                    @elseif ($count == 'empty')
                    @else
                        <a class="btn btn-info mx-auto" href="{{ route('all') }}">More </a>
                    @endif



                </div>



            </div>


        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

</body>

</html>
