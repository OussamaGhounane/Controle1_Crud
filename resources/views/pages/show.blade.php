@extends('layouts.app')
@section('title','Show')

@section('content')
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Start_date</th>
            <th>End_date</th>
            <th>Price</th>
        </tr>
        @foreach ($events as $eve)
        <tr>
            <td>{{$eve->title}}</td>
            <td>{{$eve->description}}</td>
            <td>{{$eve->start}}</td>
            <td>{{$eve->end}}</td>
            <td>{{$eve->price}}</td>
            <td>
                <a name="" id="" class="btn btn-primary" href="{{route('edit',$eve->id)}}" role="button">Update</a>
                <form action="{{ route('delete', $eve->id) }}" method="POST"
                    class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#confirmDeleteModal{{ $eve->id }}">
                        Delete
                    </button>

                    <!-- Confirm Delete Modal -->
                    <div class="modal fade" id="confirmDeleteModal{{ $eve->id }}"
                        tabindex="-1"
                        aria-labelledby="confirmDeleteModalLabel{{ $eve->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"
                                        id="confirmDeleteModalLabel{{ $eve->id }}">
                                        Confirm Delete</h5>
                                    <button type="button" class="btn-close"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this event?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"
                                        class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection