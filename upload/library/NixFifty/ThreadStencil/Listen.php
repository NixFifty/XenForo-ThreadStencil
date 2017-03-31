<?php

class NixFifty_ThreadStencil_Listen
{
	public static function loadClass($class, array &$extend)
	{
		$extend[] = 'NixFifty_ThreadStencil_' . $class;
	}
}
