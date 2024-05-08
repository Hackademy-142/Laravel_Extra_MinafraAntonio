<x-layout>

  <div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-12 col-md-6">
        <p class="display-3 text-center">Registrati</p>
      </div>
    </div>
  </div>

  <x-display-errors/>

  <div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-12 col-md-6">
        <form class="p-3 shadow rounded bg-secondary-subtle" method="post" action="{{route('register')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="nome" class="form-label">nome</label>
            <input type="text" name="name" class="form-control" id="nome">
          </div>
          <div class="mb-3">
            <label for="img" class="form-label"><i class="bi fs-4 photo-video bi-image-fill"></i> Aggiungi immagine profilo</label>
            <input type="file" name="img" class="form-control" id="img">
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password_confirmation">
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
          </div>
          <button type="submit" class="btn btn_custom">Registrati</button>
        </form>
      </div>
    </div>
  </div>





</x-layout>