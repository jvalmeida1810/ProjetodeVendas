<?php $this->load->view('layout/header.php') ?>
<div class="page-wrap">
    <?php $this->load->view('layout/sidebar.php') ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
            <?php if ($this->session->sucesso):?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registro inserido com sucesso</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
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
                                        <form class= "forms-sample" id = "inserirCliente" name="inserirCliente" action="<?php echo base_url($this->router->fetch_class() .'/insert/');?>"
                                         method="POST">     
                                            <div class="form-group">
                                                <label for="InputCPF">CPF</label>
                                                <input type="text" class="form-control" id="clieCPF" name="clieCPF" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputNomeCliente">Nome</label>
                                                <input type="text" class="form-control" id="clieNome" name="clieNome" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="InputEndereco">Endereço</label>
                                                        <input type="text" class="form-control" id="clieEndereco" name="clieEndereco" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="InputNumero">Número</label>
                                                        <input type="text" class="form-control" id="clieNumero" name="clieNumero" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="InputBairro">Bairro</label>
                                                        <input type="text" class="form-control" id="clieBairro" name="clieBairro" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="InputCep">CEP</label>
                                                        <input type="text" class="form-control" id="clieCep" name="clieCep" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="InputCidade">Cidade</label>
                                                        <input type="text" class="form-control" id="clieCidade" name="clieCidade" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="InpuEstado">Estado</label>
                                                        <input type="text" class="form-control" id="clieEstado" name="clieEstado" required>
                                                    </div>
                                                </div>                              
                                            </div>
                                            
                                            <div class="form-group">
                                                        <label for="InputReferencia">Ponto de referência</label>
                                                        <input type="text" class="form-control" id="clieReferencia" name="clieReferencia" required>
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
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th class="nosort">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <!-- 
                            [clieid] => 1
                            [clieCPF] => 00009090
                            [clieNome] => Joao
                            [clieEndereco] => Rua Francisco de Sousa
                            [clieNumero] => 218
                            [clieBairro] => odjod
                            [clieCEP] => 58830000
                            [clieCidade] => dede
                            [clieEstado] => PB
                            [clieReferencia] => Perto do Postinho -->
                            <?php foreach($clientes as $cliente):?>
                                    <tr>
                                        <td><?php echo $cliente->clieid;?></td>
                                        <td><?php echo $cliente->clieNome;?></td>
                                        <td><?php echo $cliente->clieCPF;?></td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <<?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php $this->load->view('layout/footer.php') ?>