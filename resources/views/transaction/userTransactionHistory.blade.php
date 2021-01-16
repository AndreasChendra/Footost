@extends('layouts.app')
@section('title', 'Transaction History - Footost')

@section('content')
    @if (empty($transactions) || count($transactions) == 0)
        <div class="container position-empty">
            <div class="alert alert-danger pt-5 pb-5" role="alert">
                <strong>{{ Auth::user()->name }} Don't Have a Transaction!</strong>
            </div>
        </div>
    @else
        <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center pb-3">
                            <h1>{{ Auth::user()->name }} Transaction</h1>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                                <table class="table table-hover text-center" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Membership</th>
                                            <th>Payment Method</th>
                                            <th>Created at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $t)
                                        <tr>
                                            <td>{{$t->id}}</td>
                                            <td>{{$t->membership->name}}</td>
                                            <td>{{$t->payment->name}}</td>
                                            <td>{{$t->created_at}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center pt-5 pb-4">
                    <div class="div col-md-2">
                        {{ $transactions->links() }}
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection