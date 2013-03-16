<?php include('includes/config.php'); ?> 
<?php include('includes/header.php'); ?> 
<body>
 <div data-role="page">
   <header data-role="header" class="tuts">
     <h1>
       <img src="img/TLogo.png" alt="Tuts+" />
     </h1>
   </header>
   <!-- /header -->

   <div data-role="content">
     <ul data-role="listview" data-theme="c" data-dividertheme="d" data-counttheme="e">
<?PHP
foreach($siteList as $sName => $sURL) {
	echo '
	<li>
	 <a href="site.php?siteName='.$sName.'"> '.ucWords($sName).' </a>
   </li>
	';
}
?>
     </ul>
   </div>

   <footer data-role="footer" class="tuts">
      <h4> RSS reader </h4>
   </footer>

 </div>
 <!-- /page -->
</body>
</html>

