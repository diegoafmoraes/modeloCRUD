      <div class="row">
        <div class="col-md-2 mb-1">
        </div>

        <div class="col-md-8 mb-1">
          
          <hr />
          <ul>
            
          <?php
            foreach($listaUsers as $lu):
          ?>
            <li><?=$lu->name;?></li>
          <?php
            endforeach;
          ?>

          </ul>
          <hr />

          <h3 class="text-center mb-3">Dados Cadastrais:</h3>

          <form method="POST" action="<?=BASE_URL . 'home/enviaEmail/'; ?>" class="card p-2">

            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="nomeEmpresa">Nome da Empresa que irá iniciar</label>
                <input type="text" class="form-control" id="nomeEmpresa" name="nomeEmpresa" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nasc" name="data_nasc" placeholder="">
                <div class="invalid-feedback">
                  É obrigatório inserir um título válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="">
                <div class="invalid-feedback">
                  É obrigatório inserir um título válido.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="" value="">
                <div class="invalid-feedback">
                  É obrigatório inserir um dado válido.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" value="">
                <div class="invalid-feedback">
                  É obrigatório inserir um dado válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="estado">Estado</label>
                <select id="estado" name="estado" class="form-control">
                  <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="GO">Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
                  <option value="EX">Estrangeiro</option>
                </select>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(99) 9999-9999" value="">
                <div class="invalid-feedback">
                  É obrigatório inserir um dado válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cel">Celular</label>
                <input type="text" class="form-control" id="cel" name="cel" placeholder="(99) 99999-9999" value="">
                <div class="invalid-feedback">
                  É obrigatório inserir um dado válido.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="curso">Curso</label>
                <input type="text" class="form-control" id="curso" name="curso" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um título válido.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="ano_sem">Ano/Semestre atual</label>
                <input type="text" class="form-control" id="ano_sem" name="ano_sem" placeholder="">
                <div class="invalid-feedback">
                  É obrigatório inserir um valor válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="ano_conc">Ano de Conclusão</label>
                <input type="text" class="form-control" id="ano_conc" name="ano_conc" placeholder="">
                <div class="invalid-feedback">
                  É obrigatório inserir um valor válido.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-6  mb-3">
                <label for="nivel">Nível</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="nivel" id="ensino_medio" value="Ensino Médio">
                  <label class="form-check-label" for="ensino_medio">
                    Ensino Médio
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="nivel" id="tecnico" value="Ensino Técnico">
                  <label class="form-check-label" for="tecnico">
                    Ensino Técnico
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="nivel" id="graduacao" value="Graduação">
                  <label class="form-check-label" for="graduacao">
                    Graduação
                  </label>
                </div>                  
              </div>
              <div class="col-md-6 mb-3">
                <label for="matricula">Matrícula</label>
                <input type="matricula" class="form-control" id="matricula" name="matricula" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-secondary">Enviar</button>
          </form>

        </div>

        <div class="col-md-2 mb-3">
        </div>
      </div>