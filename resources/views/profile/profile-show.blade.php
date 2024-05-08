<x-layout>

<div class="container-fluid my-5 vw-100">
  <div class="card overflow-hidden border-0">
    <div class="card-body p-0">
      <div class="row align-items-center justify-content-center">

        <div class="col-lg-4 mt-n3 order-lg-2 order-1">
          <div class="mt-n5">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px;" ;="">
                <div >
                  <img src="{{Storage::url($user->img)}}" class="w-100" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="text-center">
        <h5 class="fs-5 mb-0 fw-semibold">{{ucfirst($user->name)}}</h5>
      </div>
      <div class="row align-items-center justify-content-center">
        <div class="col">
          <ul class="list-unstyled d-flex align-items-center justify-content-center my-3 gap-3">
            <li class="position-relative text-danger fs-1">
              <i class="bi bi-youtube"></i>
            </li>
            <li class="position-relative fs-3 text-primary">
                <i class="bi bi-facebook"></i>
            </li>
            <li class="position-relative text-danger fs-3">
              <i class="bi bi-instagram"></i>
          </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        @foreach ($chirp->sortbydesc('id') as $chirp )
          @if (Auth::id() == $chirp->user_id)
          <div class="tweet-wrap">
              <div class="tweet-header">
                  <img src="{{$chirp->user->img}}" alt="" class="avator">
                  <div class="tweet-header-info">
                      {{$chirp->user->name}}
                      <p>{{$chirp->content}}</p>
                  </div>
              </div>
              @if($chirp->tags->isNotEmpty())
              <div class="mb-3 ">
                  @foreach($chirp->tags as $tag)
                  <span class="badge text-bg-primary">#{{$tag->name}}</span>
                  @endforeach
              </div>
              @endif
              <div class="tweet-img-wrap">
                  <img src="{{Storage::url($chirp->img)}}" alt="" class="tweet-img">
              </div>
              @if (Auth::id() == $chirp->user->id)
              <div class="mx-auto text-end my-3 w-100">
                  <a href="{{route('edit', compact('chirp'))}}">
                      <i class="bi text-primary fs-4 bi-pencil-square"></i>
                  </a>
                  <button class="btn" wire:click="destroy({{$chirp}})">
                      <i class="bi text-danger fs-4 bi-trash3" ></i>
                  </button>
              </div>
              @endif
          </div>
          @endif
          @endforeach
      </div>
    </div>
</div>

</x-layout>