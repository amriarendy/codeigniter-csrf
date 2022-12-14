<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attack CSRF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
<body>
<div class="container py-3">
    <header>
		<div class="d-flex flex-column flex-md-row align-items-center pb-4 mb-5 border-bottom">

		<div class="header fixed-top" id="header">
			<nav class="navbar navbar-expand-lg bg-light">
				<div class="container-sm">
					<a class="navbar-brand" href="https://github.com/amriarendy">
		              <img src="logo.png" alt="logo" rel="icon" width="30px">
            		</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Tentang</a>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Kategori
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Native</a></li>
								<li><a class="dropdown-item" href="#">Laravel</a></li>
								<li><a class="dropdown-item" href="#">Codeigniter 3</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#">Tambah Master</a></li>
							</ul>
							</li>
						</ul>
						<a href="#" class="btn btn-outline-success mr-3">Login</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<main>
		<div class="row">
			<div class="col">
			<form method="post" action="http://localhost/csrf/target-csrf/tambah">
				<div class="card">
				<div class="card-header">
					<h5>Form Tambah</h5>
				</div>
					<div class="card-body">
						<div class="form-group">
							<label>Tutorial</label>
							<input type="text" class="form-control" name="tutorial">
						</div>
						<div class="form-group">
							<label>Kategori Tutorial</label>
							<input type="text" class="form-control" name="kategori_tutorial">
						</div>
						<div class="form-group">
							<label>Tutorial</label>
							<textarea class="form-control" name="konten_tutorial"></textarea>
						</div>
					</div>
					<div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
            </div>
        </div>
	</main>

    </div>
	<footer id="footer" class="footer">
		<div class="footer-top">
			<div class="container">
		
			</div>
		</div>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>