 <!-- Form contact -->
 <section class="container-fluid contact">
   <!-- Header form contact -->
   <div class="container col-md-offset-4 col-md-4 col-md-offset-4 header-form">
      <h2 id="contactme">Contactez-moi</h2>
      <hr>
      <p>Vous avez des questions ?
        <br>
        n'hésitez pas à me contacter.
      </p>
    </div>

    <div class="col-md-offset-2 col-md-8 col-md-offset-2">
      <form action="https://www.google.fr" method="POST">
        <div class="col-md-6 form-line">
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Nom">
          </div>
          <div class="form-group">
            <label for="email">Adresse E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="E-mail">
          </div>	
          <div class="form-group">
            <label for="telephone">Numéro mobile/fix</label>
            <input type="tel" class="form-control" id="telephone" placeholder="N° mobile/fix">
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group">
            <label for ="description">Message</label>
            <textarea  class="form-control" id="description" placeholder="Votre message"></textarea>
          </div>
          <div>
			  		<button type="submit" class="btn btn-default submit" style="background-color: rgb(14,44,42);color: #129888;text-shadow: 0px 0px 0px;"onmouseover="this.style.backgroundColor='#fff';this.style.color='#000';" 
            onmouseout="this.style.backgroundColor='rgb(14,44,42)';this.style.color='#129888';"><i class="fa fa-paper-plane" aria-hidden="true"></i>Envoyer le message</button>
			  	</div>
				</div>
			</form>
    </div>
  </section>