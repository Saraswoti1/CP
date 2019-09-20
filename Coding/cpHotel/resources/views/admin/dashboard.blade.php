@extends('layouts.admin')
@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">BOOKING DETAILS</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                       <th>
                      No
                      </th>
                      <th>
                      Check In
                      </th>
                      <th>
                      Check Out
                      </th>
                        <th>
                      Room Type
                      </th>
                        <th>
                      Room Quantity
                      </th>
                        <th>
                      No of Guest
                      </th>
                        <th>
                        User  Id
                      </th>
                      <th>
                      Booked at
                      </th>
                     Updated at
                    </thead>
                      <tbody>
                            @foreach ($rooms as $key=> $value)
                            <tr>
                <td>{{$key+1}}</td>
                 <td>{{$value->check_in}}</td>
                <td>{{$value->check_out}}</td>
                           <td>{{$value->room_type}}</td>
                           <td>{{$value->room_quantity}}</td>
                           <td>{{$value->no_of_guest}}</td>
                           <td>{{$value->user_id}}</td>
                           <td>{{$value->created_at}}</td>
                           <td>{{$value->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                  </table>
                </div>
              </div>
            </div>
          </div>
        
        </div>




@endsection


@section('script')

