@extends('layout.admin')
@section('main')
@if(Auth::guard('admin')->user()->type == 'food')
<div id="layoutSidenav_content">
    <form action="{{route('admin.orderUpdate')}}" method="post" class="SuperAdminTable_admin ADD_shop">
    @csrf
        <div class="form-group">
            <label for="usr">State :</label>
            <input type="text" class="form-control" id="usr" name="state" value="{{$food->state}}" />
            {{$errors->first('state')}}
        </div>
        <div class="form-group">
            <label for="usr">Tracking number :</label>
            <input type="text" class="form-control" id="usr" name="track_number" value="{{$food->track_number}}" />
            {{$errors->first('track_number')}}
        </div>
        <input type="hidden" name="id" value="{{$food->id}}">
        <br>
          <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endif

@if(Auth::guard('admin')->user()->type == 'shopping')
<div id="layoutSidenav_content">
    <form action="{{route('admin.orderUpdate')}}" method="post" class="SuperAdminTable_admin ADD_shop">
    @csrf
        <div class="form-group">
            <label for="usr">State :</label>
            <input type="text" class="form-control" id="usr" name="state" value="{{$shop->state}}" />
            {{$errors->first('state')}}
        </div>
        <div class="form-group">
            <label for="usr">Tracking number :</label>
            <input type="text" class="form-control" id="usr" name="track_number" value="{{$shop->track_number}}" />
            {{$errors->first('track_number')}}
        </div>
        <input type="hidden" name="id" value="{{$shop->id}}">
        <br>
          <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endif
@endsection('main')