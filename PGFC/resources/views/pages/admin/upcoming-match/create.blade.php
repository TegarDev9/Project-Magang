@extends('layouts.admin')

@section('content')
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
                <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Add Upcoming Match
                        </h1>

                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">
                                    Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                Upcoming Match </li>
                        </ul>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow">
                <div class="card body">
                    <form action="{{ route('upcoming-match.store') }}" method="POST">
                        @csrf
                        <div class="form group">
                            <label for="home_team">Home Team</label>
                            <input type="text" class="form-control" name="home_team" placeholder="Home Team"
                                value="{{ old('home_team') }}">
                        </div>
                        <div class="form group">
                            <label for="away_team">Away Team</label>
                            <input type="text" class="form-control" name="away_team" placeholder="Away Team"
                                value="{{ old('away_team') }}">
                        </div>
                        <div class="form group">
                            <label for="match_datetime">Date Time</label>
                            <input type="date" class="form-control" name="match_datetime" placeholder="Date Time"
                                value="{{ old('match_datetime') }}">
                        </div>
                        <div class="form group">
                            <label for="vanue">Vanue</label>
                            <input type="text" class="form-control" name="vanue" placeholder="Vanue"
                                value="{{ old('vanue') }}">
                        </div>
                        <div class="form group">
                            <label for="home_team_logo">Home Logo</label>
                            <input type="text" class="form-control" name="home_team_logo" placeholder="Home Logo"
                                value="{{ old('home_team_logo') }}">
                        </div>
                        <div class="form group">
                            <label for="away_team_logo">Away Logo</label>
                            <input type="text" class="form-control" name="away_team_logo" placeholder="Away Logo"
                                value="{{ old('away_team_logo') }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" rows="10" class="d-block w-100 form-control">{{ old('description') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
