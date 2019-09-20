@extends('layouts.admin')
@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">LAUNDRY CALL DETAILS</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                       <th>
                      No
                      </th>
                      <th>
                      Room no
                      </th>
                      <th>
                      Dress quantity
                      </th>
                      <th>
                      Description
                      </th>
                       <th>
                      Iron
                      </th>
                      <th>
                      Ordered at
                      </th>
                       <th>
                      User id 
                      </th>
                    </thead>
                    <tbody>
                            @foreach ($laundries as $key=> $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->room_no}}</td>
                                <td>{{$value->dress_quantity}}</td>
                                <td>{{$value->description}}</td>
                                <td>{{$value->iron}}</td>
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

