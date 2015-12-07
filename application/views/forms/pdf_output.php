<body>
    <h2>myZou Security Request Form</h2>
    <h2>University of Missouri-Columbia</h2>
	<?php
               	foreach ($form_info as $key => $value) {
			if(count($value) > 0) {
                                echo"<hr>";
                                switch ($key) {
                                    case "prepare_form":
                                        $key = "General Information";
                                        break;
                                    case "admission_access":
                                        $key = "Admissions Access";
                                        break;
                                    case "financial_access":
                                        $key = "Financial Access";
                                        break;
                                    case "financial_aid_access":
                                        $key = "Financial Aid Access";
                                        break;
                                    case "reserved_access":
                                        $key = "Reserved Access";
                                        break;
                                    case "student_record_access":
                                        $key = "Student Records Access";
                                        break;
                                    default:
                                        break;
                                }
				echo "<h3>" . $key . "</h3>";
				foreach ($value as $k => $v) {
					echo "<div><span>" . $k . "</span>: <span>" . $v . "</span></div>";
				}
			}
		}
		echo "<br>";
	?>
</body>
