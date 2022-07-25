@extends('layouts.master')
@section('title') @lang('translation.Dashboards') @endsection
@section('css')

<link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">

@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Welcome ! @endslot
@endcomponent

<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Nombre d'employés</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="{{$TotalEmployees}}">{{$TotalEmployees}}</span>
                        </h4>
                      
                    </div>

                   
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">la masse salariale</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="{{$TotalSalaire}}">0 </span> DH
                        </h4>
                    </div>
                   
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Nombre Departements</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="{{$TotalDepartements}}">0</span> 
                        </h4>
                       
                    </div>

                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

</div><!-- end row-->
/


          

   
    <!-- end col -->
</div>
<!-- end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> table</h4>
                <p class="card-title-desc">
                  <a href="{{route('employee.create')}}">  <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Ajouter">Ajouter</button>
                  </a>
                </p>
                <input type="search" value="">
            </div>

            <div class="card-body">

                <div class="tab le-responsive">
                    <table class="table table-bordered mb-0">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Departement </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employee as $value)
                            <tr>
                                <th scope="row">{{$value->id_employee}}</th>
                                <td>{{$value->Nom}}</td>
                                <td>{{$value->Prenom}}</td>
                                <td>{{$value->Nom_departement}}</td>
                                
                                <td> 
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                           <a href="{{route('employee.show',$value->id_employee)}}"><button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa fa-eye"></i></button>
                                           </a> 
                                        </li>
                                        <li class="list-inline-item">
                                           <a href="{{route('employee.edit',$value->id_employee)}}"> <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                           </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <form action="{{route('employee.destroy',$value->id_employee)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                           <button class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        </form>
                                        </li>
                                    </ul></td>
                                </tr>
                                
                            @empty
                                
                            @endforelse
                                
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

                 
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div><!-- end row -->
@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
