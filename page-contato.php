<?php
 
  //response generation function
 
  $response = "";
 
  //function to generate response
  function generate_response($type, $message){
   
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
   
  }
 
  //response messages
  $not_human       = "Confirme que você não é um robô.";
  $missing_content = "O campo de mensagem é obrigatório.";
  $email_invalid   = "Email Inválido.";
  $message_unsent  = "A messagem não foi enviada. Tente novamente.";
  $message_sent    = "Agradecemos o contato, sua mensagem foi enviada com sucesso.";
 
  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $assunto = $_POST['message_assunto'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
 
  //php mailer variables
  $to = get_option('admin_email');
  $subject = '[H|H _ Contato] '.$assunto. "\r\n";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
 
  if(!$human == 0){
    if($human != 2) generate_response("error", $not_human); //not human!
    else {
     
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = mail($to, $subject, $message, $headers);
          if($sent) generate_response("success", $message_sent); //message sent!
          else generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) generate_response("error", $missing_content);
 
?>
<?php get_header(); ?>
<div class="col-xs-8 col-xs-offset-2 max-h">
<section class="page-section">
          
      <div class="<?php echo $class;?> detail-content">
            
          <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'template-parts/content', 'page' ); ?>   

<style type="text/css">
  .error{
    padding: 5px 9px;
    border: 1px solid red;
    color: red;
    border-radius: 3px;
  }
 
  .success{
    padding: 5px 9px;
    border: 1px solid green;
    color: green;
    border-radius: 3px;
  }
 
  form span{
    color: red;
  }
</style>
 
<div id="respond">
  <?php echo $response; ?>
  <form action="<?php the_permalink(); ?>" method="post" id=contato>
    <p><label for="name">Nome: <span>*</span>
    <input alt="seu nome *" placeholder='seu nome' type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>" data-validation=required /></label></p>
    <p><label for="message_email">Email: <span>*</span>
    <input type="mail" alt="seu e-mail *" placeholder='seu e-mail' name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
    <p><label for="message_assunto">Assunto:
    <input type=text alt="assunto" placeholder='assunto' name=message_assunto data-validation=required /></label></p>
    <p><label for="message_text">Mensagem: <span>*</span>
    <textarea class=caixa type="text" rows=4 name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
    <input type="hidden" name="submitted" value="1">
    <p><input data-validation="recaptcha" data-validation-recaptcha-sitekey="[RECAPTCHA_SITEKEY]"></p>
    <p><input class=botao type=submit title="enviar" value=enviar /></p>
  </form>
</div>

              <?php endwhile; // End of the loop. ?> 


          </div> <!-- /.end of detail-content -->

  
</section><!-- /.end of section -->
</div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>-child/js/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'pt',
    form: '#respond, #contato',
    borderColorOnError : '#9e4136',
    addValidClassOnAll : true,
    modules : 'security',
    reCaptchaSiteKey: '6LegOygTAAAAAN1xm0d3trIyoZy9HLtsMlF6sZYM',
    reCaptchaTheme: 'light'
  });
</script>