<?php  if (count($errors) > 0) : ?>
  <div class="errors" style="margin-bottom: 30px;">
  	<?php foreach ($errors as $error) : ?>
  	  <div><p class="err" style="
  width: 92%; 
  margin: 0px auto;
  height:40px;
  margin-bottom: 15px;
  margin-top: 5px;
  padding: 2px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
"><?php echo $error ?></p></div>
  	<?php endforeach ?>
  </div>
<?php  endif ?>