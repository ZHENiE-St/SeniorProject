@extends('layouts.main')
@section('page_title', 'Customers')

@section('activeUrl')
<h4>Sombat .J Auto Center
</h4>
<ul class="nav nav-pills nav-stacked">
  <li ><a href= "homepage">Home</a></li>
  <li ><a href="customers">สร้างเคลม</a></li>
  <li > <a href= "work">ข้อมูลทั่วไป</a></li>
  <li ><a href= "work2">ข้อมูลงานซ่อม</a></li>
  <li ><a href= "work3">ค่าแรง</a></li>
  <li ><a href= "work4">ค่าอะไหล่</a></li>
  <li ><a href= "work5">ค่าใช้จ่ายอื่นๆ</a></li>
  <li ><a href= "work6">รูปภาพ</a></li>
  <li class="active"><a href= "total">สรุป</a></li>
</ul>
<br>
<div class="input-group">
  <input type="text" class="form-control" placeholder="Search Blog..">
  <span class="input-group-btn">
    <button class="btn btn-default" type="button">
      <span class="glyphicon glyphicon-search">
      </span>
    </button>
  </span>
</div>
<div style="text-align:center;">
  <input type="submit" name="bntSave" value="บันทึก" onclick="return chkSave('Save');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;bntSave&quot;, &quot;&quot;, true, &quot;v1&quot;, &quot;&quot;, false, false))" id="bntSave" style="width:130px; padding:10px;  font-weight:bold;
border-radius:5px; font-size:10pt; color:#000000;
background:#FFB040 url(images/GeneralInfo/save_small.gif) no-repeat 27% 50%;">
</div>
@stop
@section('content')
@stop
