<div class="content-wrapper">

    
    <section class="content">
            <h1>AAAA</h1>
            <p>lorem3000</p>
            {{-- <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1> --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>

    </section>
</div>