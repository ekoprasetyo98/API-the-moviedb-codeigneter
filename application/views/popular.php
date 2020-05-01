<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <?php 
    $content = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=ca1090203b8f814643a2d46047dfcaff&language=en-US&page=1');
    $result = json_decode($content);
    $data='';
    foreach($result ->results as $film) {
    $data.='<div class="col-12 col-sm-12 col-md-6 col-lg-3 ml-2">';
    $data.='<div class="card mb-3" style="width: 14rem;">';
    $data.='<img src="http://image.tmdb.org/t/p/w185'.$film->poster_path.'" class="card-img-top w-100" height="250" >';
    $data.='<div class="card-body">';
    $data.='<h5 class="card-title">Judul : '.$film->original_title.'</h5>';
    $data.='<h6 class="card-title">Rating :'.$film->vote_average.'</h6>';
    $data.='<p class="card-title">Waktu Rilis :'.$film->release_date.'</p>';

    $data.='<a href="'.base_url().'Welcome/detail/'.$film->id.'" class="btn btn-primary w-100">Detail</a>';
    $data.='</div>';
    $data.='</div>';
    $data.='</div>';
    }
    echo $data;?>
  </div>
</div>