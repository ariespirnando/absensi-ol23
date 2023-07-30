<!-- Modal-->
<div class="modal fade bd-example-modal-lg" id="addModalJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jurusan</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form method="POST" action="{{route('jurusan.save.action')}}">
        @csrf
        <div class="modal-body">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kode Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kodeJurusan" placeholder="Kode Jurusan">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                </div>
            </div>

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-6">
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option value="A">Active</option>
                        <option value="N">Non Active</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit"class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
</div>
</div>
