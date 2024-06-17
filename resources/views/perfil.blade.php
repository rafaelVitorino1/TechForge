@extends('layouts.menus')


@section('content')

@auth
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-4">

          <div class="card" style="border-radius: 15px;">
            <div class="card-body text-center">
              <div class="mt-3 mb-4">
                <img src="{{ url('images/img_avatar.png') }}"
                  class="rounded-circle img-fluid" style="width: 100px;" />
              </div>
              <h4 class="mb-2">{{auth()->user()->name}}</h4>
              <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a
                  href="#!">mdbootstrap.com</a></p>
              <div class="mb-4 pb-2">
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-facebook-f fa-lg"></i>
                </button>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-twitter fa-lg"></i>
                </button>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-skype fa-lg"></i>
                </button>
              </div>
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-rounded btn-lg">
                Message now
              </button>
              <div class="d-flex justify-content-between text-center mt-5 mb-2">
                <div>
                  <p class="mb-2 h5">***</p>
                  <p class="text-muted mb-0">publicações</p>
                </div>
                <div>
                  <p class="mb-2 h5">***</p>
                  <p class="text-muted mb-0">Favoritos</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endauth









@endsection
