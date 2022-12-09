<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>example-app</title>

		<link href="/resources/css/app.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1 style="background-color:lavender">Header</h1>
			</div>
			<div class="content">
				<div class="text-right">
					<button type="button">작성하기</button>
				</div>

				<div style="margin-top: 10px;">
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>제목</th>
								<th>작성일</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>