<form id="deleteDoc" method="post">
    @csrf
    @method('DELETE')
    <a href="{{ route('berita.show', $row->slug) }}" class="btn btn-sm mb-0 btn-primary"><i class="fas fa-eye"></i></a>
    @role('admin|petugas')
        <a href="{{ route('berita.edit', $row->slug) }}" class="btn btn-sm mb-0 btn-warning"><i
                class="fas fa-pencil-alt"></i></a>
        <button type="submit" class="btn btn-sm mb-0 btn-danger deleteBtn" data-id="{{ $row->id }}"><i
                class="fas fa-trash-alt"></i></button>
    @endrole
</form>
