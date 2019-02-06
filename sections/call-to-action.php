<section id="call-to-action">


  <div id="cta-content">
    <h2>Give your business the brand it deserves</h2>
    <a class="button primary-button" onclick="document.getElementById('contact-form').className='col c-block';document.getElementById('call-to-action').className='active-call-to-action';document.getElementById('cta-content').className='col d-none';document.getElementById('name-input').focus(); return false;">Contact us</a>
  </div>

  <div class="d-none" id="contact-form">
    <h2>Contact us</h2>
    <form id="ajax-contact" method="post" onsubmit="return send_contact_message(this);" action="app/contact-form/mailer.php">
      <input type="text" name="name" placeholder="Your name" id="name-input" required>
      <input type="email" name="email" id="email" placeholder="Your email" required>
      <textarea name="message" id="message" placeholder="Your message..." required></textarea>
      <button type="submit" class="g-recaptcha" data-sitekey="6Lfak4wUAAAAAHmoomoduv7fgbdq8WQBtilvpzJv" data-callback='onSubmit' id="send">Send </button>
     
    </form>
    <button id="go-back" onclick="document.getElementById('cta-content').className='col c-block';document.getElementById('contact-form').className='col d-none';document.getElementById('call-to-action').className='';">
      <i class="fa fa-chevron-left"></i> Back
    </button>
  </div>

  

  <div class="curve">
  </div>

  <div class="background">
    <div id="pearl-10" class="pearl pearl-10-INACTIVE rotate">
    </div>
    <div id="pearl-09" class="pearl pearl-09-INACTIVE rotate">
    </div>
    <div id="pearl-08" class="pearl pearl-08-INACTIVE rotate-slower">
    </div>
    <div id="pearl-07" class="pearl pearl-07-INACTIVE rotate">
    </div>
  </div>

</section>
<script>

function send_contact_message(formobj)
{

	    var form = $(formobj);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
		   beforeSend: function() { 
			   
			  
			   document.getElementById('send').innerHTML="<i class='fa fa-spinner fa-pulse'></i>";
			 
			   document.getElementById('send').className="spinner";
			   },
           success: function(data)
           {
                // show response from the php script.

$("#contact-form").html(data);


			   
           }
         });

	return false;

}

</script>
