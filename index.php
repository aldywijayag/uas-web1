<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aldy Wijaya Gustian</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="modul/JQuery/jquery.min.js"></script>

	<!-- CSS and JS DataTable -->
	<script src="modul/datatables.min.js"></script>
	<script src="modul/DataTables-1.13.1/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>
	<!-- Nav Bar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" style="margin-left: 50px;">
				<img src="assets/alliance.png" alt="Logo" width="25">
				Aldy Wijaya Gustian (19552011351)
			</a>

			<!-- Collapse Navbar-->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			</div>
		</div>
	</nav>

	<div class="container w-75 mt-3">
		<table id="dataregister" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>ID Barang</th>
					<th>Nama Barang</th>
					<th>Jumlah Barang</th>
					<th>Harga Barang</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	</div>

	<script>
		$(document).ready(function() {
			$.ajax({
				"url": "http://localhost/web1/uas-web1/api/warung/fetch",
				"method": "GET",
				"success": function(response) {
					$.each(response.data, function(i, warung) {
						$html = '<tr>' +
							`<td>${warung.id_barang}</td>` +
							`<td>${warung.nama_barang}</td>` +
							`<td>${warung.jumlah_barang}</td>` +
							`<td>${warung.harga_barang}</td>` +
							`<td><a href="/web1/uas-web1/editwarung/edit?id=${warung.id_barang}" class="btn btn-primary">Edit</a>` +
							`<button data-href="/web1/uas-web1/api/warung/delete" data-id="${warung.id_barang}" class="btn btn-danger btn-delete ms-1">Delete</button>` +
							'</td>' +
							'</tr>';

						$('#dataregister tbody').append($html);
					});
				},
				"complete": function() {
					$('#dataregister').DataTable({
						"aLengthMenu": [
							[5, 10, 25, -1],
							[5, 10, 25, "All"]
						],
						"iDisplayLength": 5,
					});
				}
			});

			$(document).on('click', '.btn-delete', function() {
				let href = $(this).data('href');
				let id = $(this).data('id');
				let data = {
					"id_barang": id
				};

				//Converting object > JSON
				let json = JSON.stringify(data);

				$.ajax({
					"url": href,
					"method": "DELETE",
					"data": json,
					"success": function(response) {
						alert('deleted');
						location.reload();
					}
				});
			});
		});
	</script>
</body>

</html>