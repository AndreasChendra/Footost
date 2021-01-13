@extends('layouts.app')

@section('content')
<section id="tabs" class="project-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-user-tab" data-toggle="tab" href="#nav-user" role="tab" aria-controls="nav-user" aria-selected="true">User Membership</a>
                        <a class="nav-item nav-link" id="nav-store-tab" data-toggle="tab" href="#nav-store" role="tab" aria-controls="nav-store" aria-selected="false">Store Membership</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Join at</th>
                                    <th>Expired at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">User1</a></td>
                                    <td>2021-01-01</td>
                                    <td>2021-12-31</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 2</a></td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 3</a></td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-store" role="tabpanel" aria-labelledby="nav-store-tab">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Store Name</th>
                                    <th>Join at</th>
                                    <th>Expired at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Starbucks</a></td>
                                    <td>2020-08-06</td>
                                    <td>2021-08-05</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 2</a></td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 3</a></td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection