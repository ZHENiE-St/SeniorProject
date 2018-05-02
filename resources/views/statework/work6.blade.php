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
  <li class="active"><a href= "work6">รูปภาพ</a></li>
  <li><a href= "total">สรุป</a></li>
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
<table align="left" cellpadding="0" cellspacing="0" width="1200px">
  <tbody>
    <tr>
      <td>
        <br>
        <table align="left" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td style="vertical-align:top;">
  <div style="text-align:center;">
    <table cellspacing="0" cellpadding="0" width="650" align="center">
      <tbody>
        <tr>
          <td>
            <table id="wuMenuPage1_tb_Menu" align="center" cellpadding="0" cellspacing="5" width="800px">
              <tbody>
                <tr>
                  <td>
                  </td>
                  <td>
                    <a id="wuMenuPage1_lkbGeneral_Data" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage1$lkbGeneral_Data','')" style="display:inline-block;height:25px;width:125px;">ข้อมูลทั่วไป
                    </a>
                  </td>
                  <td>
                    <a id="wuMenuPage1_lkbLabor_Cost" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage1$lkbLabor_Cost','')" style="display:inline-block;height:25px;width:125px;">ค่าแรง
                    </a>
                  </td>
                  <td>
                    <a id="wuMenuPage1_lkbPart_Cost" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage1$lkbPart_Cost','')" style="display:inline-block;height:25px;width:125px;">ค่าอะไหล่
                    </a>
                  </td>
                  <td>
                    <a id="wuMenuPage1_lkbOther_Cost" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage1$lkbOther_Cost','')" style="display:inline-block;height:25px;width:125px;">ค่าใช้จ่ายอื่น ๆ
                    </a>
                  </td>
                  <td>
                    <a id="wuMenuPage1_lkbImage" disabled="disabled" class="menuPage_Select_Cont125" style="display:inline-block;height:25px;width:125px;">รูปประกอบ
                    </a>
                  </td>
                  <td>
                    <a id="wuMenuPage1_lkbSummary" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage1$lkbSummary','')" style="display:inline-block;height:25px;width:125px;">สรุป
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <!--KeyIn-->
      </tbody>
    </table>
  </div>
  <!-- tab section -->
  <div style=" width:850px;">
    <center>
      <table width="100%">
        <tbody>
          <tr id="trimageView">
            <td>
              <div id="imageViewT" class="menuItem41" style="width:200px; float:left;">
                <a class="menuLink" style="cursor:pointer;" onclick="viewInfo('vx1',true); viewInfo('vx2',false); changeStyle('imageViewT','menuItem41');  changeStyle('imageViewL','menuItem40'); changeStyle('imageViewA','menuItem40');">
                  <img src="images/Pages/icon_image_thumb.gif" align="absmiddle">
                  <font color="#333333">แสดงแบบ Thumbnail
                  </font>
                </a>
              </div>
              <div id="imageViewL" class="menuItem40" style="width:200px; float:left;">
                <a class="menuLink" style="cursor:pointer;" onclick="viewInfo('vx2',true); viewInfo('vx1',false); changeStyle('imageViewL','menuItem41'); changeStyle('imageViewT','menuItem40'); changeStyle('imageViewA','menuItem40');">
                  <img src="images/Pages/icon_image_detail.gif" align="absmiddle">
                  <font color="#333333">แสดงแบบ List
                  </font>
                </a>
              </div>
            </td>
            <td align="right">
              <div onclick="viewInfo('helpImageType',true)">
                <img alt="" src="images/Pages/icon_help.png" align="absmiddle">
                ประเภทของรูป
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </center>
    <div id="helpImageType" style="position:absolute; width:150px; float:left; left:950px; top:150px; z-index:10; background-color:#FFFFFF; border:1px solid #666666; display:none;">
      <table>
        <tbody>
          <tr>
            <td>
              <span style="float:left; padding:8px;">
                <b>ประเภทของรูป:
                </b>
              </span>
              <div style="float:right;">
                <a style="cursor:pointer;" onclick="viewInfo('helpImageType',false)">
                  <img src="images/Pages/x1.gif">
                </a>
              </div>
              <br>
              <span class="thumb0" style="width:120px; text-align:left;">เอกสารประกอบ
                <br>ใบเคลม/ใบแจ้งอุบัติเหตุ
                <br>ใบขับขี่
                <br>กรมธรรม์
                <br>ใบรับรถก่อนซ่อม
              </span>
              <br>
              <span class="thumb1" style="width:120px; text-align:left;">รูปก่อนซ่อม
              </span>
              <br>
              <span class="thumb2" style="width:120px; text-align:left;">รูประหว่างซ่อม
              </span>
              <br>
              <span class="thumb3" style="width:120px; text-align:left;">รูปหลังซ่อม
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- tab section -->
  <div style=" left:220px; top:50px; width:950px; height:600px; bottom:0px; background-color:#F0F0F0; overflow-y:scroll; margin: 20px 0px 0px 10px;">
    <!-- select image type -->
    <table style="vertical-align:top;">
      <tbody>
        <tr>
          <td>
            <div style="width:200px">
              <select name="ddl_image_type" onchange="javascript:setTimeout('__doPostBack(\'ddl_image_type\',\'\')', 0)" id="ddl_image_type">
                <option selected="selected" value="0">--ทั้งหมด--
                </option>
                <option value="10">ใบเคลม/ใบแจ้งอุบัติเหตุ
                </option>
                <option value="11">ใบขับขี่
                </option>
                <option value="12">ใบรับรถก่อนซ่อม
                </option>
                <option value="13">กรมธรรม์
                </option>
                <option value="1">เอกสารประกอบ(ศูนย์/อู่)
                </option>
                <option value="5">เอกสารประกอบ(ประกัน)
                </option>
                <option value="2">รูปก่อนซ่อม
                </option>
                <option value="3">รูประหว่างซ่อม
                </option>
                <option value="31"> -รื้อ/ เคาะ
                </option>
                <option value="32"> -เตรียมพื้น/ พ่นสี
                </option>
                <option value="7"> -เทียบอะไหล่
                </option>
                <option value="33"> -ประกอบชิ้นส่วน
                </option>
                <option value="4">รูปซ่อมเสร็จ
                </option>
                <option value="22">ใบรับรถ(ซ่อมเสร็จ)
                </option>
                <option value="8">รูปหน้าค่าแรง
                </option>
              </select>
            </div>
          </td>
          <td>
            <div id="imageViewA" class="menuItem40" style="width:100px; float:left;">
              <a id="DspAll" class="menuLink" style="cursor:pointer;" onclick="window.open('frmDspImage.aspx?claimid=RYD018051008&amp;type=0&amp;src=image&amp;INSURERID=822');changeStyle('imageViewA','menuItem41'); changeStyle('imageViewT','menuItem40'); changeStyle('imageViewL','menuItem40');">
                <font color="#333333">ดูรูป
                </font>
              </a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <!-- upload section -->
    <div class="ix" id="ix1" style="position:fixed; top:150px; left:300px; border:1px solid #666666; z-index:100;display:none;">
      <table align="center" cellpadding="5" cellspacing="0" border="0" bgcolor="#FFFFFF">
        <tbody>
          <tr>
            <td>
              <b class="popHeader">อัพโหลดรูป
              </b>
            </td>
            <td align="right">
              <a onclick="viewInfo('ix1',false);" style="cursor:pointer;">
                <img alt="" src="images/Pages/x1.gif">
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div style="padding:5px;">
                <b>ระบบบังคับให้แนบรูปและระบุประเภทรูป ให้ถูกต้องครบถ้วน
                </b>
                <li>สถานะสร้างใหม่ :
                  <font color="#009933">1.ใบเคลม/ใบแจ้งอุบัติเหตุ   2.สำเนาใบขับขี่   3.รูปก่อนซ่อม
                  </font>
                </li>
                <li>สถานะดำเนินการซ่อม :
                  <font color="#009933">1.รูประหว่างซ่อม  2.รูปหลังซ่อม
                  </font>
                </li>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <table cellspacing="0" rules="all" border="1" id="dtg_ImageList" style="border-collapse:collapse;">
                <tbody>
                  <tr>
                    <td>คำอธิบายรูปภาพ
                    </td>
                    <td>ระบุตำแหน่งรูปภาพ
                    </td>
                    <td>&nbsp;
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input name="dtg_ImageList$ctl02$txt_IMAGE_DESC" type="text" id="dtg_ImageList_ctl02_txt_IMAGE_DESC" class="txt">
                    </td>
                    <td>
                      <input name="dtg_ImageList$ctl02$id_txt_IMAGE_LOCATION" type="file" id="dtg_ImageList_ctl02_id_txt_IMAGE_LOCATION" width="120px" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl02_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl02_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl02_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl02_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl02_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl02_img_verify').style.display=''; }">
                    </td>
                    <td>
                      <select name="dtg_ImageList$ctl02$ddl_IMAGE_TYPE" id="dtg_ImageList_ctl02_ddl_IMAGE_TYPE" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl02_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl02_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl02_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl02_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl02_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl02_img_verify').style.display=''; }">
                        <option value="0">--ทั้งหมด--
                        </option>
                        <option value="10">ใบเคลม/ใบแจ้งอุบัติเหตุ
                        </option>
                        <option value="11">ใบขับขี่
                        </option>
                        <option value="12">ใบรับรถก่อนซ่อม
                        </option>
                        <option value="13">กรมธรรม์
                        </option>
                        <option value="1">เอกสารประกอบ(ศูนย์/อู่)
                        </option>
                        <option value="5">เอกสารประกอบ(ประกัน)
                        </option>
                        <option value="2">รูปก่อนซ่อม
                        </option>
                        <option value="3">รูประหว่างซ่อม
                        </option>
                        <option value="31"> -รื้อ/ เคาะ
                        </option>
                        <option value="32"> -เตรียมพื้น/ พ่นสี
                        </option>
                        <option value="7"> -เทียบอะไหล่
                        </option>
                        <option value="33"> -ประกอบชิ้นส่วน
                        </option>
                        <option value="4">รูปซ่อมเสร็จ
                        </option>
                        <option value="22">ใบรับรถ(ซ่อมเสร็จ)
                        </option>
                        <option value="8">รูปหน้าค่าแรง
                        </option>
                      </select>
                      <img id="dtg_ImageList_ctl02_img_verify" src="" style="border-width:0px;display:none;">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input name="dtg_ImageList$ctl03$txt_IMAGE_DESC" type="text" id="dtg_ImageList_ctl03_txt_IMAGE_DESC" class="txt">
                    </td>
                    <td>
                      <input name="dtg_ImageList$ctl03$id_txt_IMAGE_LOCATION" type="file" id="dtg_ImageList_ctl03_id_txt_IMAGE_LOCATION" width="120px" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl03_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl03_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl03_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl03_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl03_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl03_img_verify').style.display=''; }">
                    </td>
                    <td>
                      <select name="dtg_ImageList$ctl03$ddl_IMAGE_TYPE" id="dtg_ImageList_ctl03_ddl_IMAGE_TYPE" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl03_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl03_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl03_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl03_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl03_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl03_img_verify').style.display=''; }">
                        <option value="0">--ทั้งหมด--
                        </option>
                        <option value="10">ใบเคลม/ใบแจ้งอุบัติเหตุ
                        </option>
                        <option value="11">ใบขับขี่
                        </option>
                        <option value="12">ใบรับรถก่อนซ่อม
                        </option>
                        <option value="13">กรมธรรม์
                        </option>
                        <option value="1">เอกสารประกอบ(ศูนย์/อู่)
                        </option>
                        <option value="5">เอกสารประกอบ(ประกัน)
                        </option>
                        <option value="2">รูปก่อนซ่อม
                        </option>
                        <option value="3">รูประหว่างซ่อม
                        </option>
                        <option value="31"> -รื้อ/ เคาะ
                        </option>
                        <option value="32"> -เตรียมพื้น/ พ่นสี
                        </option>
                        <option value="7"> -เทียบอะไหล่
                        </option>
                        <option value="33"> -ประกอบชิ้นส่วน
                        </option>
                        <option value="4">รูปซ่อมเสร็จ
                        </option>
                        <option value="22">ใบรับรถ(ซ่อมเสร็จ)
                        </option>
                        <option value="8">รูปหน้าค่าแรง
                        </option>
                      </select>
                      <img id="dtg_ImageList_ctl03_img_verify" src="" style="border-width:0px;display:none;">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input name="dtg_ImageList$ctl04$txt_IMAGE_DESC" type="text" id="dtg_ImageList_ctl04_txt_IMAGE_DESC" class="txt">
                    </td>
                    <td>
                      <input name="dtg_ImageList$ctl04$id_txt_IMAGE_LOCATION" type="file" id="dtg_ImageList_ctl04_id_txt_IMAGE_LOCATION" width="120px" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl04_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl04_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl04_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl04_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl04_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl04_img_verify').style.display=''; }">
                    </td>
                    <td>
                      <select name="dtg_ImageList$ctl04$ddl_IMAGE_TYPE" id="dtg_ImageList_ctl04_ddl_IMAGE_TYPE" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl04_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl04_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl04_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl04_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl04_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl04_img_verify').style.display=''; }">
                        <option value="0">--ทั้งหมด--
                        </option>
                        <option value="10">ใบเคลม/ใบแจ้งอุบัติเหตุ
                        </option>
                        <option value="11">ใบขับขี่
                        </option>
                        <option value="12">ใบรับรถก่อนซ่อม
                        </option>
                        <option value="13">กรมธรรม์
                        </option>
                        <option value="1">เอกสารประกอบ(ศูนย์/อู่)
                        </option>
                        <option value="5">เอกสารประกอบ(ประกัน)
                        </option>
                        <option value="2">รูปก่อนซ่อม
                        </option>
                        <option value="3">รูประหว่างซ่อม
                        </option>
                        <option value="31"> -รื้อ/ เคาะ
                        </option>
                        <option value="32"> -เตรียมพื้น/ พ่นสี
                        </option>
                        <option value="7"> -เทียบอะไหล่
                        </option>
                        <option value="33"> -ประกอบชิ้นส่วน
                        </option>
                        <option value="4">รูปซ่อมเสร็จ
                        </option>
                        <option value="22">ใบรับรถ(ซ่อมเสร็จ)
                        </option>
                        <option value="8">รูปหน้าค่าแรง
                        </option>
                      </select>
                      <img id="dtg_ImageList_ctl04_img_verify" src="" style="border-width:0px;display:none;">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input name="dtg_ImageList$ctl05$txt_IMAGE_DESC" type="text" id="dtg_ImageList_ctl05_txt_IMAGE_DESC" class="txt">
                    </td>
                    <td>
                      <input name="dtg_ImageList$ctl05$id_txt_IMAGE_LOCATION" type="file" id="dtg_ImageList_ctl05_id_txt_IMAGE_LOCATION" width="120px" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl05_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl05_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl05_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl05_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl05_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl05_img_verify').style.display=''; }">
                    </td>
                    <td>
                      <select name="dtg_ImageList$ctl05$ddl_IMAGE_TYPE" id="dtg_ImageList_ctl05_ddl_IMAGE_TYPE" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl05_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl05_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl05_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl05_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl05_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl05_img_verify').style.display=''; }">
                        <option value="0">--ทั้งหมด--
                        </option>
                        <option value="10">ใบเคลม/ใบแจ้งอุบัติเหตุ
                        </option>
                        <option value="11">ใบขับขี่
                        </option>
                        <option value="12">ใบรับรถก่อนซ่อม
                        </option>
                        <option value="13">กรมธรรม์
                        </option>
                        <option value="1">เอกสารประกอบ(ศูนย์/อู่)
                        </option>
                        <option value="5">เอกสารประกอบ(ประกัน)
                        </option>
                        <option value="2">รูปก่อนซ่อม
                        </option>
                        <option value="3">รูประหว่างซ่อม
                        </option>
                        <option value="31"> -รื้อ/ เคาะ
                        </option>
                        <option value="32"> -เตรียมพื้น/ พ่นสี
                        </option>
                        <option value="7"> -เทียบอะไหล่
                        </option>
                        <option value="33"> -ประกอบชิ้นส่วน
                        </option>
                        <option value="4">รูปซ่อมเสร็จ
                        </option>
                        <option value="22">ใบรับรถ(ซ่อมเสร็จ)
                        </option>
                        <option value="8">รูปหน้าค่าแรง
                        </option>
                      </select>
                      <img id="dtg_ImageList_ctl05_img_verify" src="" style="border-width:0px;display:none;">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input name="dtg_ImageList$ctl06$txt_IMAGE_DESC" type="text" id="dtg_ImageList_ctl06_txt_IMAGE_DESC" class="txt">
                    </td>
                    <td>
                      <input name="dtg_ImageList$ctl06$id_txt_IMAGE_LOCATION" type="file" id="dtg_ImageList_ctl06_id_txt_IMAGE_LOCATION" width="120px" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl06_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl06_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl06_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl06_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl06_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl06_img_verify').style.display=''; }">
                    </td>
                    <td>
                      <select name="dtg_ImageList$ctl06$ddl_IMAGE_TYPE" id="dtg_ImageList_ctl06_ddl_IMAGE_TYPE" onchange=" if(verifyUpload( document.getElementById('dtg_ImageList_ctl06_id_txt_IMAGE_LOCATION').value,                   document.getElementById('dtg_ImageList_ctl06_ddl_IMAGE_TYPE').value                  )    ) {    document.getElementById('dtg_ImageList_ctl06_img_verify').src = 'Images/Pages/correct.png';   document.getElementById('dtg_ImageList_ctl06_img_verify').style.display=''; } else {   document.getElementById('dtg_ImageList_ctl06_img_verify').src = 'Images/Pages/cancel.png';   document.getElementById('dtg_ImageList_ctl06_img_verify').style.display=''; }">
                        <option value="0">--ทั้งหมด--
                        </option>
                        <option value="10">ใบเคลม/ใบแจ้งอุบัติเหตุ
                        </option>
                        <option value="11">ใบขับขี่
                        </option>
                        <option value="12">ใบรับรถก่อนซ่อม
                        </option>
                        <option value="13">กรมธรรม์
                        </option>
                        <option value="1">เอกสารประกอบ(ศูนย์/อู่)
                        </option>
                        <option value="5">เอกสารประกอบ(ประกัน)
                        </option>
                        <option value="2">รูปก่อนซ่อม
                        </option>
                        <option value="3">รูประหว่างซ่อม
                        </option>
                        <option value="31"> -รื้อ/ เคาะ
                        </option>
                        <option value="32"> -เตรียมพื้น/ พ่นสี
                        </option>
                        <option value="7"> -เทียบอะไหล่
                        </option>
                        <option value="33"> -ประกอบชิ้นส่วน
                        </option>
                        <option value="4">รูปซ่อมเสร็จ
                        </option>
                        <option value="22">ใบรับรถ(ซ่อมเสร็จ)
                        </option>
                        <option value="8">รูปหน้าค่าแรง
                        </option>
                      </select>
                      <img id="dtg_ImageList_ctl06_img_verify" src="" style="border-width:0px;display:none;">
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;
                    </td>
                    <td>&nbsp;
                    </td>
                    <td>
                      <input type="submit" name="dtg_ImageList$ctl07$btn_Upload" value="Upload" onclick="return verifyError();" id="dtg_ImageList_ctl07_btn_Upload">
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="ix" id="ix2" style="position: fixed; top: 50px; left: 400px; border: 1px solid rgb(102, 102, 102); z-index: 100; display: none;">
      <table align="center" cellpadding="5" cellspacing="0" border="0" bgcolor="#FFFFFF">
        <tbody>
          <tr>
            <td>
              <b class="popHeader">อัพโหลดรูป
              </b>
            </td>
            <td align="right">
              <a onclick="viewInfo('ix2',false);" style=" cursor:pointer;">
                <img alt="" src="images/Pages/x1.gif">
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div style="padding:5px;">
                <b>ระบบบังคับให้แนบรูปและระบุประเภทรูป ให้ถูกต้องครบถ้วน
                </b>
                <li>สถานะสร้างใหม่ :
                  <font color="#009933">1.ใบเคลม/ใบแจ้งอุบัติเหตุ   2.สำเนาใบขับขี่   3.รูปก่อนซ่อม
                  </font>
                </li>
                <li>สถานะดำเนินการซ่อม :
                  <font color="#009933">1.รูประหว่างซ่อม  2.รูปหลังซ่อม
                  </font>
                </li>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <iframe id="ifrm_upload_flash" style="width:535px; height:375px;" src="http://eclaim2.emcsthai.com/EMCSThai_Upload_Eclaim4/default.aspx?CLAIMID=RYD018051008&amp;MEM_TYPE=R&amp;ADD_NO=1&amp;USERID=28817&amp;INSURERID=822">
              </iframe>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- upload section -->
    <div id="ix3" style="position:relative; border:1px solid #666666; display:none;">
      <table align="center" cellpadding="5" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td width="20">
              <img src="images/Pages/x1.gif" style="cursor: pointer;" onclick="viewInfo('ix3',false)">
            </td>
            <td>
              <b class="popHeader" style="font-size:10pt;">
                <div id="div_dsp_ImageDesc" style="color:Highlight;">
                </div>
              </b>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div id="div_dsp_Image">
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <table id="TableImageDisplay">
      <tbody>
        <tr>
          <td>
            <div id="vx1">
              <span style="font-family:Tahoma; font-size:9pt;">เลือกทั้งหมด
              </span>
              <input type="checkbox" style="Z-INDEX: 0" id="cbHdcb1" width="10px" onclick="CheckAllDataGridCheckBoxes('chk_DelImage',document.forms[0].cbHdcb1.checked)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span id="lblNoData" style="color:#CC0000;font-size:Small;font-weight:bold;">ไม่มีข้อมูลรูป
              </span>
              &nbsp;
              <div style="text-align:right;">
                <input type="submit" name="btn_DelImage" value="ลบรูปภาพ" onclick="return confirm('กรุณายืนยันการลบรูปภาพ');" id="btn_DelImage">
              </div>
            </div>
            <div id="vx2" style="display:none;">
              <div style="text-align:right;">
                <input type="submit" name="btn_DelImage_List" value="ลบรูปภาพ" onclick="return confirm('กรุณายืนยันการลบรูปภาพ');" id="btn_DelImage_List">
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</td>

            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<!-- ------------------------------------------------modal -->
