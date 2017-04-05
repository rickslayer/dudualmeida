 <script src="<?= getHome();?>/js/jquery-2.2.3.min.js"></script>
<script src="<?= getHome();?>/js/jquery.mask.min.js"></script>
<link href="<?= getHome();?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?= getHome();?>/css/font-awesome.css" rel="stylesheet">
<script>
    $(function(){
           $('#dataAgenda_id').mask('00/00/0000');
          $('#horarioAgenda_id').mask('00:00');

    });
</script>
 
      <div class="form-group">
        <label>Data</label>
        <div class="input-group">
        <input type="text" class="form-control" name="dataAgenda_id" id="dataAgenda_id" placeholder="Data" maxlength="10" value="<?= $agenda_meta_data['dataAgenda_id'][0]  ?>">
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
       <div class="form-group">
        <label>Endereço</label>
        <div class="input-group">
          <input type="text" class="form-control" name="enderecoAgenda_id" id="enderecoAgenda_id" placeholder="Endereço" value="<?= $agenda_meta_data['enderecoAgenda_id'][0]  ?>">
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label>Horário</label>
        <div class="input-group">
          <input type="text" class="form-control" name="horarioAgenda_id" id="horarioAgenda_id" data-mask="00:00" placeholder="Horário" value="<?= $agenda_meta_data['horarioAgenda_id'][0]  ?>">
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>



