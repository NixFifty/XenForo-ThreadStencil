<?php

class NixFifty_ThreadStencil_Install
{
	public static function install($installedAddon)
	{
		if (!$installedAddon)
		{
			self::addColumn('xf_forum', 'thread_stencil', 'mediumtext NOT NULL');
		}
	}

	public static function uninstall()
	{
		self::dropColumn('xf_forum', 'thread_stencil');
	}

	public static function addColumn($table, $column, $definition)
	{
		$db = XenForo_Application::get('db');
		if (!$db->fetchRow('SHOW COLUMNS FROM `'.$table.'` WHERE Field = ?', $column))
		{
			$db->query('ALTER TABLE `'.$table.'` ADD COLUMN `'.$column.'` '.$definition);
			return true;
		}
		return false;
	}

	public static function dropColumn($table, $column)
	{
		$db = XenForo_Application::get('db');
		if ($db->fetchRow('SHOW COLUMNS FROM `'.$table.'` WHERE Field = ?', $column))
		{
			$db->query('ALTER TABLE `'.$table.'` drop COLUMN `'.$column.'` ');
			return true;
		}
		return false;
	}
}