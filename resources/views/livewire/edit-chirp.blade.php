<div>
    <x-display-message/>

    <div class="container my-5">
        <div class="row">
            <div class="col">
                <form
                wire:submit='updateChirp'>
                <main class="post">
                    <div class="wrapper">
                        <section class="create-post">
                            <div class="post-header">
                                <div class="profile-pic"></div>
                                <div class="user-info">
                                    <div class="full-name">{{$chirp->user->name}}</div>
                                </div>
                            </div>
                            <div class="post-content">

                                <textarea wire:model='content' id="content"
                                cols="30" rows="5"
                                placeholder="">
                            </textarea>
                            <div class="text-danger">@error('title') {{ $message }} @enderror</div>

                            <div class="hashtag">
                                <input wire:model="name" class="border tag rounded-2 w-75 h-25" wire:model.blur="tag" id="tag">
                                <i class="bi fs-4 bi-hash"></i>
                            </div>

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
