@extends('layouts.content')
@section('content')
<h1 class="text-center">Contact</h1>

<div class="row m-5">
    <div class="col-md-4">
       <h1 class="text-center">Addresse</h1>
       <ul class="list-group">
           <li class="list-group-item m-2"> 
           <ion-icon name="location-outline"></ion-icon>
              balbala, T9, rue Arta.</li>
           <li class="list-group-item m-2">
         
              <span>  <ion-icon name="call-outline"></ion-icon> +253 77 50 29 08</span>
              <br>
              <span>   <ion-icon name="call-outline"></ion-icon>+253 77 05 03 32</span></li>
           <li class="list-group-item m-2">
           <ion-icon name="mail-outline"></ion-icon>
               mail@example.com</li>
       </ul>
    </div>
    <div class="col-md-8 ">
      <h1 class="text-center">Formulaire de contact</h1>
    <form class="">
    <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="Nom" aria-describedby="textHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="Tel" class="form-label"> Tel</label>
            <input type="text" class="form-control" id="tel" aria-describedby="telHelp">
            
        </div>
        <div class="mb-3">
            <label for="sujet" class="form-label"> sujet</label>
            <input type="text" class="form-control" id="sujet" aria-describedby="sujetHelp">
            
        </div>
        <div class=" mb-3 form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Commentaire</label>
       </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary text-dark px-5">Envoyer</button>
        </form>
    </div>
</div>
@endsection