@extends('layouts.menus')


@section('content')

@auth
<section class="vh-100">
    <div class="container py-5 h-50">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-12 col-xl-4">

          <div class="card cont-container" style="border-radius: 15px;">
            <div class="card-body text-center">
              <div class="mt-3 mb-4">
                <img src="{{ url('images/img_avatar.png') }}"
                  class="rounded-circle img-fluid" style="width: 100px;" />
              </div>
              <h4 class="mb-2">{{auth()->user()->name}}</h4>
              <p class="text-muted center"><span class="badge bg-primary">Membro</span></p>

              <div style="padding: 10px">
                <button  type="button" class="btn btn-info btn-rounded btn-lg fa fa-pencil-square-o" style="padding: 10px; margin: 10px">
                    Publicados
                </button>

                <button  type="button" class="btn btn-info btn-rounded btn-lg fa fa-star" style="padding: 10px; margin: 10px">
                    Favoritos
                </button>
              </div>


            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endauth









@endsection
