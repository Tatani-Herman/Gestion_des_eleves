<nav class="navbar navbar-expand-lg navbar-light bg-light mr-auto">
  <a class="navbar-brand" href="{{ url('/') }}">Gestion des élèves</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ url('/') }}">Acceuil <span class="sr-only">(current)</span></a>
      <div class="nav-item dropdown">
      <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Classes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @php
        $classes = array('AP1','AP2','GINF1','GINF2','GINF3','GIL1','GIL2','GIL3');
        @endphp
        @foreach($classes as $class)
          <a class="dropdown-item" href="{{url('/classes/'.$class)}}">{{$class}}</a>
        @endforeach
        </div>
        </div>
        <a class="nav-item nav-link active" href="{{ url('/create') }}">Créer</a>
    </div>
  </div>
</nav>