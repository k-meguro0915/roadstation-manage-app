@extends('template')
@section('title','道の駅一覧')
@section('description','ディスクリプション')

@section('content')
	<div class="my-5">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">CID</th>
					<th scope="col">道の駅 名称</th>
					<th scope="col">登録年</th>
					<th scope="col">編集/削除</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($road_station as $key => $value){ ?>
				<tr>
					<td>{{ $value->CID }}</td>
					<td>{{ $value->name }}</td>
					<td>{{ $value->registry_year }}</td>
					<td>
						<a href="/edit_roadstation/{{$value->CID}}" class="btn btn-primary">編集</a>
						<a href="/delete_roadstation/{{$value->CID}}" class="btn btn-danger">削除</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
@endsection