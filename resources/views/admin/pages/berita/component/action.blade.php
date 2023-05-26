<form id="deleteDoc" method="post">
    @csrf
    @method('DELETE')
    <a href="javascript:void()" data-id="{{ $row->id }}" id="editBerita" class="btn btn-sm mb-0 btn-warning"><i
            class="fas fa-pencil-alt"></i></a>
    <button type="submit" class="btn btn-sm mb-0 btn-danger deleteBtn" data-id="{{ $row->id }}"><i
            class="fas fa-trash-alt"></i></button>
</form>
