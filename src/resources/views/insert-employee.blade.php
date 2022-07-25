@extends('layouts.master')
{{-- @section('title') @lang('translation.Create_Task')  @endsection --}}
@section('css')
<link href="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<h4 class="card-title mb-4">Ajouter Employee</h4>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('employee.store')}}" method="POST"  enctype="multipart/form-data">
                {{-- <form class="outer-repeater" action="{{route('employee.store')}}"  method="POST" enctype="multipart/form-data"> --}}
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Nom</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="Nom" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Prenom</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="Prenom" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Salaire</label>
                                <div class="col-lg-10">
                                    <select name="Departement" required class="form-control form-select">
                                        @foreach ($Departements as $Departement)
                                       <option value="{{$Departement->id_Departement}}">{{$Departement->Nom_departement}}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Salaire</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="Salaire" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Date de naissance</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="Date" type="Date" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Photo</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="image" type="file" class="form-control" placeholder="">
                                </div>
                            </div>

                            
                            
                         
                            
                        
                    </div>
                </div>
                
                                                          
                                                           
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/task-create.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
