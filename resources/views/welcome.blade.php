
@extends('template.main')
@section('content')
    <section>
        <div class="container mt-5">
            <h1>Les images</h1>
            <div class="row">
                @foreach ($files as $file)
                    @if (Str::contains($file->src, ['.jpg', '.png']))
                        <div class="col-4">
                            <img width="350px" src="{{ asset('storage/img/' . $file->src) }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="container mt-5">
            <h1>Les autres fichiers</h1>
            <div class="row">
                @foreach ($files as $file)
                    @unless(Str::contains($file->src, ['.jpg', '.png']))
                        <div class="col-4">
                            <iframe src="{{ asset('storage/img/' . $file->src) }}" frameborder="0"></iframe>
                        </div>
                    @endunless
                @endforeach
            </div>
        </div>
    </section>
@endsection