<x-loginmaster >


    
    <section class="content">
            <h1>welcome to login interfaces</h1>
            <a href="{{route('admin.login') }}">Admin login</a><br>
            
            
              <x-primary-button>
                <a class="btn btn-app" href="{{route('login') }}">
                <i class="fa fa-users"></i> User login
              </a>
              </x-primary-button>
              <x-primary-button>
                <a class="btn btn-app" href="{{route('admin.login') }}">
            <i class="fa fa-users"></i> Admin login
              </a>
              </x-primary-button>
              

            
    </section>

</x-loginmaster>