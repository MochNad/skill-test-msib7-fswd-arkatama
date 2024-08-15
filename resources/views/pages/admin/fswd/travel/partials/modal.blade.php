@can($globalModule['create'])
    <x-mollecules.modal id="add-travel-modal" action="{{ route('fswd.travel.index') }}" data-table-id="travel-table"
        tableId="travel-table">
        <x-slot:title>Tambah travel</x-slot:title>
        <div class="mb-3">
            <x-atoms.form-label required>Nama travel</x-atoms.form-label>
            <x-atoms.input name="nama" id="nama_field" type="date" placeholder="Masukkan Nama"></x-atoms.input>
        </div>
        <x-slot:footer>
            <button type="submit" class="btn btn-primary">Tambahkan travel</button>
        </x-slot:footer>
    </x-mollecules.modal>
@endcan
@can($globalModule['update'])
    <x-mollecules.modal id="edit-travel-modal" action="{{ route('fswd.travel.index') }}/{id}" method="PUT"
        tableId="travel-table">
        <x-slot:title>Edit travel</x-slot:title>
        <div class="mb-3">
            <x-atoms.form-label required>File</x-atoms.form-label>
            <x-atoms.dropzone id="tes2" name="file" />
        </div>
        <div class="mb-3">
            <x-atoms.form-label required>Nama travel</x-atoms.form-label>
            <x-atoms.input name="nama" id="nama_field" placeholder="Masukkan Nama"></x-atoms.input>
        </div>
        <div class="mb-3">
            <x-atoms.form-label required>Keterangan travel</x-atoms.form-label>
            <x-atoms.textarea name="keterangan" rows="3" id="keterangan_field2"
                placeholder="Masukkan Keterangan"></x-atoms.textarea>
        </div>
        <x-slot:footer>
            <button type="submit" class="btn btn-primary">Simpan travel</button>
        </x-slot:footer>
    </x-mollecules.modal>
@endcan
@can($globalModule['read'])
    <x-mollecules.modal id="preview-modal" size="md" hasCloseBtn="true" action="#">
        <x-slot name="title">
            Pratinjau travel
        </x-slot>
        <x-slot name="footer">
        </x-slot>
        <div class="preview-container-modal" class="mb-3">
            <img src="{{ asset('assets/media/illustrations/img-preview.png') }}" alt="Default Image"
                class="img-fluid rounded mx-auto d-block" style="max-width: 400px; max-height: 300px;">
        </div>
    </x-mollecules.modal>
@endcan
