<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="{{ route('home') }}">BookSwap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="{{ route('createLivre') }}">Ajouter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Essai</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>