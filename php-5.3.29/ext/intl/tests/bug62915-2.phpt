--TEST--
Bug #62915: cloning of several classes is defective
--SKIPIF--
<?php
if (!extension_loaded('intl'))
	    die('skip intl extension not enabled');
--FILE--
<?php
class A extends IntlDateFormatter {
		static $ARGS = array("en_US" ,IntlDateFormatter::FULL, IntlDateFormatter::FULL,
		    'America/Los_Angeles', IntlDateFormatter::GREGORIAN);
}
class B extends NumberFormatter {
		static $ARGS = array('de_DE', NumberFormatter::DECIMAL);
}
class C extends MessageFormatter {
		static $ARGS = array("en_US", "foo");
}

foreach (range('A', 'C') as $subclass) {
		$rc = new ReflectionClass($subclass);
			$obj = $rc->newInstanceArgs($subclass::$ARGS);
				$clone = clone $obj;
					var_dump(get_class($clone));
}
--EXPECT--
string(1) "A"
string(1) "B"
string(1) "C"
