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
		$xml = get($url, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/600.5.17 (KHTML, like Gecko) Version/8.0.5 Safari/600.5.17');
	}

	if ($xml != '')
	{
		//echo $xml;
				
		// process
		$jsonld = rdftojsonld($xml);

		echo json_format(json_encode($jsonld));
		echo "\n";
		
	}
}
				
?>