@extends('template')
@section('title','道の駅CSV登録')
@section('description','ディスクリプション')

@section('content')
	<div class="my-5">
    <h2 class="mb-5">道の駅CSV登録</h2>
    <form>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="formFile">
        <label for="formFile" class="custom-file-label" data-browse="参照">ファイル選択...</label>
      </div>
      <div id="fileHelpBlock" class="form-text">
        パスワードは、文字と数字を含めて8～20文字で、空白、特殊文字、絵文字を含むことはできません。
      </div>
    </form>
	</div>
@endsection