<script>
				$(document).ready(function(e) {
				    var refresher = setInterval("update_content();",3000);
				})

				function update_content(){
				    $.ajax({
				      type: "GET",
				      url: "http://localhost/test/joomlaVegas/cv999/ajax.php",
				      data: '',
				      cache: false,		      
				      success: function(data) {
				      		$("#playerBalance").html(data);
				      	}
				    });
				}
		</script>