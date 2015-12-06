<body>
	<?php
		/*
			$form_info : array(
				"prepare_form" => array,
				"admission_access" => array,
				"financial_access" => array,
				"financial_aid_access" => array,
				"reserved_access" => array
			)
		 */
	/*	foreach ($form_info as $key => $value) {
			if(count($value) > 0) {
				echo "<h2>" . $key . "</h2>";
				foreach ($value as $k => $v) {
					echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
				}
			}
		}
		echo "<br>";*/
		print_r(var_dump($result));
foreach($result as $result_v){
    
    foreach ($result_v as $key => $value) {
                if(count($value) > 0) {
                    echo "<h2>" . $key . "</h2>";
                    foreach ($value as $k => $v) {
                        echo "<div><span>" . $k . "</span>	-  <span>" . $v . "</span></div>";
                    }
                }
            }
    
}
		echo "<br>";
	?>
	<div><br><a href="<?php echo base_url(); ?>index.php/users/home">Back to home</a></div>
</body>
