<?php

	$data = array(
		'ret' => true,
		'errcode' => 0,
		'errmsg' => 'success',
		'ver' => 1,
		'data' => array(
			'page' => 1,
			'travelers' => array(
				0 => array(
					'nickName' => "andycall",
					'userImg' => "..."
				),
				1 => array(
					'nickName' => "boolean93",
					'userImg' => "..."
				),
				2 => array(
					'nickName' => "boolean93",
					'userImg' => "..."
				),
				3 => array(
					'nickName' => "boolean93",
					'userImg' => "..."
				)
			),
			'travelerCnt' => 4,
			'size' => 20
		)
	);

	echo json_encode($data);
?>