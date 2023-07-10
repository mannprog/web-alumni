<form id="deleteDoc" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm mb-0 btn-danger deleteBtn" data-id="{{ $row->id }}"><i
            class="fas fa-trash-alt"></i></button>
</form>
