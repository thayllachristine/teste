<section class="contato">
    <div class="container">
        

        <?php
            the_post();
             the_content();
        ?>

        <form>
            <div class="cols">
                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Nome" required>
                    </div>
                </div>

                <div class="col">
                     <div class="form-group">
                         <input type="email" placeholder="E-mail">
                     </div>
                </div>

                 <div class="col">
                     <div class="form-group">
                         <input type="number" placeholder="Telefone">
                     </div>
                </div>

                 <div class="col">
                    <div class="form-group">
                         <select>
                             <option>Selecione uma opção</option>
                             <option>Orçamento</option>
                             <option>Sugestão</option>
                             <option>Outras informações</option>
                         </select>
                     </div>
                </div>

            </div>

                 <div class="form-group">
                     <textarea placeholder="Preencha suas dúvidas"></textarea>
                 </div>

                 <div class="form-group">
                    <button class="botao medio"><i class="fas fa-arrow-right"></i> Enviar Contato</button>
                 </div>


            <p class="text-success"><i class="fas fa-info-circle"></i> Seu contato foi enviado com sucesso!</p>
            <p class="text-danger"><i class="fas fa-info-circle"></i> Preencha todos os campos obrigatórios.</p>

        </form>
    </div>
</section>