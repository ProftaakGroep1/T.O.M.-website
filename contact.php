<?php
$title = "Contact";
include "includes/header.php";
?>
<!-- </header> -->
<section class="title contactBanner">
	<div class="bannerContainer">
		<h1>
			<span>Contact</span>
		</h1>
		<h2>
			<span>We horen graag van u</span>
		</h2>
	</div>
</section>
<main>
	<section class="secties">
		<form>
			<div class="formE">
				<p>Naam:&nbsp;</p><input type="text" name="naam">
			</div>
			<div class="formE">
				<p>Uw e-mailadres:&nbsp;</p><input type="email" name="email">
			</div>
			<p>Uw bericht:</p>
			<textarea name="bericht"></textarea>
			<input type="submit" value="Verstuur">
		</form>
	</section>
</main>
<!-- <footer> -->
<?php include "includes/footer.html"; ?>