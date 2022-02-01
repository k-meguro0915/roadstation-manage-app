@extends('template')
@section('title','道の駅CSV登録')
@section('description','ディスクリプション')

@section('content')
	<div class="my-5">
    <h2 class="mb-5">道の駅CSV登録</h2>
    <form action="/import_csv/confirm" method="POST">
			@csrf
      <div class="custom-file">
        <input type="file" name="file" class="custom-file-input" id="formFile">
        <label for="formFile" class="custom-file-label" data-browse="参照">ファイル選択...</label>
      </div>
      <div class="mt-5">
        <select class="form-control custom-select" aria-label="Default select" name="type">
          <option>登録対象を選択</option>
          <option value="0">道の駅</option>
          <option value="1">付帯設備</option>
        </select>
      </div>
      <div class="form-group">
				<button type="button" onclick="submit()" class="btn btn-primary mb-2 mt-2">確定</button>
			</div>
    </form>
	</div>
@endsection