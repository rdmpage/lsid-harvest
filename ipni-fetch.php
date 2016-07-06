<?php

require_once(dirname(__FILE__) . '/lsid/lsid.php');
require_once(dirname(__FILE__) . '/utilities/lib.php');
require_once(dirname(__FILE__) . '/utilities/rdf.php');


// IPNI name and name it replaces
// As an aside, do a BLAST on KR704077 for tree for this taxon
$lsids = array(
'urn:lsid:ipni.org:names:77117371-1',
'urn:lsid:ipni.org:names:382698-1'
);

foreach ($lsids as $lsid)
{
	if (0)
	{
		// LSID
		$xml = ResolveLSID($lsid);
	}
	else
	{
		// URL
		$url = 'http://ipni.org/' . $lsid;
		$xml = get($url);
	}

	if ($xml != '')
	{
		//echo $xml;
				
		// process
		$jsonld = rdftojsonld($xml);

		echo json_format(json_encode($jsonld));
		
	}
}
				
?>