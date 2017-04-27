<script src="<?= getHome();?>/js/jquery-2.2.3.min.js"></script>
<script src="<?= getHome();?>/js/jquery.mask.min.js"></script>
<link href="<?= getHome();?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?= getHome();?>/css/font-awesome.css" rel="stylesheet">
<script>
    $(function(){
           $("#contato_telefone").on("change", function(){

                if ($(this).val().length == 13)
                {
                  $('#contato_telefone').mask('(00)0000-0000');
                  $('#contato_telefone').attr("data-mask" ,"(00)0000-0000");
                }else
                {
                  $('#contato_telefone').mask('(00)00000-0000');
                  $('#contato_telefone').attr("data-mask" ,"(00)00000-0000");
                }


           });
           $('#contato_celular').mask('(00)00000-0000');
                  $('#contato_celular').attr("data-mask" ,"(00)00000-0000");

    });
</script>
      <div class="form-group">
        <label>Telefone</label>
           <div class="input-group">
             <input type="text" class="form-control" name="contato_telefone" id="contato_telefone" maxlength="14" placeholder="DDD+Telefone"    value="<?= $contato_meta_data['contato_telefone'][0]  ?>">
               <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
          </div>
      </div>
      <div class="form-group">
        <label>Celular</label>
           <div class="input-group">
             <input type="text" class="form-control" name="contato_celular" id="contato_celular" maxlength="14" placeholder="DDD+Celular"    value="<?= $contato_meta_data['contato_celular'][0]  ?>">
               <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
          </div>
      </div>
       <div class="form-group">
           <label>Endereço</label>
               <div class="input-group">
                    <input type="text" class="form-control" name="contato_endereco" id="contato_endereco"  value="<?= $contato_meta_data['contato_endereco'][0]  ?>">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
              </div>
      </div>
      <div class="form-group">
            <label>E-mail</label>
        <div class="input-group">
                <input type="text" class="form-control" name="contato_email" id="contato_email" value="<?= $contato_meta_data['contato_email'][0]  ?>">
                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
          </div>
      </div>



