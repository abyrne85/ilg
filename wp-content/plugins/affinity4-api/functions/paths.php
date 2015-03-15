<?php

function getBasePath()
{
	$affinity4_api_path = AFFINITY4API_PATH;
	return $affinity4_api_path;
}

function getDirectory( $path = '' )
{
	$path = getBasePath() . $path;
	return $path;
}