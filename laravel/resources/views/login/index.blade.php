@include('partials.head')
<main class="form-signin w-100 valign m-auto">
  <form action="/login" method="post">
    @csrf
    <img class="mb-3 logo-login" src="img/logo/logo.svg" alt="OneDream" width="130" >
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <label for="email">Email</label>
      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="email" autofocus required >
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <label for="password" class="mt-2">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
  </form>
</main>
@include('partials.script')