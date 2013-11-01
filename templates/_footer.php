	<footer>
		<div class="container clearfix">
			&copy; 2013 Matt West.
		</div>
	</footer>

  <?php
    if ($_SERVER['SERVER_NAME'] == "mattwest.dev") {
      echo "<script src='http://mattwest.dev:3000/socket.io/socket.io.js'></script>";
      echo "<script src='http://mattwest.dev:3001/browser-sync-client.min.js'></script>";
    }
  ?>

  <script src="/assets/js/build/global.min.js"></script>

	<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-27571908-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</body>
</html>