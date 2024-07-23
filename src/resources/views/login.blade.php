@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Login</h1>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name">Username:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
