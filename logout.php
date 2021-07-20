<?php
	session_start();
	// hapus session yang sudah diset
	unset($_SESSION['id_user']);
	unset($_SESSION['username']);

	session_destroy();
	echo "<script>
			alert('Anda telah keluar dari halaman administrator!')
			document.location='index.php';
	 	  </script>";


?>