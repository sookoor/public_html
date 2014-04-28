<?php
$thisPage="contact";
include("phpincludes/header.php");
?>
<div id="primarycontainer">
<div id="primarycontent">

<div class="post">
<h3>Email</h3>
<script type="text/javascript">
email = writemail('sookoor', 'cs.virginia', 'edu', 'sookoor@cs.virginia.edu');
document.write(email);
</script>
</div> 

<div class="divider2"></div>

<div class="post">
<h3>Telephone</h3>
<div class="contentarea">
214-709-6785
</div>     
</div> 

<?php virtual("inc/footer.shtml") ?>
