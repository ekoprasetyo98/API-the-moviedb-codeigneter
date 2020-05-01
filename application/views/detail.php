<div class="container-fluid">
<div class="col-md-4">
  <div class="row-mt-3">
<?php 
  $content = file_get_contents($link);
  $result = json_decode($content);
  $data='<div class="card mb-3">
  <img src="http://image.tmdb.org/t/p/w185'.$result->poster_path.'" class="card-img-top" height="320" width="320" >
  <div class="card-body">
    <h5 class="card-title">Judul : '.$result->original_title.'</h5>
    <h7 class="card-title color-yellow">Rating : '.$result->vote_average.'</h7>
    <p class="card-title">Waktu Rilis : '.$result->release_date.'</p>
    <p>Vote Count : '.$result->vote_count.'.</p>
    <p>Sinopsis : '.$result->overview.'.</p>
  </div>
</div>
';
  

  echo $data;

  ?>
  <hr>

  
</div>
</div>
  </div>