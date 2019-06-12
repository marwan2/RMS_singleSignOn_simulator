@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br><br>
                    <form method="GET" action="http://localhost/picwpost_invoicing/public/auth_line" target="_blank">
                        {{-- <input type="hidden" name="email" value="{{auth()->user()->email}}"> --}}
                        {{-- <input type="hidden" name="password" value="{{auth()->user()->password}}"> --}}

                        <input type="hidden" name="email" value="cybersales@cyberaccounting.ae">
                        <input type="hidden" name="password" value="987654321">
                        <button type="submit" class="btn btn-primary">Login to Invoicing By Email/Pass</button>
                    </form>


                    <form method="POST" action="{{url('invoicing_login')}}" target="_blank">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary">Login to Invoicing By Cookies</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
