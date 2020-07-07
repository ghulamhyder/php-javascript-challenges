<!DOCTYPE html>
<html>
<head>
	<title>dna pair</title>
</head>
<body>
	<?php
		class Myclass{
			protected $str;
			protected $obj;
			public function dna_pair($str){
				$this->str=$str;
				$arr=str_split($this->str);
				//$arr=explode(', ', $str);
				$this->obj=array('T'=>'C','C'=>'S','S'=>'T');
				return array_map(function($item){
					return [$item,$this->obj[$item]];}, $arr);

			}
		}
		$obj=new Myclass;
		print_r($obj->dna_pair('TCS'));
	?>
	<script type="text/javascript">
		function dna_pair(str){
			var arr=str.split('');
			var obj={'T':'C','C':'S','S':'T'};
			return arr.map(function(item){
				return [item,obj[item]];
			});
		}
		console.log(dna_pair('TCS'));
	</script>
</body>
</html>