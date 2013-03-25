<?php

namespace system\libs;

// class Bootstrap extends Request{
class Bootstrap{
 	//////////////////////////////////////////////////////////////////////////
 	//////////////////////////////////////////////////////////////////////////
	function __construct()
	{
		$s = new Request;
		$s -> set_con(URI,1);
		$s -> set_met(URI,2);
		$s -> set_arg(URI,3);
		Dispatcher::passRequest($s->con,$s->met,$s->arg);
		(substr(URI, -strlen(FAKE_EXT)) == FAKE_EXT)?:static::alamat_palsu($s->con,$s->met,$s->arg);
 	}
 	//////////////////////////////////////////////////////////////////////////
 	/**
	*   lompat ke fake URL / alamat palsu, jika ada permintaan yg aneh-aneh...
	*   misalnya usaha untuk hacking... atau mencari celah security....
 	*/
 	//////////////////////////////////////////////////////////////////////////
 	static function alamat_palsu($c,$m,$a = array()){ 
		if(count($a) > 0){
			$lokasi = $c.DS.$m.DS.implode(DS,$a);
		}
		else if($m != DEFAULT_METHOD){
			$lokasi = $c.DS.$m;
		}
 		else{
			$lokasi = $c;
 		}

		(parse_url(URI, 6)) ?: die ('<meta http-equiv=\'refresh\' content=\'0;URL='.HOME.DS.$lokasi.FAKE_EXT.'\'>');
 	}

 	//////////////////////////////////////////////////////////////////////////
}
?>


