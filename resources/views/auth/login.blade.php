@extends('layouts.app')

@if ($message = Session::get('error'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8" style="border-left:1.5rem; width: 100%">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient" style="background-image: linear-gradient(310deg,#008352,#008352);">Entrar</h3>
                  <p class="mb-0">Preencha com o e-mail e senha para entrar</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <label>E-mail</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Digite seu e-mail aqui..." aria-label="Email" aria-describedby="email-addon"
                      name="email">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Senha</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Digite sua senha aqui..." aria-label="Password" aria-describedby="password-addon"
                      name="password">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Lembre-me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" style="background-image: linear-gradient(310deg,#008352,#008352);">Entrar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image: url({{asset('assets/img/degrade3.png')}}); background-size: 105%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>