@extends('layouts.app')

@section('content')
<section id="tabs" class="project-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Join at</th>
                                    <th>Expired at</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Anggota</a></td>
                                    <td>2021-01-01</td>
                                    <td>2021-12-31</td>
                                    <td class="text-success">Active</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 2</a></td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                    <td class="text-danger">Expired</td>
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