@extends('layouts.master')
{{-- @extends('layouts.master') --}}
@section('title') @lang('translation.Profile') @endsection
@section('content')

<div class="container">
    <div class="main-body">
    
         
          <!-- /Breadcrumb -->
          @forelse ($employee as $value)
          <form method="POST" action="{{route("employee.update",$value->id_employee)}}" enctype='multipart/form-data'>
          @method("put")
          @csrf
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset('assets/img/employee')}}/{{$value->photo}}" alt="Admin" class="rounded-circle" width="150"  height="150">
                    <div class="mt-3">
                      <h4>{{$value->Nom}}  {{$value->Prenom}}  </h4>
                     <p><input type="file" name="image-file" id=""></p> 
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="Nom" class="form-control" value="{{$value->Nom}}">
                      <input type="hidden" name="image" class="form-control" value="{{$value->photo}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prenom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="Prenom" class="form-control" value="{{$value->Prenom}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date de naissance</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="date" name="Date_de_naissance" class="form-control" value="{{$value->Date_de_naissance}}">
                    </div>
                  </div>
                  <hr>
                  
                  
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Departement</h6>
                    </div>
                    <div class="col-xl-4 col-md-6">
                      <div class="form-group mb-3">
                          <select name="Departement" required class="form-control form-select">
                              <option value="{{$value->id_Departement}}">{{$value->Nom_departement}}</option>
                              @foreach ($Departements as $Departement)
                             <option value="{{$Departement->id_Departement}}">{{$Departement->Nom_departement}}</option>
                             @endforeach
                          </select>
                      </div>
                  </div>
                  
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Salaire</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="Salaire" value="{{$value->salaire}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                      <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                    </div>
                  </div>
                </div>
              </div>

              
                
              </div>
              @empty
                                
              @endforelse
            </form>
            </div>
          </div>

        </div>
    </div>
    @endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
<script>
    $('#update-profile').on('submit', function(event) {
        event.preventDefault();
        var Id = $('#data_id').val();
        let formData = new FormData(this);
        $('#emailError').text('');
        $('#nameError').text('');
        $('#avatarError').text('');
        $.ajax({
            url: "{{ url('update-profile') }}" + "/" + Id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#emailError').text('');
                $('#nameError').text('');
                $('#avatarError').text('');
                if (response.isSuccess == false) {
                    alert(response.Message);
                } else if (response.isSuccess == true) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            },
            error: function(response) {
                $('#emailError').text(response.responseJSON.errors.email);
                $('#nameError').text(response.responseJSON.errors.name);
                $('#avatarError').text(response.responseJSON.errors.avatar);
            }
        });
    });
</script>
@endsection
