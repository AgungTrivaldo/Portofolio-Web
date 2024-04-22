@extends('dashboard.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Skill Card</div>

                    <div class="card-body">
                        <form action="{{ route('skill.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ $data->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <img src="{{ asset('images/' . $data->image) }}" alt="{{ $data->title }}" style="max-width: 100px;">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Skill Card</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
