<x-loginmaster>



    <section class="content" style="display: flex; justify-content: center; align-items: center; margin-top:200px; " >
        <style>
            .main {
                width: 190px;
                height: 254px;
                

            }

            .card {
                width: 190px;
                height: 254px;
                background: #f5f3f4;
                padding: 2rem 1.5rem;
                transition: box-shadow .3s ease, transform .2s ease;
                display: flex;
                flex-direction: column;
                position: absolute;
            }

            .card-info {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .card-avatar {
                background: radial-gradient(#A8A6B6, #B3B1BF, #BDBBC7, #C5C4CE, #E2E2E7);
                width: 100px;
                height: 100px;
                border-radius: 50%;
                transition: transform .2s ease;
            }

            .card-title {
                color: #1b1b1b;
                font-size: 1.1em;
                font-weight: 600;
                line-height: 2rem;
                margin-top: 5px;
            }

            .card-subtitle {
                color: #7e93a0;
                font-size: 1.0em;
                
            }
            a
            {
                text-decoration: none;
                color:#7e93a0;
            }

            .card:hover {
                box-shadow: 0 10px 50px #23232333;
            }

            .card:hover .card-info {
                transform: translateY(-5%);
            }

            .card-avatar:hover {
                transform: scale(1.1);
            }

            #cs1:hover {
                transform: scale(2.0);
            }

            #cs2:hover {
                transform: scale(2.0);
            }

            #cs3:hover {
                transform: scale(2.0);
            }


            .main:hover #c1 {
                transform: translateX(0px);
            }

            .main:hover #c2 {
                transform: translateX(195px);
            }

            .main:hover #c3 {
                transform: translateX(-195px);
            }

        </style>

        <div class="main">
          <div id="c2" class="card">
            <div class="card-info">
              <div class="image">
                <img src="{{ asset('assets/img/parent.png') }}" class="img-circle elevation-1" style="width: 95px; height: 95px;" alt="User Image">
              </div>
                <div class="card-title">Espace Parent</div>
                <div class="card-subtitle"><a href="#">Se Connecter</a></div>

            </div>
        </div>
          

            <div id="c3" class="card">
              <div class="card-info">
                    <div class="image">
                      <img src="{{ asset('assets/img/admin.png') }}" class="img-circle elevation-1" style="width: 95px; height: 95px;" alt="User Image">
                    </div>
                  <div class="card-title">Administartion</div>
                <div class="card-subtitle"><a href="{{ route('admin.login') }}">Se Connecter</a></div>
              </div>
            </div>

            <div id="c1" class="card">
                <div class="card-info">
                  <div class="image">
                    <img src="{{ asset('assets/img/studentlogin.jpg') }}" class="img-circle elevation-1" style="width: 95px; height: 95px;" alt="User Image">
                  </div>
                    <div class="card-title" >Espace Etudiant</div>
                    <div class="card-subtitle"><a href="{{ route('login') }}">Se Connecter</a></div>

                </div>
            </div>

        </div>

    </section>

</x-loginmaster>
