@extends('layout.admin')
@section('main')
@if(Auth::guard('admin')->user()->type == 'food')
<div id="layoutSidenav_content">
    <div class="table-responsive SuperAdminTable_admin" id="ORDER">
        <table class="table">
          <thead class="headTAble">
            <tr>
              <th>Order id</th>
              <th>client id</th>
              <th>state</th>
              <th>Track number</th>
              <th>Date and time</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($food as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->user_id}}</td>
              <td>{{$item->state}}</td>
              <td>{{$item->track_number}}</td>
              <td>{{$item->created_at}}</td>
              <td><a href="{{ route('admin.orderEdit',$item->id)}}" class="btn btn-primary">Edit</a> &nbsp; 
              <a href="{{ route('admin.details',$item->id)}}" class="btn btn-success">Details</a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
</div>
@endif
//ENT
@if(Auth::guard('admin')->user()->type == 'ent')
<div id="layoutSidenav_content">
    <div class="table-responsive SuperAdminTable_admin" id="ORDER">
        <table class="table">
          <thead class="headTAble">
            <tr>
              <th>Order id</th>
              <th>client id</th>
              <th>Date and time</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($ent as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->user_id}}</td>
              <td>{{$item->created_at}}</td>
              <td><a href="{{ route('admin.details',$item->id)}}" class="btn btn-primary">Details</a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
</div>
@endif
@if(Auth::guard('admin')->user()->type == 'shopping')
<div id="layoutSidenav_content">
    <div class="table-responsive SuperAdminTable_admin" id="ORDER">
        <table class="table">
          <thead class="headTAble">
            <tr>
              <th>Order id</th>
              <th>client id</th>
              <th>state</th>
              <th>Track number</th>
              <th>Date and time</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($shop as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->user_id}}</td>
              <td>{{$item->state}}</td>
              <td>{{$item->track_number}}</td>
              <td>{{$item->created_at}}</td>
              <td><a href="{{ route('admin.orderEdit',$item->id)}}" class="btn btn-primary">Edit</a> &nbsp; 
              <a href="{{ route('admin.details',$item->id)}}" class="btn btn-success">Details</a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
</div>
@endif
@endsection('main')