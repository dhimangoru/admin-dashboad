@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <div class="row mb-2">
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title mb-4">Advanced Table</h5>
                            <div class="table-responsive">
                                <table class="table center-aligned-table">
                                <thead>
                                    <tr class="text-primary">
                                    <th>No</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>created_at</th>
                                  
                                    <th>Status</th>
                
                                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $users)
                                    <tr class="text-primary">
                                    <th>{{$users->id}}</th>
                                    <th>{{$users->name}}</th>
                                    <th>{{$users->email}}</th>
                                    <th>{{$users->created_at}}</th>
                                  
                                    <th>Status</th>
                
                                
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </div>
</div>
@endsection