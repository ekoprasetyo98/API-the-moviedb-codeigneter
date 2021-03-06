
function searchMovie(){
	$('#movie_list').php('');
	$.ajax({

		url: 'https://api.themoviedb.org',
		type : 'get',
		dataType : 'json',
		data : {
			'apikey' : 'ca1090203b8f814643a2d46047dfcaff',
			's' : $('#search-input').val()
		},
		success : function(result){
			if (result.Response == "True"){
				let movies = result.Search;


				$.each(movies, function(i, data){
					$('#movie-list').append(`
					<div class="col-md-4">
					<div class="card mb-3 ">
					  <img src="`+$film->poster_path+`" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">`+data.Title+`</h5>
					    <p>Tahun</p> <h6 class="card-subtitle mb-2 text-muted">`+data.Year+`</h6>
					   
					    <a href="#" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="`+data.imdbID +`"">Lihat Detail</a>
					  </div>
					</div>
					</div>
						`);
				});

				$('#search-input').val('');
			}else{
				$('#movie-list').php(`
					<div class="col">
					<h1 class="text-center">`+result.Error+`</h1>
					</div>
					`) 
			}
		}
	});
}
$('#search-button').on('click', function(){
	searchMovie();
});

$('#search-input').on('keyup', function(e){
	if (e.keyCode == 13){
		searchMovie();
	}
});

});