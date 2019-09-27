@extends('layouts.admin')
@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">EVENTS BOOKING DETAILS</h4>
                <a  href="/addevent">Add event</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                      No
                      </th>
                      <th>
                      Event  Name
                      </th>
                      <th>
                      Event Date
                      </th>
                      <th>
                      Hall Type
                      </th>
                      <th>
                      No of Guest
                      </th>
                       <th>
                      booked By
                      </th>
                       <th>
                      Contact no
                      </th>
                       <th>
                      Booked at
                      </th>
                       <th>
                      User id 
                      </th>
                    </thead>
                    <tbody>
                            @foreach ($events as $key=> $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->ename}}</td>
                                <td>{{$value->event_date}}
                                <td>{{$value->hall_type}}
                                <td>{{$value->no_of_guest}}
                                <td>{{$value->name}}
                                <td>{{$value->contact}}</td>
                                <td>{{$value->created_at}}</td>
                                <td>{{$value->user_id}}</td>
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

