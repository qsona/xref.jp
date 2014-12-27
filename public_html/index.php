<?php require_once(dirname(__FILE__) . '/_common.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>xref.net - database</title>

		<!-- Bootstrap core CSS -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="/css/dashboard.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="/jslib/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="/jslib/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			td{
				font-family: 'ＭＳ ゴシック';
			}
			red{
				color: red;
			}
		</style>
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">xref.info</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Database</a></li>
					</ul>
					<!--
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#">Help</a></li>
					</ul>
					<form class="navbar-form navbar-right">
						<input type="text" class="form-control" placeholder="Search...">
					</form>
					-->
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li><a href="#">導入</a></li>
						<li class="active"><a href="#">管理</a></li>
						<li><a href="#">テーブル管理</a></li>
						<li><a href="#">テーブル操作</a></li>
						<li><a href="#">テーブル操作その他（連番等）</a></li>
					</ul>
					<ul class="nav nav-sidebar">
						<li><a href="">Nav item</a></li>
						<li><a href="">Nav item again</a></li>
						<li><a href="">One more nav</a></li>
						<li><a href="">Another nav item</a></li>
						<li><a href="">More navigation</a></li>
						<!-- 現在の選択サンプル
						<li class="active"><a href="#">管理 <span class="sr-only">(current)</span></a></li>
						-->
					</ul>
					<ul class="nav nav-sidebar">
						<li><a href="">Nav item again</a></li>
						<li><a href="">One more nav</a></li>
						<li><a href="">Another nav item</a></li>
					</ul>
				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Database</h1>

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- メタデータ -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<h2 class="sub-header">メタデータ</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<!-- head -->
							<thead>
							<tr>
								<th></th>
								<th>テーブル定義表示</th>
								<th>テーブル一覧表示</th>
							</tr>
							</thead>
							<!-- body -->
							<tbody>
							<tr>
								<td>MySQL</td>
								<td>DESC mytable;</td>
								<td>SHOW TABLES;</td>
							</tr>
							<tr>
								<td>Oracle</td>
								<td>DESC mytable;</td>
								<td>SHOW TABLES;</td>
							</tr>
							<tr>
								<td>PostgreSQL</td>
								<td>DESC mytable;</td>
								<td>SHOW TABLES;</td>
							</tr>
							</tbody>
						</table>
					</div>

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- 導入 -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<?php /*
					<h2 class="sub-header">導入</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<!-- head -->
							<thead>
							<tr>
								<th></th>
								<th>インストール</th>
								<th>起動・停止</th>
								<th>ログイン</th>
								<th>ログアウト</th>
							</tr>
							</thead>
							<!-- body -->
							<tbody>
							<tr>
								<td>MySQL</td>
								<td>
									CREATE TABLE mytable(
									id INT NOT NULL AUTO_INCREMENT,
									ColA VARCHAR2(5)
									);
								</td>
								<td>DROP TABLE mytable;</td>
								<td>
									ALTER TABLE mytable CHANGE ColA ColX VARCHAR2(10);
								</td>
							</tr>
							<tr>
								<td>Oracle</td>
								<td>
									CREATE TABLE mytable(
									id INT NOT NULL AUTO_INCREMENT,
									ColA VARCHAR2(5)
									);
								</td>
								<td>DROP TABLE mytable;</td>
								<td>
									ALTER TABLE mytable CHANGE ColA ColX VARCHAR2(10);
								</td>
							</tr>
							<tr>
								<td>PostgreSQL</td>
								<td>
									CREATE TABLE mytable(
									id INT NOT NULL AUTO_INCREMENT,
									ColA VARCHAR2(5)
									);
								</td>
								<td>DROP TABLE mytable;</td>
								<td>
									ALTER TABLE mytable CHANGE ColA ColX VARCHAR2(10);
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					 */
                    ?>

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- テーブル管理 -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<?php
					$table = '
						MySQL_テーブル作成
							CREATE TABLE mytable(
							id INT NOT NULL AUTO_INCREMENT,
								ColA VARCHAR2(5)
							);
						MySQL_テーブル削除		DROP TABLE mytable;
						MySQL_テーブル変更		ALTER TABLE mytable CHANGE ColA ColX VARCHAR2(10);
						Oracle_テーブル作成
							CREATE TABLE mytable(
								id INT NOT NULL AUTO_INCREMENT,
								ColA VARCHAR2(5)
							);
						Oracle_テーブル削除		DROP TABLE mytable;
						Oracle_テーブル変更		ALTER TABLE mytable CHANGE ColA ColX VARCHAR2(10);
						PostgreSQL_テーブル作成
							CREATE TABLE mytable(
								id INT NOT NULL AUTO_INCREMENT,
								ColA VARCHAR2(5)
							);
						PostgreSQL_テーブル削除	DROP TABLE mytable;
						PostgreSQL_テーブル変更	ALTER TABLE mytable CHANGE ColA ColX VARCHAR2(10);
					';
					$engines = array();
					$features = array();
					$contents = generateContents($table, $engines, $features);
					?>
					<h2 class="sub-header">テーブル管理（縦）</h2>
					<?php include "_table_features.php"; ?>

					<h2 class="sub-header">テーブル管理（横）</h2>
					<?php include "_table_engines.php"; ?>

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- テーブル操作 -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<h2 class="sub-header">テーブル操作</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<!-- head -->
							<thead>
							<tr>
								<th></th>
								<th>選択</th>
								<th>挿入</th>
								<th>更新</th>
								<th>削除</th>
							</tr>
							</thead>
							<!-- body -->
							<tbody>
							<tr>
								<td>MySQL</td>
								<td>SELECT * FROM mytable;</td>
								<td>INSERT INTO mytable(ColA, ColB) VALUES('XX', 'YY');</td>
								<td>UPDATE mytable SET ColA = 'XX' WHERE ColB = 'YY';</td>
								<td>DELETE FROM mytable WHERE ColA = 'XX';</td>
							</tr>
							<tr>
								<td>Oracle</td>
								<td>SELECT * FROM mytable;</td>
								<td>INSERT INTO mytable(ColA, ColB) VALUES('XX', 'YY');</td>
								<td>UPDATE mytable SET ColA = 'XX' WHERE ColB = 'YY';</td>
								<td>DELETE FROM mytable WHERE ColA = 'XX';</td>
							</tr>
							<tr>
								<td>PostgreSQL</td>
								<td>SELECT * FROM mytable;</td>
								<td>INSERT INTO mytable(ColA, ColB) VALUES('XX', 'YY');</td>
								<td>UPDATE mytable SET ColA = 'XX' WHERE ColB = 'YY';</td>
								<td>DELETE FROM mytable WHERE ColA = 'XX';</td>
							</tr>
							</tbody>
						</table>
					</div>

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- テーブル操作その他 -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<h2 class="sub-header">テーブル操作その他</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<!-- head -->
							<thead>
							<tr>
								<th></th>
								<th>連番</th>
							</tr>
							</thead>
							<!-- body -->
							<tbody>
							<tr>
								<td>MySQL</td>
								<td>
									CREATE TABLE mytable(
										id INT NOT NULL AUTO_INCREMENT,
										ColA VARCHAR2(5)
									);
									INSERT INTO mytable(ColA) VALUES('XX');
								</td>
							</tr>
							<tr>
								<td>Oracle</td>
								<td>
									(Case A)
									CREATE TABLE mytable(
										id INT NOT NULL AUTO_INCREMENT,
										ColA VARCHAR2(5)
									);
									CREATE SEQUENCE myseq;
									INSERT INTO mytable(id, ColA) VALUES(myseq.NEXTVAL, 'XX');

									(Case B)
									CREATE TABLE mytable(
										id INT NOT NULL AUTO_INCREMENT,
										ColA VARCHAR2(5)
									);
									CREATE SEQUENCE myseq;
									INSERT INTO mytable(id, ColA) VALUES(myseq.NEXTVAL, 'XX');
								</td>
							</tr>
							<tr>
								<td>PostgreSQL</td>
								<td>
									CREATE TABLE mytable(
										id <red>serial</red> NOT NULL,
										ColA character
									);
									INSERT INTO mytable(ColA) VALUES('XX');
								</td>
							</tr>
							<tr>
								<td>SQLite</td>
								<td>
									CREATE TABLE mytable(
										id INTEGER AUTOINCREMENT,
										ColA VARCHAR2(5)
									);
									INSERT INTO mytable(ColA) VALUES('XX');
								</td>
							</tr>
							</tbody>
						</table>
					</div>

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- テーブル操作その他（横） -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<h2 class="sub-header">テーブル操作その他（横）</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<!-- head -->
							<thead>
							<tr>
								<th></th>
								<th>MySQL</th>
								<th>Oracle</th>
								<th>PostgreSQL</th>
								<th>SQLite</th>
							</tr>
							</thead>
							<!-- body -->
							<tbody>
							<tr>
								<td>自動インクリメント</td>
								<td>
									CREATE TABLE mytable(
										id INT NOT NULL AUTO_INCREMENT,
										ColA VARCHAR2(5)
									);
									INSERT INTO mytable(ColA) VALUES('XX');
								</td>
								<td>
									(Case A: MAX を使う)
									CREATE TABLE mytable(
										id NUMBER NOT NULL,
										ColA VARCHAR2(5)
									);
									INSERT INTO mytable(id, ColA) SELECT MAX(id) + 1, 'XX' FROM mytable;

									(Case A2: MAX を使う。テーブルが空のケースも考える)
									CREATE TABLE mytable(
										id NUMBER NOT NULL,
										ColA VARCHAR2(5)
									);
									INSERT INTO mytable(id, ColA)
										SELECT
											CASE
												WHEN MAX(id) IS NULL THEN 1
												ELSE MAX(id)+1
											END,
											'XX' FROM mytable;

									(Case B: SEQUENCE を作って手動で埋め込む)
									CREATE TABLE mytable(
										id NUMBER NOT NULL,
										ColA VARCHAR2(5)
									);
									CREATE SEQUENCE myseq;
									INSERT INTO mytable(id, ColA) VALUES(myseq.NEXTVAL, 'XX');

									(Case C: SEQUENCE を作って TRIGGER で埋め込む)
									CREATE TABLE mytable(
										id NUMBER NOT NULL,
										ColA VARCHAR2(5)
									);
									CREATE SEQUENCE myseq;
									CREATE OR REPLACE TRIGGER mytrig
									BEFORE INSERT ON mytable FOR EACH ROW
									BEGIN
										SELECT myseq.NEXTVAL INTO :NEW.id FROM DUAL;
									END;
									INSERT INTO mytable(ColA) VALUES('XX');
								</td>
								<td>
									CREATE TABLE mytable(
										id <red>serial</red> NOT NULL,
										ColA character
									);
									INSERT INTO mytable(ColA) VALUES('XX');
								</td>
								<td>
									CREATE TABLE mytable(
										id INTEGER AUTOINCREMENT,
										ColA VARCHAR2(5)
									);
									INSERT INTO mytable(ColA) VALUES('XX');
								</td>
							</tr>
							</tbody>
						</table>
					</div>

					<div style="opacity: 0.2;">
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- 管理 -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<h2 class="sub-header">管理</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<!-- head -->
							<thead>
							<tr>
								<th></th>
								<th>MySQL</th>
								<th>Oracle</th>
								<th>PostgreSQL</th>
							</tr>
							</thead>
							<!-- body -->
							<tbody>
							<tr>
								<td>テーブル作成</td>
								<td>CREATE TABLE mytable(ColA VARCHAR2(5));</td>
								<td>CREATE TABLE mytable(ColA VARCHAR2(5));</td>
								<td>CREATE TABLE mytable(ColA VARCHAR2(5));</td>
							</tr>
							<tr>
								<td>テーブル削除</td>
								<td>DROP TABLE mytable;</td>
								<td>DROP TABLE mytable;</td>
								<td>DROP TABLE mytable;</td>
							</tr>
							<tr>
								<td>テーブル定義表示</td>
								<td>DESC mytable;</td>
								<td>DESC mytable;</td>
								<td>DESC mytable;</td>
							</tr>
							<tr>
								<td>テーブル一覧表示</td>
								<td>SHOW TABLES;</td>
								<td>SELECT TABLE_NAME FROM USER_TABLES;</td>
								<td>SHOW TABLES;</td>
							</tr>
							</tbody>
						</table>
					</div>

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- テーブル操作 -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<h2 class="sub-header">テーブル操作</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<!-- head -->
							<thead>
							<tr>
								<th></th>
								<th>MySQL</th>
								<th>Oracle</th>
								<th>PostgreSQL</th>
							</tr>
							</thead>
							<!-- body -->
							<tbody>
							<tr>
								<td>選択</td>
								<td>SELECT * FROM mytable;</td>
								<td>SELECT * FROM mytable;</td>
								<td>SELECT * FROM mytable;</td>
							</tr>
							<tr>
								<td>挿入</td>
								<td>INSERT INTO mytable(ColA, ColB) VALUES('XX', 'YY');</td>
								<td>INSERT INTO mytable(ColA, ColB) VALUES('XX', 'YY');</td>
								<td>INSERT INTO mytable(ColA, ColB) VALUES('XX', 'YY');</td>
							</tr>
							<tr>
								<td>更新</td>
								<td>UPDATE mytable SET ColA = 'XX' WHERE ColB = 'YY';</td>
								<td>UPDATE mytable SET ColA = 'XX' WHERE ColB = 'YY';</td>
								<td>UPDATE mytable SET ColA = 'XX' WHERE ColB = 'YY';</td>
							</tr>
							<tr>
								<td>削除</td>
								<td>DELETE FROM mytable WHERE ColA = 'XX';</td>
								<td>DELETE FROM mytable WHERE ColA = 'XX';</td>
								<td>DELETE FROM mytable WHERE ColA = 'XX';</td>
							</tr>
							</tbody>
						</table>
					</div>
					</div>

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
					<!-- -->
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="/jslib/jquery-2.1.3.min.js"></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		<!-- <script src="/jslib/docs.min.js"></script> -->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="/jslib/ie10-viewport-bug-workaround.js"></script>
		<script src="/js/app.js"></script>
	</body>
</html>