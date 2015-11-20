<?php
	//escapte input
	function escapedata($data) {
		foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }
        return $data;
	}

	//checking fields
	function check_empty($data) {
		foreach ($data as $key => $value) {
            if(empty($value) && $value != '0') {
                return false;
            }
        }

        return true;
	}

	function check_phone($phone_num) {
		return (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone_num) == 1);
	}

	function check_pass_same($pass1, $pass2) {
		return ($pass1 == $pass2);
	}

	function check_is_num($num) {
		return is_numeric($num);
	}

	function check_ferpa($ferpa) {
		return (is_numeric($ferpa) && $ferpa >=85  && $ferpa <=100);
	}


	//check users
	function check_login($dt) {
		if(!check_empty($dt)) {
			return array('passed'=>false, "error"=> "empty");
		}

		return array('passed'=>true, "error"=> "");
	}


	function check_register($dt) {
		if(!check_empty($dt)) {
			return array('passed'=>false, "error"=> "empty");
		}

		if(!check_phone($dt["phone_num"])) {
			return array('passed'=>false, "error"=> "phone_num");
		}

		if(!check_is_num($dt["empiid"])) {
			return array('passed'=>false, "error"=> "empiid");
		}

		if(!check_pass_same($dt["password"], $dt["password_retype"])) {
			return array('passed'=>false, "error"=>"password");
		}

		return array('passed'=>true, "error"=> "");

	}


	//check forms
	function check_form($form_num, $data) {
		if(!check_empty($data)) {
			return array('passed'=>false, "error"=> "empty ");
		}
		switch ($form_num) {
			case '1':
				return check_form_1($data);
				break;

			case '2':
				return check_form_2($data);
				break;

			case '3':
				return check_form_3($data);
				break;

			case '4':
				return check_form_4($data);
				break;

			case '5':
				return check_form_5($data);
				break;

			case '6':
				return check_form_6($data);
				break;

			default:
				return false;
				break;
		}
	}

	function check_form_1($data) {


		if(!check_phone($data["phone_num"])) {
			return array('passed'=>false, "error"=> "phone_num");
		}

		if(!check_is_num($data["empiid"])) {
			return array('passed'=>false, "error"=> "empiid");
		}

		if(!check_ferpa($data["ferpa_score"])) {
			return array('passed'=>false, "error"=> "ferpa");
		}

		return array('passed'=>true, "error"=>'');
	}

	function check_form_2($data) {

		return array('passed'=>true, "error"=>'');
	}

	function check_form_3($data) {
		return array('passed'=>true, "error"=>'');
	}

	function check_form_4($data) {
		return array('passed'=>true, "error"=>'');
	}

	function check_form_5($data) {
		return array('passed'=>true, "error"=>'');
	}

	function check_form_6($data) {
		return array('passed'=>true, "error"=>'');
	}







	//preproces forms
	function preprocess_1($data) {
		if(!isset($data["student_worker"])) {
            $data["student_worker"] = 0;
        }

        if(!isset($data['ac'])) {
        	$data['academic_career'] = 0;
        } else {
        	$ac = 0;
        	foreach($data['ac'] as $idx => $career) {
                $ac += pow(10, $career);
            }
        	unset($data['ac']);
        	$data["academic_career"] = $ac;
        }

        $data['pawprint'] = $_SESSION['pawprint'];
		return $data;
	}

	function preprocess_2($data) {
		return $data;
	}

	function preprocess_3($data) {
		return $data;
	}

	function preprocess_4($data) {
		return $data;
	}

	function preprocess_5($data) {
		return $data;
	}

	function preprocess_6($data) {
		return $data;
	}


	function preprocess($form_num, $data) {
		switch ($form_num) {
			case '1':
				return preprocess_1($data);
				break;

			case '2':
				return preprocess_2($data);
				break;

			case '3':
				return preprocess_3($data);
				break;

			case '4':
				return preprocess_4($data);
				break;

			case '5':
				return preprocess_5($data);
				break;

			case '6':
				return preprocess_6($data);
				break;

			default:
				return false;
				break;
		}
	}

?>
