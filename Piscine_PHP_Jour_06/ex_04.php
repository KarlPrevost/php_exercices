<?php
function traverse_xml($object, $expected_name) {
    foreach ($object as $node_name => $node_value) {
        if ($node_name === $expected_name)
        echo $node_value . "\n";
        traverse_xml($node_value, $expected_name);
        }
}

function display_xml_nodes($xmlstr, $node) {
    $xml = simplexml_load_string($xmlstr);
    traverse_xml($xml, $node);
    
if(!$xml)
return false;
return true;
}
?>