<?php
function getdata($v1,$v2){
 	$csv = array_map('str_getcsv', file('sample-data.csv'));

 	usort($csv, function($a,$b){
 		$output= strcasecmp($a[0], $b[0]);
 		if ($output == 0) {
 			return 0;
 		}
 		if($output > 0){
 			return 1;
 		}
 		if ($output < 0) {
 			return -1;
 		}
 	});

	foreach ($csv as $key => $value) {
		if(substr($value[0],0,1)===$v1 || substr($value[0],0,1)===$v2){
			echo '<a href="'.$value[1].'" title="'.$value[0].'" target="_blank">
				  <img src="'.$value[2].'" alt="'.$value[0].'">
				  </a>';				
		}
				
	}
 }

?>
<html>
<head><title>Sample</title>
<link rel="stylesheet" href="http://www.blackpepper.co.nz/test-stylesheet/1463372307" /></head>

<body>

<!--
_
\`*-.
 )  _`-.
.  : `. .
: _   '  \
; *` _.   `*-._
`-.-'          `-.
  ;       `       `.
  :.       .        \
  . \  .   :   .-'   .
  '  `+.;  ;  '      :
  :  '  |    ;       ;-.
  ; '   : :`-:     _.`* ;
*' /  .*' ; .*`- +'  `*'
*-*   `*-*  `*-*'
-->

<header>
<a href="http://www.blackpepper.co.nz/"><img src="http://www.blackpepper.co.nz/images/logo1.png"></a></a>
                              </header>

<main>
<div class="set"><div class="pad"><h2>A - B</h2>
<?php
	getdata($v1='A',$v2='B');	
?>
</div></div>
<div class="set"><div class="pad"><h2>C - D</h2>
<?php
	getdata($v1='C',$v2='D');	
?>
</div></div>
<div class="set"><div class="pad"><h2>E - F</h2>
<?php
	getdata($v1='E',$v2='F');	
?>
</div></div>
<div class="set"><div class="pad"><h2>G - H</h2>
<?php
	getdata($v1='G',$v2='H');	
?>
</div></div>
<div class="set"><div class="pad"><h2>K - L</h2>
<?php
	getdata($v1='K',$v2='L');	
?>
</div></div>
<div class="set"><div class="pad"><h2>M - N</h2>
<?php
	getdata($v1='M',$v2='N');	
?>
</div></div>
<div class="set"><div class="pad"><h2>O - P</h2>
<?php
	getdata($v1='O',$v2='P');	
?>
</div></div>
<div class="set"><div class="pad"><h2>Q - R</h2>
<?php
	getdata($v1='Q',$v2='R');	
?>
</div></div>
<div class="set"><div class="pad"><h2>S - T</h2>
<?php
	getdata($v1='S',$v2='T');	
?>
</div></div>
</main>
</html>