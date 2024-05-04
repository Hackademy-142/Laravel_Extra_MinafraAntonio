<div>

    <x-display-message/>

    {{--  <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-8">
                <form class="bg-secondary-subtle  p-2 rounded-3 " wire:submit="store">
                    <div class="mb-3">
                        <label for="content" class="form-label">A cosa stai pensando?</label>
                        <textarea wire:model.blur="content" type="text" class="form-control" id="content" cols="30" rows="10"></textarea>
                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Aggiungi una foto</label>
                        <input wire:model.blur="img" type="file" class="form-control" id="img">
                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Pubblica</button>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="container my-5">
        <div class="row">
            <div class="col">
                <form
                wire:submit='store'>
                <main class="post">
                    <div class="wrapper">
                        <section class="create-post">
                            <div class="post-header">
                                <div class="profile-pic"></div>
                                <div class="user-info">
                                    <div class="full-name">nome</div>
                                </div>
                            </div>
                            <div class="post-content">

                                <textarea wire:model='content' id="content"
                                cols="30" rows="5"
                                placeholder="What's on you mind, Geek?">
                            </textarea>
                            <div class="text-danger">@error('title') {{ $message }} @enderror</div>

                            <div class="emoji-picker">
                                <emoji-picker class="light"></emoji-picker>
                                <i class="emoji" aria-label="Insert an emoji"
                                role="img"></i>
                            </div>
                            <div class="add-to-your-post">
                                <span class="add-to-post-text">Add to your post</span>
                                <div class="add-to-post-icons">
                                    <div class="photo-video">

                                        <input wire:model="img" type="file" class="form-control" id="img">
                                        <label for="img" class="file-label"><i class="bi fs-4 photo-video bi-image-fill"></i></label>
                                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="post-btn" >Post</button>
                        </div>
                    </section>
                </div>
            </main>
        </form>
    </div>
</div>
</div>

</div>
