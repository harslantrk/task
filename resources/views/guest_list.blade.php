@extends('master')
@section('content')
    <div class="container">
        <div class="col-md-6">
            <table class="table table-striped">
                <tr><td><b>Kayıt Tarihi</b></td><td><b>Ad Soyad</b></td><td><b>Email</b></td><td><b>Telefon</b></td></tr>
                @foreach($guest as $key)
                    <tr><td><?php echo date("d/m/Y H:i:s", strtotime($key->created_at)); ?></td><td>{{ $key->name }}</td><td>{{ $key->email }}</td><td>{{ $key->phone }}</td></tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection