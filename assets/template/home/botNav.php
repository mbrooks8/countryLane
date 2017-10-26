</div>
<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l8 s12">
				<h5 class="white-text">Powered By Hestia Property Management</h5>
				<p>Links</p>
				<p></p>
				<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
			</div>
		</div>
		<!--Google translate Pages for accessibility-->
		<div id="google_translate_element"></div><script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
		}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Powered By Hestia Property Management
			<a class="grey-text text-lighten-4 right" href="../index">Hestia Home</a>
		</div>
	</div>
</footer>

</body>

<script src="../assets/js/hestia.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js" integrity="sha256-/IeNFU9g1Tnj9pOKq3jGgIU2/kiKS+t1Q7pwym7mpoA=" crossorigin="anonymous"></script>
<!--Tinymce is a TinyMCE is a platform independent web-based JavaScript HTML WYSIWYG
editor control released as open source under LGPL.-->
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'editor1' );
	CKEDITOR.replace( 'sendMessage' );
</script>

<script>
	/*initialize modals*/
	$( document ).ready(function() {
		initModal();
	});
	/*initialize collapsibles*/
	$(document).ready(function(){
		$('.collapsible').collapsible();
	});
</script>

</html>
