{{-- @extends('dashboard.layout') {{-- You need to have a layout file to extend --}}
@extends('dashboard.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Skill Cards</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $skillCard)
                            <tr>
                                <td>{{ $skillCard->title }}</td>
                                <td>{{ $skillCard->description }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $skillCard->image) }}" alt="{{ $skillCard->title }}" style="max-width: 100px; max-height: 100px;">
                                </td>
                                <td class="mx-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('skill.edit', $skillCard->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('skill.destroy', $skillCard->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
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
