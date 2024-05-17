@extends('Admin.Dashboard')
@section('content')
<section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                        <div class="tt-page-title">
                            <h2 class="h5 mb-lg-0" _msttexthash="447109" _msthash="252">Mettre à jour le profil</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row mb-4 g-4">

            <!--left sidebar-->
            <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                <form action="{{url('UpdateAdmin')}}" method="POST">
                    @csrf
                                         <input type="hidden" name="id" value="1">
                    <!--basic information start-->
                    <div class="card mb-4" id="section-1">
                        <div class="card-body">
                            <h5 class="mb-4" _msttexthash="381394" _msthash="253">Informations de base</h5>

                            <div class="mb-3">
                                <label for="name" class="form-label" _msttexthash="31395" _msthash="254">Nom</label>
                                <input class="form-control" type="text" id="name" placeholder="Tapez votre nom" name="name" required="" value="{{$user->name}}" _mstplaceholder="210951" _msthash="255">
                            </div>


                            <div class="mb-3">
                                <label for="email" class="form-label" _msttexthash="564538" _msthash="256">Messagerie électronique</label>
                                <input class="form-control" type="email" id="email" placeholder="Tapez votre adresse e-mail" name="email" required="" value="{{$user->email}}"  _mstplaceholder="236652" _msthash="257">
                            </div>





                            <div class="mb-3">
                                <label for="password" class="form-label" _msttexthash="157794" _msthash="262">Mot de passe</label>
                                <input class="form-control" type="password" id="password" placeholder="Tapez mot de passe" name="password" _mstplaceholder="212862" _msthash="263" required>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label" _msttexthash="495105" _msthash="264">Confirmer le mot de passe</label>
                                <input class="form-control" type="password" id="password_confirmation" placeholder="Retapez le mot de passe" name="password_confirmation" _mstplaceholder="285168" _msthash="265" required>
                            </div>
                        </div>
                    </div>
                    <!--basic information end-->

                    <!-- submit button -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save me-1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg><font _mstmutation="1" _msttexthash="751764" _msthash="266"> Enregistrer les modifications </font></button>
                            </div>
                        </div>
                    </div>
                    <!-- submit button end -->

                </form>
            </div>

            <!--right sidebar-->
            <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                <div class="card tt-sticky-sidebar d-none d-xl-block">
                    <div class="card-body">
                        <h5 class="mb-4" _msttexthash="3244111" _msthash="267">Informations sur l’utilisateur</h5>
                        <div class="tt-vertical-step">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#section-1" class="active" _msttexthash="381394" _msthash="268">Informations de base</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
