@extends('layouts.contest.app')

@section('content')

    <div class="row">
    @foreach($videos as $video)

        <div class="col-md-4">
            <div class="card m-b-30">

                <video src="storage/folder/{{ $video->video }}"  controls="controls"></video>
                <div class="card-body">
                    <h5 class="card-title" id="number_voices{{ $video->id }}">{{ $video->number_voices }}</h5>
                    <p class="card-text">Короткое описание видео</p>
                    <button class="btn btn-primary" onclick="vote('{{ $video->id }}')">
                        Проголосовать
                    </button>
                </div>
            </div>
        </div>

    @endforeach

    </div>



    <script>

        function vote(id)
        {
            $.ajax({
                url: '{{ url('contest/vote') }}',
                type: "POST",
                data: {
                    id_video: id,
                    _token: '{!! csrf_token() !!}',
                },
                success: function(data) {
                    $('#number_voices'+id).html(data);
                }
            });
        }

    </script>



@endsection