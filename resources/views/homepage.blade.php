@extends('master')
@section('content')
<div class="container">
    <div class="col-md-6">
        <div class="form-group">
            <label for="inputName">Ad Soyad</label>
            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Ad Soyad">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPhone">Telefon</label>
            <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Telefon">
        </div>
        <button type="submit" class="btn btn-default btn-success" onclick="save();">Kaydet</button>
        <div class="form-group" id="guestResults"></div>
    </div>
</div>
@endsection

