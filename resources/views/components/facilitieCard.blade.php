
<!-- 付帯施設情報アコーディオン -->
<template id="tmp-facility-accordion">
  <div id="facility-accordion" class="basic-information mt-3">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button
              id="facility-title"
              class="btn btn-link"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
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
                  <span class="input-group-text">営業時間（補足1）</span>
                </div>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">営業時間（補足2）</span>
                </div>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">定休日</span>
                </div>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">電話番号</span>
                </div>
                <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="00">
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
                  <span class="input-group-text">イチ押し</span>
                </div>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">クレジットカード</span>
                </div>
                <input type="checkbox" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">電子マネー</span>
                </div>
                <input type="checkbox" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">バーコード決済</span>
                </div>
                <input type="checkbox" class="form-control" id="formGroupExampleInput" placeholder="00">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>