<!-- <div class="ix" id="ix5" style="position: absolute; top: 100px; left: 250px; border: 1px solid rgb(102, 102, 102); z-index: 200;">
  <table align="center" cellpadding="5" cellspacing="0" border="0" bgcolor="#FFFFFF" width="800px">
    <tbody>
      <tr>
        <td>
          <img alt="" style="vertical-align:middle;border:0px;" src="Images/ImagePage/images.png">
          <b class="popHeader" style="vertical-align:middle;">อัพโหลดรูป
          </b>
        </td>
        <td align="right">
          <a onclick="viewInfo('ix5',false);setReload();" style=" cursor:pointer;">
            <img alt="" src="images/Pages/x1.gif" border="0px">
          </a>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div style="padding:5px;font-size:10pt;">
            <b>ระบบบังคับให้แนบรูปและระบุประเภทรูป ให้ถูกต้องครบถ้วน
            </b>
            <li>สถานะสร้างใหม่ :
              <font color="#009933">1.ใบเคลม/ใบแจ้งอุบัติเหตุ   2.สำเนาใบขับขี่   3.รูปก่อนซ่อม
              </font>
            </li>
            <li>สถานะดำเนินการซ่อม :
              <font color="#009933">1.รูประหว่างซ่อม  2.รูปหลังซ่อม
              </font>
            </li>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <iframe id="frameUpload" width="820px" height="400px" scrolling="auto" src="http://eclaim2.emcsthai.com/EMCSThai_Upload_Eclaim4/frmUpload_Html5.aspx?CLAIMID=RYD018051008&amp;MEM_TYPE=R&amp;ADD_NO=1&amp;USERID=28817&amp;INSURERID=822&amp;CurrUpImage=0&amp;MaxUpImage=5">
          </iframe>
        </td>
      </tr>
    </tbody>
  </table>
</div> -->

@stop
