@extends('index')

@section('content')

<div class="container-fluid">

    <!--      Barra de Cabeçalho com endereço     -->

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Portal da Transparência</a>
        </li>
        <li class="breadcrumb-item active">Página Inicial</li>
    </ol>







    <!--      BOTÕES (cards)     -->

    <div class="row">

        <!--    BOTÃO ACESSAR RECEITAS    -->

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="mr-5">Relação de Associados</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('associados')}}">
                    <span class="float-left">Ver Detalhes</span>
                    <span class="float-right">
                        <i class="fa fa-reorder"></i>
                    </span>
                </a>
            </div>
        </div>

        <!--    BOTÃO ACESSAR CONTRATOS    -->

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-bank"></i>
                    </div>
                    <div class="mr-5">Extratos Bancários</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalhes</span>
                    <span class="float-right">
                        <i class="fa fa-reorder"></i>
                    </span>
                </a>
            </div>
        </div>


        <!--    BOTÃO ACESSAR PRESTAÇÃO DE CONTAS    -->

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-balance-scale"></i>
                    </div>
                    <div class="mr-5">Demonstrativos de Contas</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalhes</span>
                    <span class="float-right">
                        <i class="fa fa-reorder"></i>
                    </span>
                </a>
            </div>
        </div>



        <!--    BOTÃO ACESSAR DESPESAS    -->

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-dollar"></i>
                    </div>
                    <div class="mr-5">Notas e Receitas</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('pagina_notasedespeza')}}">
                    <span class="float-left">Ver Detalhes</span>
                    <span class="float-right">
                        <i class="fa fa-reorder"></i>
                    </span>
                </a>
            </div>
        </div>


    </div>


    <!--     AVISOS      -->

    <div class="container" style="width: 100%;">
    <div class="card card-login mt-2">
      <div class="card-header">Adicionar Avisos</div>
      <div class="card-body">
       
        
      </div>
    </div>
  </div>







    @stop



