@extends('layouts.admin')
@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">TRANSPORTATION BOOKING DETAILS</h4>
                <a  href="/addtrans">Add Transportation details</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                       <th>
                      No
                      </th>
                      <th>
                      Arrival Day
                      </th>
                      <th>
                      Address
                      </th>
                      <th>
                      No of People
                      </th>
                       <th>
                      Vechicle Type
                      </th>
                      <th>
                      Name
                        </th>
                           <th>
                      Phone
                        </th>
                           <th>
                      guide
                        </th>
                           <th>
                      Booked at
                        </th>
                        
                    </thead>
                    <tbody>
                            @foreach ($trans as $key=> $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->arrival_date}}</td>
                                <td>{{$value->address}}</td>
                                <td>{{$value->no_of_guest}}</td>
                                <td>{{$value->vechicle_type}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->phone}}</td>
                                <td>{{$value->guide}}</td>
                                <td>{{$value->created_at}}</td>
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

