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
            if(empty($value) && $value != '0' && strpos($key,'access') !== 0) {
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

	function check_forms($data) {
		if(!check_empty($data)) {
			return array('passed'=>false, "error"=> "empty ");
		}

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






	//preproces forms
	function preprocess_1($data) {
		if(!isset($data['student_worker']) || empty($data['student_worker'])) {
			$data['student_worker'] = 0;
		}

		if(!isset($data['ac'])) {
			$data['academic_career'] = 0;
        } else {
        	if(is_array($data['ac'])) {
        		$data['academic_career'] = convert_cbs($data['ac']);
        	} else {
        		$data['academic_career'] = 0;
        	}

        	unset($data['ac']);
        }

		$access_types = array();
       	for ($i=2; $i <= 6; $i++) {
       		if(isset($data['access_type'.$i]) && is_numeric($data['access_type'.$i])) {
	        	array_push($access_types, 6 - $i);
	        }
       	}
       	$data['pawprint'] = $_SESSION['pawprint'];
       	$data['access_type'] = convert_cbs($access_types);


       	return $data;
	}

	function preprocess($data) {
		$eu_info = array('username' => '','title' => '','organization' => '','pawprint' => '','empiid' => '','address' => '','phone_num' => '','request_status' => '','student_worker' => '','if_cur_staff' => '','ref_name' => '','ref_pos' => '','ref_pawprint' => '','ref_empiid' => '','ferpa_score' => '','ac' => '','access_type2' => '','access_type3' => '', 'access_type4' => '', 'access_type5' => '', 'access_type6' => '');
		foreach ($data as $key => $value) {
			if(in_array($key, array_keys($eu_info))) {
                $eu_info[$key] = $value;
                unset($data[$key]);
            }
		}
		$eu_info = preprocess_1($eu_info);


		unset($data['all']);

		foreach ($data as $key => $value) {
        	if(is_array($value)) {
        		$data[$key] = convert_cbs($data[$key]);
        	}
		}


		$data = array_merge($eu_info, $data);

		return $data;

	}

	function convert_cbs($cb_arr) {
		$result = 0;
		foreach ($cb_arr as $cb) {
			$result += pow(10, $cb);
		}
		return $result;
	}

	function convert_back_cbs($cb_val) {
		$cb_str = (string)$cb_val;
		$len = str_len($cb_arr);
		while($len <= 5) {
			$cb_str .= '0';
			$len++;
		}
		return str_split($cb_str);
	}

?>
