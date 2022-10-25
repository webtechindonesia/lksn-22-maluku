
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Formify</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

   <main>
      <section class="login">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-6">
                  <h1 class="text-center mb-4">Formify</h1>
                  <div class="card card-default">
                     <div class="card-body">
                        <h3 class="mb-3">Login</h3>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- s: input -->
                           <div class="form-group my-3">
                              <x-jet-label for="email" class="mb-1 text-muted" value="{{ __('Email') }}" />
                              <x-jet-input id="email" class="block mt-1 w-full" class="form-control" type="email" name="email" :value="old('email')" required autofocus />                           </div>

                           <!-- s: input -->
                           <div class="form-group my-3">
                                <x-jet-label for="password" class="mb-1 text-muted" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" class="form-control" type="password" name="password" required autocomplete="current-password" />
                           </div>

                           <div class="mt-4">
                            <x-jet-button class="ml-4 btn btn-primary">
                                {{ __('Log in') }}
                            </x-jet-button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

    <script src="./js/bootstrap.js"></script>
    <script src="./js/popper.js"></script>
  </body>
</html>
