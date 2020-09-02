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
                    <label for="inputMatricula">Matrícula (Apenas Números)</label>
                    <input type="text" minlength="14" maxlength="14" class="form-control" id="inputMatricula" placeholder="Digite a Matrícula do funcionário">
                </div>
                <div class="form-group">
                  <label for="inputNome">Nome (Completo)</label>
                  <input type="text" class="form-control" id="inputNome" placeholder="Digite o nome Completo">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Projeto (Código AP)</label>
                    <input type="text" minlength="14" maxlength="14" class="form-control"  placeholder="Digite o Código AP do Projeto deste Funcionário">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputStatus">Status</label>
                        <select id="inputStatus" class="form-control">
                        <option selected>TRABALHANDO</option>
                        <option>DEMITIDO</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">                                
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" id="inputCEP">
                        </div>
                    </div>
                    <div class="form-row">  
                        <div class="form-group col-md-10">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputNumber">Número</label>
                            <input type="text" class="form-control" id="inputNumber">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputBairro">Bairro</label>
                      <input type="text" class="form-control" id="inputBairro">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCity">Cidade</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputEstado">UF</label>
                        <select id="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option>...</option>
                      </select>
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