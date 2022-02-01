<?php

namespace App\Services;
use Illuminate\Support\Facades\Log;
use App\Models\Roadstation;
use App\Models\RoadstationAddress;
use App\Models\RoadstationBusinessHour;
use App\Models\RoadstationBusinessStampInfomation;
use App\Models\RoadstationEval;
use App\Models\RoadstationParking;
use App\Models\RoadstationSightseeing;
use App\Models\RoadstationUrls;
use App\Models\LocationRoad;
use App\Models\FacilityDetail;
use App\Models\AncillaryEquipments;
use App\Models\IncidentalFacility;
use App\Models\SeasonalInformation;
use App\Models\SeasonalInformationFlag;

class RoadstationService
{
  // 道の駅を全取得
  public function get(){
    // Userのmodelクラスのインスタンスを生成
    return Roadstation::all();
  }
  // 道の駅取得（ID指定）
  public function where($cid){
    return Roadstation::where('CID',$cid)->get();
  }
  // 道の駅登録
  // 各メソッドでupdateOrCreateが試せるかを再思考
  public function store($request) {
    // 各テーブルに使うデータの整形
    $data = $request->all();
    // $roadstation  = $data['roadstation'];
    // $local_road   = $data['localroad'];
    // $event        = $data['event'];
    // $eventFlg     = $data['eventFlag'];
    $facility        = $data['facility'];
    // $equipment    = $data['service'];
    // $basic        = $data['basic'];
    // $parking      = $data['parking'];
    // $stamp        = $data['stamp'];
    // $urls         = $data['urls'];
    Log::debug($facility);
    // 道の駅メインのテーブルにデータを取得し、返却されたデータからCIDを抜き出す。
    // $inserted_station = $this->createRoadStation($roadstation);
    // $cid = $inserted_station['CID'];
    $cid = "0002";
    // // 抜き出したCIDを元に各リレーションレコードを作成する
    // $this->createRelationRoadStation(new RoadstationAddress() ,$cid, $local_road);
    // $this->createRelationRoadStation(new RoadstationBusinessHour() ,$cid, $basic);
    // $this->createRelationRoadStation(new RoadstationBusinessStampInfomation() ,$cid, $stamp);
    // // $this->createRelationRoadStation(new RoadstationEval() ,$cid, $local_road);
    // $this->createRelationRoadStation(new RoadstationParking() ,$cid, $parking);
    // // $this->createRelationRoadStation(new RoadstationSightseeing() ,$cid, $local_road);
    // $this->createRelationRoadStation(new RoadstationUrls() ,$cid, $urls);
    // $this->createRelationRoadStation(new LocationRoad() ,$cid, $local_road);
    // // $this->createRelationRoadStation(new FacilitiesDetail() ,$cid, $local_road);
    // $this->createSeasonalInformation(new SeasonalInformation() ,$cid, $event);
    // $this->createRelationRoadStation(new SeasonalInformationFlag() ,$cid, $eventFlg);
    // // 特殊な処理を行うレコードは個別の処理
    // $this->createAncillaryEquipments($cid, $equipment);
    $this->createIncidentalFacility($cid, $facility);
  }
  // 道の駅更新
  public function update($request){
    // 各テーブルに使うデータの整形
    $data = $request->all();
    $roadstation  = $data['roadstation'];
    $this->updateRoadStation($roadstation);
  }
  // 道の駅基本情報の更新
  private function updateRoadStation($record){
    $model = new Roadstation();
    $inserted_station = $model->where('CID',$record['CID'])
                              ->update( $record ); 
    return $inserted_station;
  }
  // 道の駅基本情報の登録
  private function createRoadStation($record){
    $model = new Roadstation();
    $inserted_station = $model->create( $record );
    return $inserted_station;
  }
  // 道の駅関連情報の登録
  private function createRelationRoadStation($model,$cid,$record){
    $record = array_merge( $record,array('CID' => $cid) );
    $model->create( $record );
  }
  // 旬の情報登録
  // 配列[0]～[2]の3つあり、再帰処理で登録
  private function createSeasonalInformation($model,$cid,$record){
    for($cnt = 1;$cnt <= 3;$cnt++){
      $data = array('CID' => $cid);
      $data = array_merge($data,array("title" => $record['title' . $cnt]));
      $data = array_merge($data,array("content" => $record['content' . $cnt]));
      $data = array_merge($data,array("start_time" => $record['start_time' . $cnt]));
      $data = array_merge($data,array("end_time" => $record['end_time' . $cnt]));
      Log::debug($data);
      $model->create( $data );
    }
    return true;
  }
  // 道の駅設備情報の登録
  private function createAncillaryEquipments($cid,$record){
    $model = new AncillaryEquipments();
    $equipments = array('equipment_id' => implode($record));
    $equipments = array_merge($equipments,array('CID' => $cid));
    $model->create( $equipments );
    return true;
  }
  // 道の駅施設情報の登録
  private function createIncidentalFacility($cid,$record){
    $model = new FacilityDetail();
    foreach($record as $key => $value){
      $data = $value;
      $data = array_merge($data,array('CID' => $cid));
      $model->create( $data );
    }
    return true;
  }
  public function delete($cid){
    Roadstation::where('CID',$cid)->delete();
    RoadstationAddress::where('CID',$cid)->delete();
    RoadstationBusinessHour::where('CID',$cid)->delete();
    RoadstationBusinessStampInfomation::where('CID',$cid)->delete();
    RoadstationEval::where('CID',$cid)->delete();
    RoadstationParking::where('CID',$cid)->delete();
    RoadstationSightseeing::where('CID',$cid)->delete();
    RoadstationUrls::where('CID',$cid)->delete();
    LocationRoad::where('CID',$cid)->delete();
    FacilityDetail::where('CID',$cid)->delete();
    AncillaryEquipments::where('CID',$cid)->delete();
    IncidentalFacility::where('CID',$cid)->delete();
    SeasonalInformation::where('CID',$cid)->delete();
    SeasonalInformationFlag::where('CID',$cid)->delete();
    return true;
  }
}