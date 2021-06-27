<section id="call-to-action">


  <div id="cta-content">
    <h2>Give your business the brand it deserves</h2>
    <h2>hi<span style="opacity:0.7;">[at]</span>polyfen.com</h2>
  </div>


  <div class="curve-border">
    <div class="curve">
    </div>
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
