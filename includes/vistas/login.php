<?php render('_header',array('title'=>$title))?>
<?php echo $mensaje?>
<form action="#" method="post" >
    <label for="nick">Nick  </label>
    <input name="nick" id="nick" placeholder="" value="" type="text" required> 
    <br/>
    <label for="clave">Clave</label>
    <input name="clave" id="" placeholder="" value="" type="password" required/>
    <input name="usuarios" id="usuarios" placeholder="" value="<?php echo $redir?>" type="hidden" />  
    <br/>
    <input data-theme="a" data-icon="forward" data-iconpos="right" value="Entrar" data-mini="true" type="submit" name="login"/>
</form>
<?php render('_footer')?>