@extends('layouts.app')
@section('title', 'Promo - Footost')

@section('content')
    @if (empty($promos) || count($promos) == 0)
        <div class="container position-empty">
            <div class="alert alert-danger pt-5 pb-5" role="alert">
                <strong>Come Back Later for Newest Promo</strong>
            </div>
        </div>
    @else
    <section id="tabs" class="project-tab">
        <div class="container">
                <div class="col-md-6 offset-md-4">
                    @if (session('alert'))
                    <div class="alert alert-success">
                        {{ session('alert') }}
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center pb-3">
                            <h1>Promo</h1>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                                
                                <div class="pb-3">
                                    @if (Auth::check() && Auth::user()->role_id == 1)
                                        <a href="/addPromo">
                                            <button type="button" class="btn btn-success">
                                                {{ __('Add New Promo') }}
                                            </button>
                                        </a>
                                        @if (Request::getPathInfo() == '/promo')
                                            <a href="/allPromo">
                                                <button type="button" class="btn btn-secondary">
                                                    {{ __('All Promo History') }}
                                                </button>
                                            </a>
                                        @elseif (Request::getPathInfo() == '/allPromo')
                                            <a href="/promo">
                                                <button type="button" class="btn btn-secondary">
                                                    {{ __('Current Promo') }}
                                                </button>
                                            </a>
                                        @endif
                                    @endif
                                </div>

                                <table class="table table-hover" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Terms and Conditions</th>
                                            <th>End Date</th>
                                            @if (Auth::check() && Auth::user()->role_id == 1)
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($promos as $p)
                                            <tr>
                                                <td>{{$p->title}}</td>
                                                <td>{{$p->description}}</td>
                                                <td>{{$p->termncon}}</td>
                                                <td>{{date('d/m/Y', strtotime($p->end_date))}}</td>
                                                <td>
                                                    @if (Auth::check() && Auth::user()->role_id == 1)
                                                        <form action="/editPromo" method="post">
                                                            @csrf
                                                            <div>
                                                                <input type="hidden" value="{{ $p->id }}" name="id">
                                                                <button type="submit" class="btn btn-warning">
                                                                    {{ __('Edit') }}
                                                                </button>
                                                            </div>
                                                        </form>
                                                    @endif
                                                </td>
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
                        {{ $promos->links() }}
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection