<?php
	$viewInfo = $_GET['viewInfo'];
	if ($viewInfo == '1') {
		phpinfo();
	} else {
		?>
		<html>
			<head>
				<title>AiDe 私塾</title>
					<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
			</head>
			<body>
				<h2>Hello . World .</h2>
					<p>刚接触编程的时候，写出Hello world真是觉得自己很厉害</p>
					<p>进入<a href = '<?php 
											$pattern = "/:(\d+)/";
											$subject = "http://".str_replace("localhost", "127.0.0.1", $_SERVER["HTTP_HOST"]);
											if (preg_match($pattern, $subject) > 0) {
												$subject = preg_replace($pattern, ":9000", $subject);
											} else {
												$subject.= ":9000";
											}
											echo $subject;
										?>'>Web服务器管理(英文)  </a>: <b>-需登陆-</b>  -账户是默认的-  <b>密码:</b>*******  ƪ(‾ε‾“)ʃ不能丢了yooo</p>
					<p>这里只是一个中转站 不必在意这里多么简陋</p>
					<p>谢谢你能光顾这里 我(孙小涵)是这里的管理员，后面是我的邮箱地址:<a href = 'mailto:1830960364@qq.com'>1830960364@qq.com</a> </p>
					<p>让我们一起创造一个完美的网络教学平台叭<a href = 'html/index.html'>进入Main</a></p>
						<a href = 'index.php?viewInfo=1'></a>
			</body>
		</html>
		<?php
	}
?>
