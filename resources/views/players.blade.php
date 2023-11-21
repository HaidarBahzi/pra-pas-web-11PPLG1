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
    <h1 class="text-center mt-4">List Players</h1>
    <div class="d-flex flex-lg-wrap justify-content-sm-around">
        @foreach ($players as $key => $item)


            <button class="card m-4" style="max-width: 540px;" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal{{ $item->id }}">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{$item->player_photo}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->player_name}}</h5>
                            <p class="card-text">{{$item->player_short_description}}</p>
                            <p class="card-text"><small class="text-body-secondary">Created {{$item->player_created}}</small></p>
                        </div>
                    </div>
                </div>
            </button>

            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Player</h1>
                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <div class="d-flex">
                                <div class="mb-3">
                                    <img src="{{ $item->player_photo }}" />
                                </div>
                                <div class="mb-3">
                                    <h1>{{ $item->player_name }}</h1>
                                </div>
                                <div class="mb-3">
                                    {{$item->player_level}}
                                </div>
                            </div>

                            <div class="mb-3">
                                <p>
                                    {{ $item->player_location }}

                                </p>                                </div>
                            <div class="mb-3">
                                <p> {{ $item->player_aliases }}</p>

                            </div>

                            <div class="mb-3">
                                <p> {{ $item->player_short_description }}</p>
                            </div>

                            <div class="mb-3">
                                <p> @if($item->player_description == null)
                                    No Information Given
                                    @else
                                    {{$item->player_description}}
                                    @endif</p>
                            </div>

                            <div class="mb-3">
                                <p>Game: {{ $item->player_game_library }}</p>
                            </div>

                                <div class="mb-3">
                                <p>                                     Created at: {{ $item->player_created }}
                                </p>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>

</html>
