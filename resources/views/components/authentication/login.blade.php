<x-layout.authentication.master>

  <div class="login-form">
    <form action="">
      <div class="top">
        {{-- headline component --}}
        <x-authentication.title.headline>
          <x-slot name="headline">
            Login
          </x-slot>
        </x-authentication.title.headline>
        {{-- headline component end --}}

        {{-- subtitle component --}}
        <x-authentication.title.subtitle>
          <x-slot name="subtitle">
            Login to your portal now?
          </x-slot>
        </x-authentication.title.subtitle>
        {{-- subtitle component end --}}

      </div>

      <div class="form-area">

          {{-- email component start --}}
          <x-authentication.input.email>
            <x-slot name="emailPlaceHolder">Email</x-slot>
            <x-slot name="name"> email</x-slot>
            <x-slot name="icon">fa fa-envelope-o</x-slot>
          </x-authentication.input.email>
          {{-- email component end --}}

          {{-- password component start --}}
          <x-authentication.input.password>
            <x-slot name="passwordPlaceHolder">********</x-slot>
            <x-slot name="name">password</x-slot>
            <x-slot name="icon">fa fa-key</x-slot>
          </x-authentication.input.password>
          {{-- password component end --}}

          <x-authentication.input.button>
            Login
          </x-authentication.input.button>
      </div>
    </form>

    <x-authentication.footer.footer />

  </div>

</x-layout.authentication.master>
