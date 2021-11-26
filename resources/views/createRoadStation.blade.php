@extends('template')
@section('title','道の駅新規登録')
@section('description','ディスクリプション')

@section('content')
	<div class="my-5">
		<form>
			<!-- 道の駅 -->
			<div class="imagePreview"></div>
			<div class="input-group">
				<label class="input-group-btn">
					<span class="btn btn-primary">
						写真をアップロード<input type="file" style="display:none" class="uploadFile">
					</span>
				</label>
				<input type="text" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput">フリガナ</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="ミチノエキ">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">道の駅 名称</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="道の駅">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">キャッチコピー</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="道の駅">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">紹介文</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<div class="location-roads my-3">
				<div class="form-group">
					<select class="custom-select">
						<label for="formGroupExampleInput2">立地道路種別</label>
						<option selected>道路種別を選択</option>
						<option value="1">国道</option>
						<option value="2">公道</option>
						<option value="3">その他</option>
					</select>
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">道路番号</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">道路名称</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">標高</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">約</span>
						</div>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
						<div class="input-group-append">
							<span class="input-group-text">m</span>
						</div>
					</div>
				</div>
			</div>
			<!-- 旬のイベント情報 -->
			<div class="events my-3">
				<div class="form-group">
					<label for="formGroupExampleInput">イベントタイトル</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">イベント内容</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">開始日</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">終了日</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
					<label class="form-check-label" for="inlineCheckbox1">休業</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
					<label class="form-check-label" for="inlineCheckbox2">閉鎖</label>
				</div>
			</div>
			<!-- URLリンクリスト -->
			<div class="facility-list">
				<ul style="list-style:none;">
					<?php for($i=1;$i<=10;$i++) {?>
					<li>
						<label>
							<input
								id="facility-checkbox-<?php print('0' . $i)?>"	style="display:none"
								type="checkbox"	class="btn-check custom-control-input"
								id="customCheck1"	autocomplete="off" checked=""
							>
							<span
								id="facility-btn-<?php print('0' . $i)?>" class="btn btn-secondary"
								for="customCheck1" onclick="clickChangeButtonState('<?php print('0' . $i)?>')"
							>
								売店
							</span>
						</label>
					</li>
					<?php } ?>
				</ul>
			</div>
			<!-- 基本情報アコーディオン -->
			<div class="basic-information">
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="basic-information-header">
							<h5 class="mb-0">
								<button
									class="btn btn-link"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#information-accordion"
									aria-expanded="true"
									aria-controls="information-accordion"
								>
									▼基本情報（クリック・タップで開く）
								</button>
							</h5>
						</div>
						<div 
							id="information-accordion" 
							class="collapse" 
							aria-labelledby="basic-information-header" 
							data-parent="#accordionExample"
						>
							<div class="card-body">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">住所（都道府県）</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">住所（市区町村以下）</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">TEL</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">マップコード</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">営業時間</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">休業日</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">駐車場台数（大型）</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">駐車場台数（普通車）</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">駐車場台数（障がい者用）</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">スタンプ設置場所</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">登録年</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Web</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Twitter</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Facebook</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Instagram</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">その他</span>
										</div>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="facility-list"></div>
			@include('components.facilitieCard')
			<!-- submit -->
			<div class="form-group">
				<button type="submit" class="btn btn-primary mb-2 mt-2">確定</button>
			</div>
		</form>
	</div>
@endsection