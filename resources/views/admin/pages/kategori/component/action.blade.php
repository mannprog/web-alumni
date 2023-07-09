<form id="deleteDoc" method="post">
    @csrf
    @method('DELETE')
    <a href="{{ route('kategori.show', $row->slug) }}" class="btn btn-sm mb-0 btn-primary"><i class="fas fa-eye"></i></a>
    @role('admin|petugas')
        <a href="javascript:void()" data-id="{{ $row->id }}" id="editItem" class="btn btn-sm mb-0 btn-warning"><i
                class="fas fa-pencil-alt"></i></a>
        <button type="submit" class="btn btn-sm mb-0 btn-danger deleteBtn" data-id="{{ $row->id }}"><i
                class="fas fa-trash-alt"></i></button>
    @endrole
</form>
