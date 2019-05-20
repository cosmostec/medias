@extends('layout.default')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-12">

<form method="POST" action="" name="form-create-user" id="id-form-create-user" class="mb-5 pb-5">
  <div class="form-group">
    <label for="input-nom">Nom</label>
    <input type="text" name="nom" class="form-control" id="input-nom" aria-describedby="emailHelp" placeholder="Entrer votre nom SVP">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="input-prenom">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="input-prenom" aria-describedby="emailHelp" placeholder="Entrer votre prenom SVP">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="input-email">Email</label>
    <input type="email" name="email" class="form-control" id="input-email" placeholder="Entrer votre mot de passe SVP">
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" name="submit" class="btn btn-primary btn-block">Enregistrer</button>
</form>
</div>
</div>
</div>
@endsection