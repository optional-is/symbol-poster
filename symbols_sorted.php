<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>

@font-face {
    font-family: t5;
    src:url("SFSymbolsFallback.ttf");
}

body { font-size: 10px; margin: 0 auto; text-align: center; }
td { font-size: 8px; text-align: center; padding: 0; margin: 0; }
tr { padding: 0; margin: 0;  }
.name { font-size: 7.25px; font-family: t5; height: 20px; vertical-align: top; }
.codepoint { font-size: 6px; font-family: t5; color: #666;}
table { float: left; width: 79px; margin: 0; padding: 0; border-spacing: 0px;
    border-collapse: separate; overflow: hidden; min-height: 71px;}
br { clear: both; }
.icon {font-family: t5; font-size: 40px; line-height: 70px;}
.small { font-size: 7px; }
.tiny { font-size: 6px; }
</style>
</head>
<body>
	<?php 

    include('common.php');

    // loop through just the named symbols
    // This can be sorted any way needed.
	foreach($dec_order as $glyph_decimal){
        // get the decimal unicode value
	    $name = $dec_to_name[$glyph_decimal];
        // convert it to hex
	    $hex = dechex($glyph_decimal);

        // Output an individual table representing metadata for each symbol
        // Think Periodic table 
        // Add some invisible spaces to help line wraps
	    echo '<table>
	    	<tr>
	    		<td class="icon">&#x'.$hex.';</td>
	    	</tr>
	    	<tr>
	    		<td class="name ';
                if ($name=='arrow.counterclockwise.circle.fill' ||
                    $name=='arrow.counterclockwise.icloud' ||
                    $name=='arrow.counterclockwise.icloud.fill' ||
                    $name=='rectangle.and.arrow.up.right.and.arrow.down.left') 
                {
                    echo 'small';
                }


                if ($name=='rectangle.and.arrow.up.right.and.arrow.down.left.slash'){
                    echo 'tiny';
                }

        echo '">'.str_replace('.','.&#x200b;',$name).'</td>
	    	</tr>
	    </table>';
	} ?>
</body>
</html>