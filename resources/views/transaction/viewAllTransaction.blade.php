@extends('layouts.app')

@section('content')
<section id="tabs" class="project-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1>All User Transaction</h1>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <table class="table" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Membership</th>
                                <th>Payment Method</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $t)
                            <tr>
                                <td>{{$t->id}}</td>
                                <td>{{$t->user_id}}</td>
                                <td>{{$t->user->name}}</td>
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

        <div class="row justify-content-center pt-5 pb-4">
            <div class="div col-md-2">
                {{ $transactions->links() }}
            </div>
        </div>
    </div>
</section>
@endsection