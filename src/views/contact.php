<?php
  $pageTitle = "Me contacter";
?>

<h2>Me contacter</h2>

<form action="sendMail" method="POST">
  <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Nom"/>
  </div>
  <div class="form-group">
    <label for="firstname">Prenom</label>
    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Prénom"/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre ton adresse email"/>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="corpsMail">Votre message</label>
    <textarea class="form-control"  id="corpsMail" name="body" rows="4" cols="50" placeholder="Votre message ici..."></textarea>

  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>