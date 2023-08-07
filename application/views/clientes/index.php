<?php $this->load->view('layout/header.php') ?>
<div class="page-wrap">
    <?php $this->load->view('layout/sidebar.php') ?>
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">


                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-users bg-green"></i>
                            <div class="d-inline">
                                <h5>Cadrastos de Clientes</h5>
                                <span>Clientes cadrastos no sistema</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../index.html"><i class="ik ik-home"></i></a>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalInserirCliente">
                                    Cadrastar Novo Cliente
                                </button>
                            </h3>
                        </div>
                        <!-- Inicio do modal inserir novo cliente -->
                        <!-- Modal -->
                        <div class="modal fade" id="modalInserirCliente" tabindex="-1" role="dialog" aria-labelledby="InserirCliente" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cadrasto de Cliente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Inicio do form inserir clientes -->
                                        <form class="forms-InserirCliente">
                                            <div class="form-group">
                                                <label for="InputCPF">CPF</label>
                                                <input type="text" class="form-control" id="clieCPF" name="clieCPF">
                                            </div>
                                            <div class="form-group">
                                                <label for="InputNomeCliente">Nome</label>
                                                <input type="text" class="form-control" id="crieNome" name="crieNome">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="InputEndereco">Endereço</label>
                                                        <input type="text" class="form-control" id="crieEndereco" name="crieEndereco">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="InputNumero">Número</label>
                                                        <input type="text" class="form-control" id="clieNumero" name="clieNumero">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="InputBairro">Bairro</label>
                                                        <input type="text" class="form-control" id="crieBairro" name="crieBairro">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="InputCep    ">CEP</label>
                                                        <input type="text" class="form-control" id="clieCep" name="clieCep">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="InputCidade">Cidade</label>
                                                        <input type="text" class="form-control" id="crieCidade" name="crieCidade">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="InpuEstado">Estado</label>
                                                        <input type="text" class="form-control" id="clieEstado" name="clieEstado">
                                                    </div>
                                                </div>                              
                                            </div>
                                            
                                            <div class="form-group">
                                                        <label for="InputReferencia">Ponto de referência</label>
                                                        <input type="text" class="form-control" id="clieReferencia" name="clieReferencia">
                                                    </div>
                                                
                                                <button type="submit" class="btn btn-success mr-2">Salvar</button>
                                        </form>
                                        <!-- Fim do form inserir clientes -->


                                    </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fim do modal inserir novo cliente -->


                        <div class="card-body">
                            <table id="data_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th class="nosort">Avatar</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="nosort">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td><img src="../img/users/1.jpg" class="table-user-thumb" alt=""></td>
                                        <td>Erich Heaney</td>
                                        <td>erich@example.com</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td><img src="../img/users/2.jpg" class="table-user-thumb" alt=""></td>
                                        <td>Abraham Douglas</td>
                                        <td>jgraham@example.com</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td><img src="../img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                        <td>Roderick Simonis</td>
                                        <td>grant.simonis@example.com</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td><img src="../img/users/4.jpg" class="table-user-thumb" alt=""></td>
                                        <td>Christopher Henry</td>
                                        <td>henry.chris@example.com</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>005</td>
                                        <td><img src="../img/users/5.jpg" class="table-user-thumb" alt=""></td>
                                        <td>Sonia Wilkinson</td>
                                        <td>boyle.aglea@example.com</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php $this->load->view('layout/footer.php') ?>