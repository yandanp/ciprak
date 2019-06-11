<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Fungsi untuk menampilkan data dalam bentuk combobox
function combobox($name, $table, $field, $primary_key, $selected){
	$ci = get_instance();
	$cmb = "<select name='$name' class='form-control'>";
	$data = $ci->db->get($table)->result();
	$cmb .="<option value=''>-- PILIH --</option>";
	foreach($data as $d){		
		$cmb .="<option value='".$d->$primary_key."'";
		$cmb .= $selected==$d->$primary_key?"selected='selected'":'';
		$cmb .=">". strtoupper($d->$field)."</option>";
	}
	$cmb .="</select>";
	return $cmb;
}

// Fungsi untuk melakukan input data	
function inputtext($name, $table, $field, $primary_key, $selected){
	$ci = get_instance();
	$data = $ci->db->get($table)->result();
	foreach($data as $t){
		if($selected == $t->$primary_key){
		$txt = $t->$field;
		}
	}
	return $txt;
}