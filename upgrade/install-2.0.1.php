<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_2_0_1($object)
{
		$SmartBlogRelatedPosts = new SmartBlogRelatedPosts();
		$SmartBlogRelatedPosts->registerHook('actionsbtogglepost');
		$SmartBlogRelatedPosts->registerHook('actionsbupdatepost');
		$SmartBlogRelatedPosts->registerHook('actionsbnewpost');
		$SmartBlogRelatedPosts->registerHook('actionsbdeletepost');
		return true;
}
