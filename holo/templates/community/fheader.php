<body id="faq" class="plain-template">
<script src="./web-gallery/static/js/faq.js" type="text/javascript"></script>
<div id="faq" class="clearfix">
<div id="faq-header" class="clearfix"><img src="./web-gallery/v2/images/faq/faq_header.png" /><form method="post" action="./help.php" class="search-box"><input type="text" id="faq-search" name="query" class="search-box-query search-box-onfocus" size="50" value="Search..."/><input type="submit" value="" title="Search" class="search" /></form></div>
<div id="faq-container" class="clearfix">

<div id="faq-category-list">
<ul class="faq">
<?php
$sql = mysql_query("SELECT * FROM cms_faq WHERE type = 'cat' ORDER BY id ASC") or die(mysql_error());
while($row = mysql_fetch_assoc($sql)){
echo "<li><a href=\"./help.php?id=".$row['id']."\" name=\"\"><span class=\"faq-link\">".$row['title']."</span></a></li>\n";
}
?>
</ul>
</div>
