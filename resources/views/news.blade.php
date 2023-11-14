<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
@include('layouts.partial.navbar')
<div>
    <h1 class="text-center mt-4">List Games</h1>
    <div class="d-flex flex-lg-wrap justify-content-sm-around">
        @foreach ($games as $key => $item)
            <div onclick="" class="card m-5">
                <img src="{{$item->image}}" class="card-img">
                <div class="card-body d-flex justify-content-sm-between align-items-center">
                    <div class="">
                        <p class="card-title">{{$item->news_title}}</p>

                        <h4 class="card-text">{{$item->news_date}}</h4>
                    </div>
                </div>
                <button type="button"
                        class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{ $item->id }}">Edit</button>
            </div>

            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Game</h1>
                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <h1>{{ $item->news_title }}</h1>
                            </div>
                            <div class="mb-3">
                                <p>
                                    {{ $item->news_body }}

                                </p>                                </div>
                            <div class="mb-3">
                                <p> {{ $item->news_watch }}</p>

                            </div>
                            <div class="mb-3">
                                <p>                                     Release date: {{ $item->news_date }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>

</html>
