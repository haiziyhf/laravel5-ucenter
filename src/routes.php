<?php
	Route::any(Config::get('ucenter.url'), function(){
		return \Hihone\Laravel5Ucenter\UcenterApi::execute();
	});
?>
