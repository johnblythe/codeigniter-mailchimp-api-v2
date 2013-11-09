Codeigniter MailChimp API v2 Wrapper
====================================

Build off the great wrapper by Drew McLellan <drew.mclellan@gmail.com> - Super-simple, minimum abstraction MailChimp API v2 wrapper, in PHP.

Requires curl.

Examples
--------

List lists (lists/list method)

	<?php
	$this->load->library('mailchimp_library');
	$lists = $this->mailchimp_library->call('lists/list');
	var_dump($lists):

Subscribe someone to a list

	<?php
	$this->load->library('mailchimp_library');
	$result = $this->mailchimp_library->call('lists/subscribe', array(
					'id'                => 'b1234346',   // list id
					'email'             => array('email'=>'davy@example.com'),
					'merge_vars'        => array('FNAME'=>'Davy', 'LNAME'=>'Jones'),
					'double_optin'      => false,
					'update_existing'   => true,
					'replace_interests' => false,
					'send_welcome'      => false,
				));
	print_r($result);