<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<div class="container">
      <div class="span6 desk">
        <h3>Arsipku</h3>
    	</div>
    </div>
<div class="container" style="color:black;">
	<div class="row">
		<div class="span3" style="border-radius:10px;background-color:white;padding-top:10px">
			<p onmouseover="this.style.background='#cccccc'" onmouseout="this.style.background='white'" style="padding-left:10px;padding-top:10px;height:35px;background-color:rgb(255,255,255)"><?php echo anchor('user/account', 'Profil') ?></p>
			<p onmouseover="this.style.background='#cccccc'" onmouseout="this.style.background='rgb(222,222,222)'" style="padding-left:10px;padding-top:10px;height:35px;background-color:rgb(222,222,222)">Arsipku</p>
		</div>
		<div class="span9" style="border-radius:10px;background-color:white;">
			<div style="margin:20px">
				<button type="submit" class="btn">Check semua</button>
				<button type="submit" class="btn">Hapus check</button>
				<button type="submit" class="btn btn-primary">Hapus file yang dicek</button>
				<table class="table table-striped">
				  <tr>
					  <th> Check</th>
					  <th> Judul </th>
					  <th> Tanggal Upload </th>
					  <th> Mata Kuliah </th>
					  <th> Bidang </th>
					  <th> Link </th>
					
				  </tr>
				  
				  <tr>
					  <td><input type="checkbox"></td>
					  <td> Aplikasi Induksi matematik dalam kehidupan sehari-hari </td>
					  <td> 03/03/2011 </td>
					  <td> Struktur Diskrit </td>
					  <td> Induksi Matematik </td>
					  <td> <a href = "?">Lihat</a> </td>
				  </tr>
				  
				  <tr>
				      <td><input type="checkbox"></td>
					  <td> Aplikasi algoritma greedy dalam menyusun salad pizza hut </td>
					  <td> 05/05/2012 </td>
					  <td> Strategi Algoritma </td>
					  <td> Algoritma </td>
					  <td> <a href = "?">Lihat</a> </td>
				  </tr>
				
				</table>
			</div>
		</div>
	</div>
</div>