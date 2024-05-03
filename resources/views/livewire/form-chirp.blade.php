<div>

    <x-display-message/>

    <div class="container my-5">
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
    </div>
</div>
