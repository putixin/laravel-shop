<?php

return [
	'alipay' => [
		'app_id'         => '2016092200567609',
		'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0qvC/Jo+Mdbdzk5qI9/2cfuaGB4gnDreBKSbjpuPUSNEIbc23W7B1GsPHnTG9ppUyBo7U9YplvLVhacj3H1tPNvzLbBcfUMkFRSXwedWHZS2tPA7muArIdkT7f+PWn2GoRF3N3VKahS9dBo6i+08FzAHGbNmV81HdM6rtiUosIoWnhzk5jlbAJft6Dfz3mGiSx1x8Yr7YL9yOeh9NI9WvLLDrXvukx9fON8wuUzuLbAVwzwrFf3V5hR0sH+L9w118Tf8BeHOg89xs1cEu12Zy+eTtVokJXF+OT3WLoa1fSII84D3OBgR7QrJe/eQ1qJujPOYkWV8jbYIcY6VF1gjKwIDAQAB',
		'private_key'    => 'MIIEowIBAAKCAQEA01qLe93XmOKK2q6atl/PqnU+F9eDtUa89gJSEkfdXmNOpsd8x04rrsS3mdVqAGIZlYtwlnAd4biPiRRR37TKVNqhf+utG9P95kxRei8Jh3aV4o0ZKKV5+bJSME0OjX6wHJfy6aQpm7PnIwjjp9qxPYxQ6HnSIviEqJrJn6NGb9/QS/DJDyCrliOb8jwQKU9IarZB2yxUibVrrWUxNzvB9dh1vGQhUxLkTMR5G7I91ZuEkPmxbUk1aW6Andab/7aqrNGePHMdoyeCARvgfSl4QFWpY84qqMeovL6IOTWOYzr644+1tLbQEzhcfGrZGtzt4sssA9Y4wa9eRRsxANOWCQIDAQABAoIBAAded9CIypSVCXxYbCKBsq7hyZlxNTFj1wDI0e27PbelxL9B41LboeBFEZW2gCylPvkc1H8aR6BwG+kOoVAocImG2eyo3e9Dc+3MqWaWL0He25j7jG4DXv5avkza0vASA7frgFevFphMLHnnPHDEyjs4IjYI0U/Q1GdAhlkfizwpRFR3gWBFvjYToDIuI2gCRV9I9ruwVPAoLLbqM2nAUBlsqN2f14Mi1K89atFMFAw2OtxO4cCvPjEE1PXqWVZXNG/iL1GMuxxbly/ktpQGGxqIlFyEE12NxmS0pSbtxZ55/kzx5pLt4mDbB1oBmlQ/ZXGJ7pOuvze61KrSlB6ffJECgYEA6dbfurc+jqOdaAAAivByScdk5aTvwyxUFPNy/Pa6mfTT6wML39/1E0dvMSv8YXIau9zLm1Xi799nkaIv5BqGeHMCvTGUY9aOPxHGjy9nX8dsCoya0rM8HqtulcMeJ6/LfmMx0OlM2bOMQNf/QdOjSOaY5uB38Yt2+4qWrEblaYUCgYEA52ImskaBJgrapZJLBw3gwtxrA6GPEUEF0hEea9OjHp9Zp+7uJKi+KJ/RaMtsNxrC4GUctsxWJwlL1l0WRuL/tb65WIBjoyiAN3P+cAfiPEB7gHfr/ZaivIqkU06p4bABfjBZ6hRMIGp+fIxzK/cmohRalveGu+YcG7y7FgNbf7UCgYEAx4hUrEyEks5GGGI4FFaMDyyXieUtucrvjFkX+4bFP23MDrMwxL2jr+m6lajE2Jm2+iqzij7FQI3PIFPWrbt8lvb8lVfjGTYRdvvCBJgci3vtUysbSUMrv7fkyuINryuwZo5aCbupmfI9cW9eHltq71/lhMxxTKkGxClD3Ik6ZMkCgYBQQc9CTwpE88bbX17+12V6sZG89LD3PyKRtrZimEogOQ2UHmAj/xPWa3jrbIPgqTunMes/zKilaagQdsFfXSVtGPaZKA9nbIjssyMyIMnsNEGiUfZdQ362/y/4ZXSvf6lE5+iINPoi1E2DTgQ038latsylSL5HNo3RYSlTfV6jcQKBgHWKn7KJPWfKtMpokrhhjRyByJtmAXqTMbV3ESQnMUzoOnK8t7mZMEfSEGQbcQPTRBT07/mkb8WuKoG/o3tkbdqTkQpkpLVvDH+TOmAOiwV2KLRE7LfoQjP5haY8zOsO3gow5aE2JfTzXvvjfjJBGSqNXA6Jc6HVAIytBC8nmUQa',
		'log'            => [
			'file' => storage_path('logs/aplipay.log'),
		],
	],
	'wechat' => [
		'app_id'         => '',
		'mch_id'         => '',
		'key'            => '',
		'cert_client'    => '',
		'cert_key'       => '',
		'log'            => [
			'file' => storage_path('logs/wechat_pay.log'),
		],
	],
];