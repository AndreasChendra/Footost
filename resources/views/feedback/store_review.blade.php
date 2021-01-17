@extends('layouts.app')
@section('title', "Review Store - Footost")

@section('content')

    @if (empty($reviews) || count($reviews) == 0)
        <div class="container position-empty">
            <div class="alert alert-danger pt-5 pb-5" role="alert">
                <strong>This Store has no Reviews!</strong>
            </div>
        </div>
    @else
        <div class="container">
            <h1 class="text-center mt-4 mb-4">All Review</h1>
        </div>
        <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                                <table class="table table-hover text-center" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Description</th>
                                            <th>Rating</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews->reverse() as $review)
                                            <tr>
                                                <td>{{ $review->user->name }}</td>
                                                <td>{{ $review->description }}</td>
                                                <td>{{ $review->rating }}</td>
                                                <td>{{ $review->created_at}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection