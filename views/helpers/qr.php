<?php
/**
 * QR code Helper class file.
 *
 * PHP versions 4 and 5
 *
 * @link          https://github.com/yosukehiyoshi/cake_qr
 * @package       cake_qr
 * @subpackage    view.helpers
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::import(
	null,
	'CakeQr.BarcodeQR',
	array(
		'search'    => App::pluginPath('CakeQr'). 'vendors/BarcodeQR',
		'file'      => 'BarcodeQR.php'
	)
);

class QrHelper extends AppHelper {

/**
 * Bookmark code
 *
 * @param string $title
 * @param string $url
 */
	public function bookmark ($title=null, $url=null) {
		BarcodeQR::bookmark($title, $url);
	}

/**
 * MECARD code
 *
 * @param string $name
 * @param string $address
 * @param string $phone
 * @param string $email
 */
	public function contact ($name=null, $address=null, $phone=null, $email=null) {
		BarcodeQR::contact($name, $address, $phone, $email);
	}

/**
 * Create code with GIF, JPG, etc.
 *
 * @param string $type
 * @param string $size
 * @param string $content
 */
	public function content ($type=null, $size=null, $content=null) {
		BarcodeQR::content($type, $size, $content);
	}

/**
 * Generate QR code image
 *
 * @param int $size
 * @param string $filename
 * @return bool
 */
	public function draw ($size=150, $filename=null) {
		return BarcodeQR::draw($size, $filename);
	}

/**
 * Email address code
 *
 * @param string $email
 * @param string $subject
 * @param string $message
 */
	public function email ($email=null, $subject=null, $message=null) {
		BarcodeQR::email($email, $subject, $message);
	}

/**
 * Geo location code
 *
 * @param string $lat
 * @param string $lon
 * @param string $height
 */
	public function geo ($lat=null, $lon=null, $height=null) {
		BarcodeQR::geo($lat, $lon, $height);
	}

/**
 * Telephone number code
 *
 * @param string $phone
 */
	public function phone ($phone=null) {
		BarcodeQR::phone($phone);
	}

/**
 * SMS code
 *
 * @param string $phone
 * @param string $text
 */
	public function sms ($phone=null, $text=null) {
		BarcodeQR::sms($phone, $text);
	}

/**
 * Text code
 *
 * @param string $text
 */
	public function text ($text=null) {
		BarcodeQR::text($text);
	}

/**
 * URL code
 *
 * @param string $url
 */
	public function url ($url=null) {
		BarcodeQR::url($url);
	}

/**
 * Wifi code
 *
 * @param string $type
 * @param string $ssid
 * @param string $password
 */
	public function wifi ($type=null, $ssid=null, $password=null) {
		BarcodeQR::wifi($type, $ssid, $password);
	}

}
