<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * rekam_medis_Nama_Pasien_option_list Model Action
     * @return array
     */
	function rekam_medis_Nama_Pasien_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT Nama_Pasien AS value,Nama_Pasien AS label FROM pasien ORDER BY Nama_Pasien";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * rekam_medis_Dokter_option_list Model Action
     * @return array
     */
	function rekam_medis_Dokter_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT Nama AS value,Nama AS label FROM dokter ORDER BY Nama";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * rekam_medis_Obat_option_list Model Action
     * @return array
     */
	function rekam_medis_Obat_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT Nama_Obat AS value,Nama_Obat AS label FROM obat";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * rekam_medis_Ruangan_option_list Model Action
     * @return array
     */
	function rekam_medis_Ruangan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT Nama_Ruangan AS value,Nama_Ruangan AS label FROM ruangan";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_Jabatan_option_list Model Action
     * @return array
     */
	function user_Jabatan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT role_name AS value,role_name AS label FROM roles";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_Username_value_exist Model Action
     * @return array
     */
	function user_Username_value_exist($val){
		$db = $this->GetModel();
		$db->where("Username", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_email_value_exist Model Action
     * @return array
     */
	function user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_user_role_id_option_list Model Action
     * @return array
     */
	function user_user_role_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT role_id AS value, role_name AS label FROM roles";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_user Model Action
     * @return Value
     */
	function getcount_user(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM user";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_pasien Model Action
     * @return Value
     */
	function getcount_pasien(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM pasien";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_dokter Model Action
     * @return Value
     */
	function getcount_dokter(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM dokter";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_obat Model Action
     * @return Value
     */
	function getcount_obat(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM obat";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_rekammedis Model Action
     * @return Value
     */
	function getcount_rekammedis(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM rekam_medis";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
