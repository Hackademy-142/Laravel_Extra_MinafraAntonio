<div>

    <div class="container">
        <div class="row">
            @foreach ($chirp as $crp)
            <div class="col-12 ">
                <div class="tweet-wrap">
                    <div class="tweet-header">
                        <img src="https://pbs.twimg.com/profile_images/1012717264108318722/9lP-d2yM_400x400.jpg" alt="" class="avator">
                        <div class="tweet-header-info">
                            {{$crp->user_id}}
                            <p>🔥{{$crp->content}}</p>
                        </div>
                    </div>
                    <div class="tweet-img-wrap">
                        <img src="{{Storage::url($crp->img)}}" alt="" class="tweet-img">
                    </div>
                    <div class="mx-auto text-end my-3 w-100">
                        <a href="">
                            <i class="bi text-primary fs-4 bi-pencil-square"></i>
                        </a>
                        <button class="btn" wire:click="destroy({{$crp}})">
                            <i class="bi text-danger  fs-4 bi-trash3"></i>
                        </button>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
