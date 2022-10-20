<script>
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
        } else document.getElementById('ifYes').style.display = 'none';

    }
</script>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Approve Agunan</h4>
</div>
<div class="modal-body">
    <p>Apakah anda ingin menyetujui permohonan ini?</p>
    <div class="form-group">
        <input type="hidden" class="form-control" id="hid" placeholder="" name="id" value="<?= $agunan; ?>">
        <center>
            <table>
                <tr>
                    <td><input type="radio" onclick="javascript:yesnoCheck();" name="approve" value="yes" id="yesCheck"> Ya </input></td>
                    <td></td>
                    <td><input type="radio" onclick="javascript:yesnoCheck();" name="approve" value="no" id="noCheck"> Tidak </input></td>
                </tr>
            </table>
        </center>
        <div class="box-body" id="ifYes" style="display:none">
            <div class="form-group <?php form_error('status') ? print 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">Status*</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status" name="status">
                        <option value="tidak_bermasalah" <?php if (set_value('status') == "tidak_bermasalah") echo 'selected'; ?>>Tidak Bermasalah</option>
                        <option value="bermasalah" <?php if (set_value('status') == "bermasalah") echo 'selected'; ?>>Bermasalah</option>
                    </select>
                    <?= form_error('status') ? '<span class="help-block text-danger">' . form_error('status') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('tgl_realisasi') ? print 'has-error' : '' ?>">
                <label class=" col-sm-4 control-label">Tanggal Realisasi*</label>
                <div class="col-sm-8">
                    <input type="date" class="datepicker form-control" id="tgl_realisasi" name="tgl_realisasi" value="<?= set_value("tgl_realisasi"); ?>">
                    <?= form_error('tgl_realisasi') ? '<span class="help-block text-danger">' . form_error('tgl_realisasi') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('no_spk') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">No SPK*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" rows="3" id="no_spk" name="no_spk" value="<?= set_value("no_spk"); ?>"></input>
                    <?= form_error('no_spk') ? '<span class="help-block text-danger">' . form_error('no_spk') . '</span>' : ""; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
    <button type="submit" name="submit" class="btn btn-info">Submit</button>
</div>