<?
function getGenreList(){
	global $db; $arr = [];
   $result = '';
	 $tmpl = '<option value="{name}">{name}</option>';
   $sql = "SELECT `name` from `genres` ORDER BY `rating` ASC";
	$query = $db->query($sql);
	while($row = $query->fetch()){
		$arr[] = $row['name'];
	}
	//sort($arr);
	foreach($arr as $k => $v){
		$result .= str_replace('{name}', $v, $tmpl);
	}
	return $result;
}




?>
