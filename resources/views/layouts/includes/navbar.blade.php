<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="/"><img src="{{asset('klorofil/assets/img/elsamara.png')}}" alt="Elsamara Logo" class="img-responsive logo" width="50%" height="40%"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-menu"></i></button>
				</div>
				<form class="navbar-form navbar-left" action="/admin.users" method="get">
					<!-- <div class="input-group">
						<input type="text" aria-label="Seacrh" name="cari" class="form-control" placeholder="Search ...">
						<span class="input-group-btn"><button id="button" class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button></span>
					</div> -->
				</form>
				<div class="navbar-btn navbar-btn-right">

				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{auth()->user()->name}}</span></span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>