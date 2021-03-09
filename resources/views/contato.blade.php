@include('header')
        <br><br><br>
        <h1 style="margin-left: 45px;">Contato</h1>

        <div class="row">
        <div class="col-md-6">
        <i class="fas fa-code fa-7x fa-search-location" style="margin-left: 162px;margin-top: 36px;"></i>
        <p style="margin-top: -81px;margin-left: 247px;">Estamos localizados no Sudoeste!<br> Endereço: CLSW 303, Bloco A - Loja 24/26</p>
        </div>
        <div class="col-md-6">
        <i class="fas fa-code fa-7x fa-phone-volume" style="margin-top: 28px;"></i>
        <p style="margin-top: -77px;margin-left: -80px;">Caso queira falar conosco:<br>(61) 98526-9019 ou barbeariapef@gmail.com</p>
        </div>
        </div>

        <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d125968.57406133202!2d-40.58328152586204!3d-9.375855318954216!2m3
        !1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sresidencial%20vivendas%20petrolina!5e0!3m2!1spt-PT!2sbr!4v1615249243019!5m2!1spt-PT!2sbr" 
        width="600" height="450" style="border:0;margin-left: 352px;margin-top: 113px;border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <br><br><br><br>
        <h1 style="margin-left: 37px;">Duvidas, Sugestões e Reclamações:</h1>
        <br>
        <form action="" style="margin-left: 41px;margin-right: 361px;">
        <input type="hidden" name="action" value="send_contact_form">
        <div class="form-group">
        <label for="first_last_name">Nome e Sobrenome:</label>
        <input type="text" name="name" class="form-control" placeholder="Digite seu Nome e Sobrenome">
        </div>

        <div class="form-group">
        <label for="email_address">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Digite Seu Email">
        </div>
        
        <div class="form-group">
        <label for="subject">Assunto:</label>
        <input type="text" name="subject" class="form-control" placeholder="Digite o Assunto">
        </div>

        <div class="form-group">
        <label for="message">Mensagem:</label>
        <textarea name="message" id="message" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
        <div class="form-actions">
        <div class="col-md-5">
        <button type="submit" class="btn btn-lg btn-success btn-submit">Enviar
        <i class="fa fa-caret-right">
        </i>
        </button>
        </div>

        <div class="col-md-7">
        <p class="form-info">Todos os campos são obrigatórios.</p>
        </div>
        </div>
        </div>
        </form>
            <br>
        <footer>
                <span class="cima">
                    <a href="#" title="">
                        <i class="fas fa-arrow-circle-up"></i>
                    </a>
                </span>
                <div class="myname">
                <p><small>Barbearia P&F &copy; Todos os direitos reservados. Desenvolvido Por
                <a href="https://www.linkedin.com/in/matheus-bruno-1695611b1/" target="_blank">Matheus Bruno</a>
                </p></small>
                </div>
                </footer>
</body>
</html>