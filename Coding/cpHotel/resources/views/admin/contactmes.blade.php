@extends('layouts.admin')
@section('title')

Admin Dashboard of Hotel Management System


@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">CONTACT DETAILS</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                       <th>
                      No
                      </th>
                      <th>
                      Name
                      </th>
                      <th>
                      Email
                      </th>
                      <th>
                      Subject Type
                      </th>
                       <th>
                      Message
                      </th>
                      <th>
                      Messaged at
                        </th>
                    </thead>
                 
                  </table>
                </div>
              </div>
            </div>
          </div>
        
        </div>




@endsection


@section('script')

