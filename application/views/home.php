	<div class="container">
		<div class="row mt-3 justify-content-center">
			<div class="col-md-8">
				<marquee><p>Tempat mencari film favorit kalian ada disini, unduh gratis film yang kalian suka!!</p></marquee>
				
				<center><img src="<?= base_url();?>assetss/img/logo3.png" width="520"></center>
				<hr>
			</div>
		</div>
	</div>

	<h1 class="text-center">Pencarian Film</h1>
	<center><p>Dibuat untuk memenuhi tugas ke 2 pemrograman client server</p></center>
	<hr>

	<div class="row" id="movie-list">
	</div>

	
		
	</div>
	<div class="container-fluid">
		<div class="row mt-3 justify-content-center">
			<div class="col-md-8">
		 <div class="input-group mb-3">
		  <input type="text" id="search-input" class="form-control" name="keyword" placeholder="Judul Movie. . .">
		  <div class="input-group-append">
		    <button class="btn btn-primary" id="search-button" type="submit">Cari</button>
		  </div>

	</div>		
				
			</div>
			
		</div>
		
	</div>
	<center><p>design by eko prasetyo</p></center>
	<hr>

	
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">kembali</button>
        
      </div>

    </div>
  </div>
  
</div>

 <script src="assets/js/script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
