<x-layout>

    <div class="container my-5">
        <div class="row justify-content-end ">
            <div class="col">
                <a href="{{route('show.profile')}}">
                    <button class="btn btn-dark ">
                        Profilo
                    </button>
                </a>
            </div>
        </div>
    </div>
    <livewire:form-chirp/>


    <livewire:index-chirp

    />


</x-layout>