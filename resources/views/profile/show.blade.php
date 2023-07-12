
<style>
  .main-nav {
  display: flex;
  justify-content: center;
}

.menu {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu li {
  margin: 0 10px;
}

.menu li a {
  text-decoration: none;
  color: #000;
}
  
    
    </style>

<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile') }}
    </h2>
    <nav class="main-nav">
        <ul class="menu sf-arrows">
            <li class="megamenu-container active">
                @if (Route::has('login'))
                    @auth
                        <a href="{{url('/redirect')}}">Home</a>
                    @else
                        <a href="{{url('/')}}">Home</a>
                    @endauth
                @endif
            </li>
            @if (Route::has('login'))
                @auth
                    <li>
                        <a href="{{ route('profile.show') }}">Profile</a>
                    </li>
                @endauth
            @endif
            <li>
                <a href="#">Products</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            @if (Route::has('login'))
                @auth
                    <li>
                        <a href="#">Orders</a>
                    </li>
                @endauth
            @endif
            @if (Route::has('login'))
                @auth
                    <li>
                        <a href="#" class="">Cart<i class="fa-sharp fa-light fa-cart-shopping fa-beat-fade" style="color: #000000;"></i></a>
                    </li>
                @endauth
            @endif
        </ul><!-- End .menu -->
    </nav><!-- End .main-nav -->
</x-slot>


    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
