<?php

/*
 * Recognising Techfaith devices from their user agents
 *
 */

require_once 'test_helper.php';

class TechfaithTest extends UnitTestCase {

  var $wurfl;


  function test_techfaith_moffett_ver1() {
    foreach(array(
'Techfaith Moffett/2.0 WAP2.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)'
    ) as $ua) {
        $this->checkUA($ua, 'techfaith_moffett_ver1');
      }
  }



  ############################################################

  function checkUA($agent, $expected) {
    $this->wurfl->getDeviceCapabilitiesFromAgent($agent);
    $actual =  $this->wurfl->getDeviceCapability('actual_root_device');
    if ($expected != $actual)
      echo "Expected: $expected, got: $actual\nUA: $agent\n";
    $this->assertEqual($expected, $actual);
  }

  function techfaithTest() {
    $this->UnitTestCase('techfaith Test');
  }

  function setUp() {
    $this->wurfl = new TeraWurfl();
  }

  function tearDown() {
  }
}

$test = new TechfaithTest();
$test->run(new TextReporter());

?>
