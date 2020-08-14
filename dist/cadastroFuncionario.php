<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Cadastro</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Funcionário</li>
                        </ol>
                        
                        <form class="login100-form validate-form" method="post" action="index.php?pagina=dashBoard">
                            <div class="form-group">
                                <label for="formGroupExampleInput">CPF (Apenas Números)</label>
                                <input type="text" minlength="14" maxlength="14" class="form-control" id="cpfCadastro" placeholder="Digite o CPF">
                            </div>
                            
                            <div class="form-group">
                              <label for="inputEmail4">Nome (Completo)</label>
                              <input type="text" class="form-control" id="inputEmail4" placeholder="Digite o nome Completo">
                            </div> 
                            <div class="form-group">
                                <label for="inputAddress">Endereço</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Rua exemplo, nº 0">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputCity">Cidade</label>
                                  <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEstado">Estado</label>
                                    <select id="inputEstado" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputCEP">CEP</label>
                                    <input type="text" class="form-control" id="inputCEP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>

                    
                        </form>
                    </div>
                </main>