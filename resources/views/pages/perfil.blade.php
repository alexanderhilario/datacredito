@extends('layouts.app')

@section('content')
<div class="container-scroller d-flex">
        @include('partials.menu')

    <div class="container-fluid page-body-wrapper">

        @include('partials.nav')
      <div class="main-panel">
        <div class="content-wrapper">
              <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        @if(! empty($afiliado->user_imagen->image))
                        <img src="data:image/jpg;base64,{{ $afiliado->user_imagen->image }}" alt="profile" class="img-lg rounded-circle mb-3">
                        @else
                        <img src="{{ asset('assets-app/images/faces/perfil.png') }}" alt="profile" class="img-lg rounded-circle mb-3">
                        @endif


                        <div class="mb-3">
                          <h3>{{ $afiliado->nombre }} {{ $afiliado->apellido }}</h3>
                    </div>
                    <hr>
                    <div class="border-bottom py-4">
                          <p>Puntiación</p>
                          <div class="d-flex mb-1">
                             <p class="small text-muted mt-2 mb-0">
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                              </p>
                          </div>

                            <div class="d-flex mb-1">
                             <p class="small text-muted mt-2 mb-0">
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                              </p>
                          </div>

                            <div class="d-flex mb-1">
                             <p class="small text-muted mt-2 mb-0">
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                              </p>
                          </div>


                            <div class="d-flex mb-1">
                             <p class="small text-muted mt-2 mb-0">
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                              </p>
                          </div>


                            <div class="d-flex mb-1">
                             <p class="small text-muted mt-2 mb-0">
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>
                                  </span>
                              </p>
                          </div>

                         

                        </div>
                      </div>
                      <div class="border-bottom py-4">
                        <p>Alias</p>
                        <div>
                          @foreach($afiliado->alia as $alias)
                          <label class="badge badge-outline-dark">{{ $alias->apodo }}</label> 
                          @endforeach
                          @if(Auth::user()->id == $afiliado->user_id)
                            <button class="btn btn-primary btn-block mb-2">Agregar Alias</button>
                          @endif
                          
                        </div>                                                               
                      </div>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Estado
                          </span>
                          <span class="float-right text-muted">
                            @if($afiliado->estado == true)
                              Contratado
                              @else
                              Sin contrato
                            @endif
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Consorcio
                          </span>
                          <span class="float-right text-muted">
                             {{ $afiliado->user->name }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Teléfono 
                          </span>
                          <span class="float-right text-muted">
                            {{ $afiliado->telefono }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Pais
                          </span>
                          <span class="float-right text-muted">
                           {{ $afiliado->pais->nombre }}
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="d-flex justify-content-between">
                        <div>
                          @if(Auth::user()->id == $afiliado->user_id)
                          <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#IncidenciaAdd">
                              <i class="mdi mdi-content-paste"></i>   Incidencia 
                            </button>
                            @endif
                            @if(Auth::user()->id == $afiliado->user_id)
                             <a href="{{ route('libere', $afiliado->id) }}" class="btn btn-danger">
                              <i class="mdi mdi-account-remove"></i> Liberar
                            </a>
                            @endif
                            @if($afiliado->estado == false)
                              <a href="{{ route('contrato', $afiliado->id) }}" class="btn btn-success">
                                <i class="mdi mdi-account-check"></i> Contratar
                              </a>
                            @endif
                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true"><i class="mdi mdi-newspaper"></i> Historial de trabajo </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-border-color"></i> Editar información</a>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-content" id="pills-tabContent">
                        <div class=" tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <div class="profile-feed">
                            @foreach($afiliado->historialc as $historial)
                            <div class="d-flex align-items-start profile-feed-item">
                              <img src="{{ asset('assets-app/images/faces/face12.jpg') }}" alt="profile" class="img-sm rounded-circle">
                              <div class="ml-4">
                                <h6>
                                  {{ $historial->consorcio->nombre_consorcio }}
                                  <small class="ml-4 text-muted"><i class="mdi mdi-clock mr-1"></i>
                                    {{ $historial->created_at->format('d/m/y') }}
                                  </small>
                                </h6>
                                <p>
                                  {{ $historial->nota }}
                                </p>
                                <p class="small text-muted mt-2 mb-0">
                                  <span>
                                    <i class="mdi mdi-star mr-1"></i>{{ $historial->puntuacion }}
                                  </span>
                                </p>
                              </div>
                            </div>
                            @endforeach
                          </div>
                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('partials.footer')

      </div>
    </div>
 </div>
@if(Auth::user()->id == $afiliado->user_id)
  @include('partials.incidencia')
@endif

@endsection

