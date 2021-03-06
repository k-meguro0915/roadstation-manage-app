<?php

namespace App\Http\Controllers;
use App\Models\Roadstation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\MstFacility;
use App\Models\MstEquipments;

// サービス定義
use App\Services\RoadstationService;

class RoadStationController extends Controller
{
  private $service;
  public function __construct(RoadstationService $service)
  {
    $this->service = $service;
  }

  public function index(){
    $roadstation = new Roadstation();
    $equipments = MstFacility::orderBy('id','asc')->get();
    $facilities = MstEquipments::orderBy('id','asc')->get();
    return view('createRoadStation',[
      'equipments' => $equipments,
      'facilities' => $facilities,
      'roadstation' => $roadstation
    ]);
  }
  // 道の駅作成：確認
  public function confirm(Request $request){
    Log::debug($request);
    return view('confirmRoadStation',[
      'request' => $request->get
    ]);
  }
  // 道の駅作成：登録
  public function store(Request $request){
    $this->service->store($request);
    return redirect('/');
  }
  // 道の駅編集
  public function edit($cid){
    $equipments = MstFacility::orderBy('id','asc')->get();
    $facilities = MstEquipments::orderBy('id','asc')->get();
    $roadstation = $this->service->where($cid);
    Log::debug($roadstation);
    return view('editRoadStation',[
      'equipments' => $equipments,
      'facilities' => $facilities,
      'roadstation' => $roadstation[0]
    ]);
  }
  // 道の駅編集：更新
  public function update(Request $request){
    $this->service->update($request);
    return redirect('/');
  }
  // 道の駅削除
  public function delete($cid){
    Log::Debug($cid);
    $this->service->delete($cid);
    return redirect('/');
  }
}
