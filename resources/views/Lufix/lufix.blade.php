@extends('master')

@section('title')
    Lufix Service
@endsection

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="button mb-4">
                <button class="btn btn-info"><span>General</span></button>

                <button class="btn btn-info">Added Service</button>

                <button class="btn btn-info">Add Service</button>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow border-0 rounded-lg mt-3">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Add Service</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('saveLufix')}}" method="post">
                                @csrf
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="title" type="text"
                                           placeholder="Title"/>
                                    <label>Title</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="description" type="text"
                                           placeholder="Your service description"/>
                                    <label>Description</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="proof" type="text"
                                           placeholder="url"/>
                                    <label>Proof</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="selling_type" type="text"
                                           placeholder="Selling Type"/>
                                    <label>Selling Type</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="duration" type="text"
                                           placeholder="Duration"/>
                                    <label>Duration</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" name="price_type" type="text"
                                           placeholder="Price Type"/>
                                    <label>Price Type</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-sm">ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Added</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @php $key=1; @endphp
                @foreach ($lufixes as $item)
                    <tr>
                        <td>{{ $key++ }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->duration }}</td>
                        <td>{{ $item->price_type }}</td>

                        @if($item->status == 1)
                            <td>Enable</td>
                        @else
                            <td>Disable</td>
                        @endif

                        <td>{{ $item->updated_at}}</td>
                        <td>
                            <a href="{{route('editLufix',['id'=>$item->id])}}"
                               class="btn btn-primary btn-sm">Update</a>
                            <form action="{{route('deleteLufix')}}" method="post">
                                @csrf
                                <input type="hidden" name="lufix_id" value="{{$item->id}}">
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure delete this?')">Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection