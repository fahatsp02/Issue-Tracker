@extends('layouts.header')
@section('content')

<main class="login-form">
    <div class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Welcome</h3>


                    <div class="d-grid mx-auto">
                        <h4 class="text-center">Hello User This Is My Issue Tracker where you can Raise Your Issue</h4>
                        <a class="nav-link" href="{{ route('Register-user') }}"><button type="submit" class="btn btn-dark btn-block">Register</button></a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection