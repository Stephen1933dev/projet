@extends('layouts.master', ['title' => 'Accueil'])

@section('content')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tableau de bord</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12 col-lg-4">
                <div class="card card-border-c-blue">
                    <div class="card-body text-center">
                    <i class="feather icon-home text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-blue">3</span> Sites</h4>
                        <p class="m-b-20">Gestion des sites</p>
                        <button class="btn btn-primary btn-sm btn-round">Gérer</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-border-c-green">
                    <div class="card-body text-center">
                        <i class="feather icon-package text-c-green d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-green">2050</span> Articles</h4>
                        <p class="m-b-20">Gestion des articles</p>
                        <button class="btn btn-success btn-sm btn-round">Articles par site</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-border-c-red">
                    <div class="card-body text-center">
                        <i class="feather icon-briefcase text-c-red d-block f-40"></i>
                        <h4 class="m-t-20">Inventaires</h4>
                        <p class="m-b-20">Gestion des inventaires</p>
                        <button class="btn btn-danger btn-sm btn-round">Liste des inventaires</button>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
                 <!-- [ Main Content ] end -->

    </div>
    <!-- [ Main Content ] start -->
    <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12 col-lg-4">
                <div class="card card-border-c-blue">
                    <div class="card-body text-center">
                    <i class="feather icon-home text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-blue">17</span>changements</h4>
                        <p class="m-b-20">Gestion des inventaires</p>
                        <button class="btn btn-primary btn-sm btn-round">Affectation de l'inventaire</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-border-c-green">
                    <div class="card-body text-center">
                        <i class="feather icon-package text-c-green d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-green">35</span>Resultats</h4>
                        <p class="m-b-20">Recherche multi critères</p>
                        <button class="btn btn-success btn-sm btn-round">Recherche</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-border-c-red">
                    <div class="card-body text-center">
                        <i class="feather icon-briefcase text-c-red d-block f-40"></i>
                        <h4 class="m-t-20">Editions des Articles</h4>
                        <p class="m-b-20">Editions de code bar</p>
                        <button class="btn btn-danger btn-sm btn-round">Editer</button>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
                 <!-- [ Main Content ] end -->

    </div>
</div>
<!-- [ Main Content ] end -->

@stop