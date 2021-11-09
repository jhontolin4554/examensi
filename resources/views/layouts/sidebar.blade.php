


  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 400px;">
        <div class="user-view dark-primary-color">
            <a href="#user"><img class="circle" src="{{asset('img/user.png')}}" style="width: 40px; "></a>
            <br>

            <a href="#name"><span class="white-text name">{{ auth()->user()->name }}</span></a>
<br>
               <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              MENU DEL Sistema
            </a>
          </li>

          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Expedientes
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <li>
                        <a href="{{ route('expedientes.index') }}" class="nav-link link-dark">

                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>

                     buscar espedientes
                        </a>
                      </li>


                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">

                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Procurador
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    @hasrole('Abogado')

                    <li>
                        <a href="{{ route('user.create') }}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                          Añadir
                        </a>
                      </li>
                      @endhasrole
                      <li>
                        <a href="{{ route('teams.index') }}" class="nav-link link-dark">
                          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                           Grupos
                        </a>
                      </li>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Administrar Capetas
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">

                        <li>
                            <a href="{{ route('folders.create') }}" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#"/></svg>
                            Crear Carpeta
                          </a>
                        </li>



                </div>
                </div>
              </div>



          </div>


        </div>
      </div>

  </div>
