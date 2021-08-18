@extends('template.back')
@section('content')
    <section>
        <div class="container mt-5">
            <a class="btn btn-success text-white" href="/file/create">Ajouter un fichier</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">src</th>
                        <th scope="col">Utilites</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <th scope="row">{{$file->id}}</th>
                            <td><img width="150px" src="{{asset('storage/img/'.$file->src)}}"></td>
                            <td>
                                <form action="/file/{{$file->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"> DELETE </button>
                                </form>
                                <a href="/file/{{$file->id}}/edit" class="btn btn-warning">EDIT</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection