@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Portfolio</span>
                        <a href="{{ route('dashboard.portfolio.create') }}" type="button" class="btn btn-primary">
                            Add Portfolio
                        </a>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $data)
                                <tr>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->short_description }}</td>
                                    <td>
                                        @if ($data->image)
                                            <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}" style="max-width: 100px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('dashboard.portfolio.edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('dashboard.portfolio.destroy', $data->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this portfolio?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

