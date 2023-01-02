<x-layout.authentication.master>

  <div class="login-form">
    <form action="">
      <div class="top">
        {{-- headline component --}}
        <x-authentication.title.headline>
          <x-slot name="headline">
            Registration
          </x-slot>
        </x-authentication.title.headline>
        {{-- headline component end --}}

        {{-- subtitle component --}}
        <x-authentication.title.subtitle>
          <x-slot name="subtitle">
            Join to our organization now?
          </x-slot>
        </x-authentication.title.subtitle>
        {{-- subtitle component end --}}

      </div>

      <div class="form-area">

          {{-- first name component start --}}
          <x-authentication.input.text>
            <x-slot name="textPlaceHolder">First Name</x-slot>
            <x-slot name="name">fname</x-slot>
            <x-slot name="icon">fa fa-user</x-slot>
          </x-authentication.input.text>
          {{-- first name component end --}}

          {{-- last name component start --}}
          <x-authentication.input.text>
            <x-slot name="textPlaceHolder">Last Name</x-slot>
            <x-slot name="name">lname</x-slot>
            <x-slot name="icon">fa fa-user</x-slot>
          </x-authentication.input.text>
          {{-- last name component end --}}

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
            Registration
          </x-authentication.input.button>
      </div>
    </form>

    <x-authentication.footer.footer />

  </div>

</x-layout.authentication.master>
