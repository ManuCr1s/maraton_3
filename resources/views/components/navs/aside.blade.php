<div class="sidebar" data-color="secondary" data-image="{{asset('assets/img/full-screen-image-3.jpg')}}">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                MT
            </a>

			<a href="http://www.creative-tim.com" class="simple-text logo-normal">
				MARATON 2024
			</a>
        </div>

    	<div class="sidebar-wrapper">
            <div class="user">
				<div class="info">
					<div class="photo">
	                
	                </div>

					<a data-toggle="collapse" href="#collapseExample" class="collapsed">
						<span>
							{{Auth::user()->name}}
	                        <b class="caret"></b>
						</span>
                    </a>

					<div class="collapse" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#pablo">
									<span class="sidebar-mini">MP</span>
									<span class="sidebar-normal">Mi Perfil</span>
								</a>
							</li>

							<li>
								<a href="#pablo">
									<span class="sidebar-mini">EP</span>
									<span class="sidebar-normal">Editar Perfil</span>
								</a>
							</li>

							<li>
								<a href="#pablo">
									<span class="sidebar-mini">A</span>
									<span class="sidebar-normal">Ajustes</span>
								</a>
							</li>
						</ul>
                    </div>
				</div>
            </div>

			<ul class="nav">
				<li class="active">
					<a href="{{route('dashboard')}}">
						<i class="pe-7s-graph"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li>
					<a data-toggle="collapse" href="#componentsExamples">
					<i class="pe-7s-note2"></i>
                        <p>Inscritos
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="componentsExamples">
						<ul class="nav">
							<li>
								<a href="#">
									<span class="sidebar-mini">I</span>
									<span class="sidebar-normal">Inscritos</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="sidebar-mini">N</span>
									<span class="sidebar-normal">Numerados</span>
								</a>
							</li>	
							<li>
								<a href="#">
									<span class="sidebar-mini">B</span>
									<span class="sidebar-normal">Baja</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
    	</div>
    </div>