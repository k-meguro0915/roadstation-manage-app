
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
        class="collapse show" 
        aria-labelledby="basic-information-header" 
        data-parent="#accordionExample"
      >
        <div class="card-body">
          <div class="form-group">
            <label for="formGroupExampleInput">住所（都道府県）</label>
            <select id="formGroupExampleInput" type="text" class="form-control" name="basic[prefecture]">                          
              @foreach(config('prefecture') as $key => $score)
                <option value="{{ $score }}">{{ $score }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">住所（市区町村以下）</label>
              <input name="basic[local_address]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">TEL</label>
            <input name="basic[tel]" type="tel" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">マップコード</label>
            <input name="basic[map_code]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">営業時間</label>
            <div class="row">
              <div class="col-auto">
                <input name="basic[start_time]" type="time" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
              <div class="col-auto">
                <span>～</span>
              </div>
              <div class="col-auto">
                <input name="basic[end_time]" type="time" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">休業日</label>
            <input name="basic[regular_holiday]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">駐車場台数（大型）</label>
            <input name="parking[learge_parking_number]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">駐車場台数（普通車）</label>
            <input name="parking[middle_parking_number]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">駐車場台数（障がい者用）</label>
            <input name="parking[disabilities_parking_number]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">スタンプ設置場所</label>
            <input name="stamp[installation_location]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">登録年</label>
            <input value="{{ old('roadstation[registry_year]',$roadstation->registry_year) }}" name="roadstation[registry_year]" type="year" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Web</label>
            <input name="urls[web]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Twitter</label>
            <input name="urls[twitter]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Facebook</label>
            <input name="urls[facebook]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Instagram</label>
            <input name="urls[instagram]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">その他</label>
            <input name="urls[other]" type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>