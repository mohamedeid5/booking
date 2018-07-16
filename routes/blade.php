<?php
	
	Blade::directive('adminauth', function() {

		$condtion = auth()->guard('admin')->check();

		return "<?php if($condtion) { ?>";
	});
	Blade::directive('unadminauth', function() {

		$condtion = auth()->guard('admin')->check();

		return "<?php if(!$condtion) { ?>";
	});
	/*
	Blade::directive('adminoruser', function() {

		$condtion = auth()->guard('admin')->check();
		$condtion2 = auth()->check();
		return "<?php if($condtion or $condtion2) { ?>";
	});
*/
	Blade::directive('elseadminauth', function() {
		return "<?php } else {  ?>";
	});

	Blade::directive('endadminauth', function() {
		return "<?php }  ?>";
	});