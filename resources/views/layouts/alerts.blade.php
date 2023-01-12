@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('successMessage') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (session('errorMessage'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('errorMessage') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
