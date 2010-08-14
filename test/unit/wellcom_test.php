<?php

/*
 * Recognising Wellcom devices from their user agents
 *
 */

require_once 'test_helper.php';

class WellcomTest extends TeraWurflTestCase {

  var $wurfl;


  function test_wellcom_a88_ver1() {
    foreach(array(
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; WOWMobile G1)',
'Mozilla/5.0 (Linux; U; Android 1.6; en-US; WellcoM-A88)',
'Mozilla/5.0 (Linux; U; Android 1.6; th-TH; WellcoM-A88)'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_a88_ver1');
      }
  }



  function test_wellcom_w189_ver1() {
    foreach(array(
'WELLCOM-W189_WAP_Browser'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w189_ver1');
      }
  }



  function test_wellcom_w3350_ver1() {
    foreach(array(
'W3350 WAP Browser'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w3350_ver1');
      }
  }



  function test_wellcom_w398_ver1() {
    foreach(array(
'WELLCOM_W398'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w398_ver1');
      }
  }



  function test_wellcom_w920_ver1() {
    foreach(array(
'WELLCOM/W3313/Screen-176*220',
'WELLCOM/W3313/Screen-176*220,',
'WELLCOM/W389/Screen-176*220',
'WELLCOM/W920/MIDP2.0/CLDC1.1/Screen-240x320'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w920_ver1');
      }
  }



  function test_wellcom_w9229_ver1() {
    foreach(array(
'W9229ObigolnternetBrowser/QO3C Profile/MIDP-2.0 Configuration/CLDC-1.1',
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w9229_ver1');
      }
  }

  function test_wellcom_w929_ver1() {
    foreach(array(
'WellcoM W929 WAP Browser',
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w929_ver1');
      }
  }

  function test_wellcom_w3329_ver1() {
    foreach(array(
'WellcoM/W920+/Screen-240X320'
    ) as $ua) {
        $this->checkUA($ua, 'wellcom_w3329_ver1');
      }
  }



  ############################################################


  function wellcomTest() {
    $this->UnitTestCase('wellcom Test');
  }


}

$test = new WellcomTest();
$test->run(new TextReporter());

?>
