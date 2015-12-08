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
                                    if((!empty($v)) && ($v !== "N/A") && ($k != "form_id") && ($k != "access_type")){
                                        $k = str_replace("_", " ", $k);
                                        $k = ucwords($k);
                                        $io = 1;
                                        switch ($k){
                                            //Academic Careers
                                            case ("Academic Career"):
                                                $k = "Academic Careers";
                                                $arr = str_split($v);
                                                $msg = "";
                                                $arrLen = strlen($v);
                                                for($i = 0; $i < (5-$arrLen); $i++){
                                                    array_unshift($arr, 0);
                                                }
                                                $o = 0;
                                                foreach ($arr as $val) {
                                                    if($o===0 && $val){
                                                        $msg .= "UGRAD, ";
                                                    }if($o===1 && $val){
                                                        $msg .= "GRAD, ";
                                                    }if($o===2 && $val){
                                                        $msg .= "MED, ";
                                                    }if($o===3 && $val){
                                                        $msg .= "VET MED, ";
                                                    }if($o===4 && $val){
                                                        $msg .= "LAW";
                                                    }
                                                    $o++;
                                                }
                                                $v = $msg;
                                                break;
                                            case ("If Cur Staff"):
                                                $k = "<h4>Security of another staff member</h4>Current Staff";
                                                if($v == 1){
                                                    $v = "Yes, current";
                                                }if($v == 2){
                                                    $v = "No, former";
                                                }
                                                break;
                                            //Test Scores
                                            case ("Act"):
                                            case ("Lelts"):
                                            case ("Ged"):
                                            case ("Sat"):
                                            case ("Lsat"):
                                            case ("Millers"):    
                                            case ("Gre"):
                                            case ("Mcat"):
                                            case ("Gmat"):
                                            case ("Ap"):
                                            case ("Pla-mu"):
                                            case ("Tofel"):    
                                            case ("Clep"):
                                            case ("Base"):
                                                $k = strtoupper($k) . ", ";
                                                $io = 0;
                                                echo"$k";
                                                break;
                                            //View only
                                            case ("Basic Inquiry"):
                                            case ("Student Group View"):
                                            case ("View Study List"):
                                            case ("Advisor Student Center"):    
                                            case ("Class Permission View"):
                                            case ("Class Roster"):
                                            case ("Fiscal Officer"):
                                            case ("Fa Cash"):
                                            case ("Fa Non Financial Aid Stuff"):    
                                            case ("General Inquiry"):
                                            case ("Report Manager"):
                                                if($v == 1){
                                                    $v = "View";
                                                }
                                                break;
                                            //Update only
                                            case ("Advisor Update"):
                                            case ("Department SOC Update"):
                                            case ("Class Permission"):
                                            case ("Self Service Advisor"):    
                                            case ("Academic Advising Profile"):
                                            case ("Student Groups"):
                                            case ("Accommodate"):
                                                if($v == 1){
                                                    $v = "Update";
                                                }
                                                break;
                                            //View and Update
                                            case ("Advanced Inquiry"):
                                            case ("3Cs"):    
                                            case ("Service Indicators"):
                                            case ("Registrar Enrollment"):
                                            case ("Block Enrollment"):
                                            case ("Immunization View"):
                                            case ("Transfer Credit Admission"):    
                                            case ("Relationships"):
                                            case ("Support Staff"):
                                            case ("Advance Standing Report"):    
                                            case ("Cash Group Post"):
                                                if($v == 10){
                                                    $v = "View";
                                                }if($v == 1){
                                                    $v = "Update";
                                                }if($v == 11){
                                                    $v = "View and Update";
                                                }
                                                break;
                                            default:
                                                break;
                                        }
                                        if($io){
                                            echo "<div><span>" . $k . "</span>: <span>" . $v . "</span></div>";
                                        }
                                    }
				}
			}
		}
		echo "<br>";
	?>
</body>
