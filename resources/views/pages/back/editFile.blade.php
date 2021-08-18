@extends('template.back')
@section('content')
    <section>
        <div class="container">
            <form action="/file/{{$edit->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">File:</label>
                    <input type="file" name="src" value="src" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </section>
@endsection