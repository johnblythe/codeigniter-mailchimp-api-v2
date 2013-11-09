<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Super-simple, minimum abstraction MailChimp API v2 wrapper
 * 
 * @author Drew McLellan <drew.mclellan@gmail.com> modified by Ben Bowler <ben.bowler@vice.com>
 * @version 1.0
 */

/**
 * api_key       
 * api_endpoint            
 */

$config['api_key'] = ''; //required: your API here
$config['api_endpoint'] = ''; //optional: if you don't know it then we'll get it taken care of in the library file
