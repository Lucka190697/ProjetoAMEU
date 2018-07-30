@extends('index')

@section('content')
<div class="container-fluid">
    <!--      Barra de Cabeçalho com endereço     -->
    <ol class="breadcrumb"style="background-color: rgb(233, 200, 239);" ><!-- barra indicativa da pagina aberta -->
        <li class="breadcrumb-item"><!-- texto da barra -->
            <a href="{{route('pagina_inicial')}}"  style="color:#D8310B;">Portal da Transparência</a>
        </li>
        <li class="breadcrumb-item active">Notas e Receitas</li>
    </ol>
    <!--      BOTÕES (cards)     -->
    <div class="container" style="margin-bottom:20px; width: 100%;">
        <div class="card card-conteudo">
            <div class="card-header">Todas as Entradas</div>
            <div class="card-body" style="width:100%;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="panel-body" style="width: 100%;">
                                <!-- top legendas acima da tabela -->
                                <div class="card-body">
                                    <div id="table-normal_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row" style="width: 100%;">
                                            <div class="col-sm-12 col-md-2">
                                                <div class="dataTables_length" id="table-normal_length">
                                                    <label>Mostrar 
                                                        <select name="table-normal_length" aria-controls="table-normal" class="form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entradas
                                                    </label> 
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-5">
                                                <div id="table-normal_filter" class="dataTables_filter">
                                                    <label>Pesquisar:
                                                        <input class="form-control form-control-sm" placeholder="" aria-controls="table-normal" type="search">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-5" style="float: left;">
                                                <div id="table-normal_filter" class="dataTables_filter">
                                                    <label style="margin: 10px;"> Filtrar Por Mês</label>
                                                    <select style="width: 180px; margin: 1px;">
                                                        <option value="" selected="">Selecione</option>
                                                        <option value="Jan">Janeiro</option>
                                                        <option value="Fev">Fevereiro</option>
                                                        <option value="Mar">Março</option>
                                                        <option value="Abr">Abril</option>
                                                        <option value="Mai">Maio</option>
                                                        <option value="Jun">Junho</option>
                                                        <option value="Jul">Julho</option>
                                                        <option value="Ago">Agosto</option>
                                                        <option value="Set">Setembro</option>
                                                        <option value="Out">Outubro</option>
                                                        <option value="Nov">Novembro</option>
                                                        <option value="Dez">Dezembro</option>
                                                    </select> 
                                                </div>
                                            </div></div>

                                        <div class="row" style="width: 100%;">
                                            <div class="col-sm-12" style="width: 100%" >
                                                <table id="table-normal" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="table-normal_info" style="width: 100%;" cellspacing="0">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0" aria-controls="table-normal" rowspan="1" colspan="1" style="width: 40px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                                                            <th class="sorting" tabindex="0" aria-controls="table-normal" rowspan="1" colspan="1" style="width: 200px;" aria-label="Position: activate to sort column ascending">Descrição</th>
                                                            <th class="sorting" tabindex="0" aria-controls="table-normal" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">Data de Upload</th>
                                                            <th class="sorting" tabindex="0" aria-controls="table-normal" rowspan="1" colspan="1" style="width: 80px;" aria-label="Office: activate to sort column ascending">Mês de Referência</th>
                                                            <th class="" tabindex="0" aria-controls="table-normal" rowspan="1" colspan="1" style="width: 49px; float: inside;" aria-label="Age: activate to sort column ascending">
                                                                <a href="{{ route('pagina_newNotaseReceitas') }}"
                                                                <button type="button" class="btn btn-primary" style="float: center; width: 200px;">
                                                                    <i class="fa fa-plus fa-fw"></i> Adicionar Novo 
                                                                </button>
                                                            </a>
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">088.155.299-26</td>
                                                            <td>Lucas Alberto Matoso</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" style="float: center; width: 100px;"><i class="fa fa-remove"></i> Del </button>
                                                                <button type="button" class="btn btn-success" style="float: center; width: 100px;"><i class="fa fa-edit"></i> Del </button> 
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">088.155.299-26</td>
                                                            <td>Lucas Alberto Matoso</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" style="float: center; width: 100px;"><i class="fa fa-remove"></i> Del </button>
                                                                <button type="button" class="btn btn-success" style="float: center; width: 100px;"><i class="fa fa-edit"></i> Del </button> 
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">088.155.299-26</td>
                                                            <td>Lucas Alberto Matoso</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" style="float: center; width: 100px;"><i class="fa fa-remove"></i> Del </button>
                                                                <button type="button" class="btn btn-success" style="float: center; width: 100px;"><i class="fa fa-edit"></i> Del </button> 
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">088.155.299-26</td>
                                                            <td>Lucas Alberto Matoso</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" style="float: center; width: 100px;"><i class="fa fa-remove"></i> Del </button>
                                                                <button type="button" class="btn btn-success" style="float: center; width: 100px;"><i class="fa fa-edit"></i> Del </button> 
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">088.155.299-26</td>
                                                            <td>Lucas Alberto Matoso</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>Faculdade Guairacá</td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" style="float: center; width: 100px;"><i class="fa fa-remove"></i> Del </button>
                                                                <button type="button" class="btn btn-success" style="float: center; width: 100px;"><i class="fa fa-edit"></i> Del </button> 
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="table-normal_info" role="status" aria-live="polite">
                                                    Showing 1 to 10 of 57 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="table-normal_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="table-normal_previous">
                                                            <a href="#" aria-controls="table-normal" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                        </li>
                                                        <li class="paginate_button page-item active">
                                                            <a href="#" aria-controls="table-normal" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="table-normal" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="table-normal" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="table-normal" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="table-normal" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="table-normal" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                        </li>
                                                        <li class="paginate_button page-item next" id="table-normal_next">
                                                            <a href="#" aria-controls="table-normal" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>







                        </div>
                        <!-- /.panel-body -->
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>


@stop
