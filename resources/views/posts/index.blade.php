@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Daftar Pesanan</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Create Post</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-info"><i class="fas fa-eye"></i> View</a>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
