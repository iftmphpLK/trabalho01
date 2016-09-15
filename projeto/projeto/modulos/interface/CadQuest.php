<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
<link href="index.css" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>


<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Cadastro de Questões</title>
</head>
	
<body >
<div class="row">
  

    <h1>	Cadastro de Questões </h1>
  
  <div class="clear"></div> 
 
 <form class="col s12">
    
    <div class="input-field col s8">
          <input id="quest" type="text" class="validate">
          <label for="quest">Questão: </label>
    </div>
    <br>
    
    <div class="input-field col s8">
          <input id="alt1" type="text" class="validate">
          <label for="alt1">Anternativa a): </label>
    </div>
    
    <div class="input-field col s8">
          <input id="alt2" type="text" class="validate">
          <label for="alt2">Anternativa b): </label>
    </div>
    
    <div class="input-field col s8">
          <input id="alt3" type="text" class="validate">
          <label for="alt3">Anternativa c): </label>
    </div>
    
    <div class="input-field col s8">
          <input id="alt4" type="text" class="validate">
          <label for="alt4">Anternativa d): </label>
    </div>
    
    <div class="clear">	</div>
    <div class="input-field col s5">
    	<label>Resposta</label>
        <br><br>
    	<select class="browser-default" id="resp">
    		<option value="" disabled selected>Escolha a opção da resposta correta</option>
    		<option value="1">a)</option>
    		<option value="2">b)</option>
    		<option value="3">c)</option>
            <option value="3">d)</option>
  		</select>
   </div>
   
   <div class="input-field col s5">
    	<label>Disciplina</label>
        <br><br>
    	<select class="browser-default" id="resp">
    		<option value="" disabled selected>Escolha a Disciplina</option>
    		
  		</select>
   </div>
   <div class="clear">	</div>
   <br><br>
   
   <div class="midaux col s12 m4 l2">
        	<button class="btn waves-effect waves-light " type="submit" name="action">Enviar</button>
            <div class="clear">	</div>
            <br>
            <a href="menu.php" > <button class="btn waves-effect waves-light " type="button" name="Voltar">Voltar</button></a>
   </div>  
    
    
    
 </form>
 <br><br><br>

  <div class="clear">	</div>
  <br><br><br><br>
  <div class="bot"></div>

</div>   

      
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="materialize.js"></script>
</body>
</html>
