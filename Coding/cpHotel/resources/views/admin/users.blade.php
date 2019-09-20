@extends('layouts.admin')

@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> USERS DETAILS</h4>
              </div>
              <div class="card-body">
               
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Created at
                      </th>
                      <th >
                        Updated at
                      </th>
                    </thead>
              <!--       <tbody>
                            @foreach ($users as $key=> $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->created_at}}</td>
                                <td>{{$value->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>-->
                  </table>
                </div>
              </div>
            </div>
          </div>
        
        </div>



@endsection
@section('script')



