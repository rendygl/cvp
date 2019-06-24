<div class="row">
  <div class="col-md-6">
    <form id="form_cvp" method="POST">
      <div class="form-group" id="total_unit_group">
        <label class="col-sm-8 col-form-label"><b>Total Unit yang terjual per bulan</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name = 'satu' id="total_unit" placeholder="Total Unit Per Bulan">
        </div>
      </div>
      <div class="form-group" id="harga_jual_group">
        <label class="col-sm-8 col-form-label"><b>Harga Jual Per Unit</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name = 'dua' id="harga_jual" placeholder="Harga Jual Per Unit">
        </div>
      </div>
      <div class="form-group" id="harga_variabel_group">
        <label class="col-sm-8 col-form-label"><b>Harga Variabel Unit</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name ='tiga' id="harga_variabel" placeholder="Harga Variabel Unit">
        </div>
      </div>
      <div class="form-group" id="fix_cost_group">
        <label class="col-sm-8 col-form-label"><b>Fix Cost Per Bulan</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name ='empat' id="fix_cost" placeholder="Fix Cost Per Bulan">
        </div>
      </div>
      <div class="form-group" id="total_unit_tahun_group">
        <label class="col-sm-8 col-form-label"><b>Total Unit Yang Terjual Per Tahun</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name ='lima' id="total_unit_tahun" placeholder="Total Unit Yang Terjual Per Tahun">
        </div>
      </div>
      <div class="form-group" id="company_target_group">
        <label class="col-sm-8 col-form-label"><b>Company Target</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name ='enam' id="company_target" placeholder="Company Target">
        </div>
      </div>
      <div class="form-group" id="change_fix_cost_group">
        <label class="col-sm-8 col-form-label"><b>Changes in Fixed Cost</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name ='tujuh' id="change_fix_cost" placeholder="Change Fix Cost">
        </div>
      </div>
      <div class="form-group" id="change_variable_per_unit_group">
        <label class="col-sm-8 col-form-label"><b>Changes in Variable per unit</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name ='delapan' id="change_variable_per_unit" placeholder="Changes in Variable per unit">
        </div>
      </div>
      <div class="form-group" id="change_in_sales_price_group">
        <label class="col-sm-8 col-form-label"><b>Changes in Sales Price</b></label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name ='sembilan' id="change_in_sales_price" placeholder="Changes in Sales Price">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-8 col-form-label"><b>Pilih Perhitungan</b></label>
        <div class="col-sm-12">
          <select class="custom-select" name="operator" id="operator">
            <option selected value="default">Pilih Simulasi</option>
            <option value="bep">Break Event Point</option>
            <option value="cma">Contribution Margin Approach</option>
            <option value="tp">Total Provit</option>
            <option value="cfc">Change in Fix Cost</option>
            <option value="cfpu">Changed in Variable Per Unit</option>
    				<option value="csp">Changed in Sales Price</option>
    				<option value="ms">Margin Safety</option>
          </select>
        </div>
      </div>
      <div class="form-group float-right">
        <div class="col-sm-12">
           <button class="btn btn-warning" onclick="reset()">Reset</button>
           <!-- <input type="submit" name = 'simpan' class="btn btn-primary" Value="Hitung"> -->

           <button type="submit" class="btn btn-primary">Hitung</button>
           <!-- <input type="submit" name = 'simpan' class="btn btn-primary" Value="Hitung"> -->

        </div>
      </div>
    <!-- </form> -->
  </div>
  <!-- Result -->
  <div class="col-md-6">
    <label><b>Result :  </b></label>
    <span id='hasil' ></span>
  </div>
  <!-- End Result -->
</div>

<!-- <script>
  function sumButton()
  {
    let satu = parseInt($("#satu").val());
    let dua = parseInt($("#dua").val());
    let bep = $("operator").val();

    if(bep == "bep"){
      $("#hasil").text(satu+dua);
    } else if (bep == "cma"){
      $("#hasil").text(satu-dua);
    }


  }
</script> -->
