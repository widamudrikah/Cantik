<!-- Modal -->
<div class="modal fade" id="statusTrx{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Update Status</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('done.dokter') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$row->id}}" name="id_trx">
                    <div class="form-group">
                      <select class="custom-select" name="status" id="status">
                        <option value="">Pilih Status</option>
                        <option value="1" @if($row->status == 1) {{ 'selected' }} @endif>Pending</option>
                        <option value="2" @if($row->status == 2) {{ 'selected' }} @endif>Sukses</option>
                      </select>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </div>
          </div>