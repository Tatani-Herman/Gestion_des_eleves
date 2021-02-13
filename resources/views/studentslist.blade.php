
<div class="card mb-3">
  <img src="{{ asset('img/3.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Liste des élèves</h5>
    <p class="card-text">Vous pouvez trouver ici toutes les informations sur les élèves dans le système</p>

    <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">AGE</th>
      <th scope="col">CLASSE</th>
      <th scope="col" >ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{ $student->cne }}</td>
      <td>{{ $student->firstName }}</td>
      <td>{{ $student->secondName }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->speciality }}</td>
      <td>
         
         <a href="{{ url('/edit/' .$student->id) }}" class="btn btn-sm btn-warning">Editer</a>
      </td>
  @endforeach
  </tbody>
  </table>

  </div>
</div>