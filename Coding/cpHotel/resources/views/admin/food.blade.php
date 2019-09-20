@extends('layouts.admin')
@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">FOOD ORDERED DETAILS</h4>
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
                      people quantity
                      </th>
                       <th>
                      Food Name
                      </th>
                      <th>
                      Description
                      </th>
                      <th>
                      Ordered at
                      </th>
                       <th>
                      User id 
                      </th>
                    </thead>
                    <tbody>
                            @foreach ($foods as $key=> $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->room_no}}</td>
                                <td>{{$value->people_quantity}}</td>
                                <td>{{$value->fname}}</td>
                                <td>{{$value->description}}</td>
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

