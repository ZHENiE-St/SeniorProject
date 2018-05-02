@extends('layouts.main')
@section('page_title', 'Customers')
@section('activeUrl')
<ul class="nav nav-pills nav-stacked">
  <li class="active"><a href= "homepage">Home</a></li>
  <li ><a href="customers">สร้างเคลม</a></li>
  <li > <a href= "work">ข้อมูลทั่วไป</a></li>
  <li ><a href= "work2">ข้อมูลงานซ่อม</a></li>
  <li ><a href= "work3">ค่าแรง</a></li>
  <li ><a href= "work4">ค่าอะไหล่</a></li>
  <li ><a href= "work5">ค่าใช้จ่ายอื่นๆ</a></li>
  <li ><a href= "work6">รูปภาพ</a></li>
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
<div class="form-header">
  <h1>Home
  </h1>
</div>
<table align="left" cellpadding="0" cellspacing="0" width="1200px">
  <tbody>
    <tr>
      <td class="td_Cont">
        <table id="tb_Menu" align="center" cellpadding="0" cellspacing="5" width="450px">
          <tbody>
            <tr>
              <td>
                <a id="lkbOld_ClaimView" class="menuPage_Base_Cont" href="javascript:__doPostBack('lkbOld_ClaimView','')" style="display:inline-block;height:25px;width:154px;">ดูเคลมเก่า
                </a>
              </td>
              <td id="td_NewInOut">
                <a id="lbtNewInOut" class="menuPage_Base_Cont" href="javascript:__doPostBack('lbtNewInOut','')" style="display:inline-block;height:25px;width:154px;">สร้างใบรับรถใหม่
                </a>
              </td>
              <td>
                <a id="lkbRedirect_Billing" class="menuPage_Base_Cont" href="javascript:__doPostBack('lkbRedirect_Billing','')" style="display:inline-block;height:25px;width:154px;">วางบิล
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <script type="text/javascript">
          //<![CDATA[
          Sys.WebForms.PageRequestManager._initialize('ScriptManager1', document.getElementById('form1'));
          Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tUpdatePanel1','tUpdatePanel2','tUpdatePanel3'], [], [], 90);
          //]]>
        </script>
        <br>
        <div style="position:absolute;left:210px;bottom:0px; top:110px; ">
          <table align="center" cellpadding="0" cellspacing="0" width="980px">
            <tbody>
              <tr class="lbl_Cont">
                <td width="10px">
                </td>
                <td width="660px">
                  <table cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td>
                          <div id="UpdatePanel1">
                            <select name="ddlSearch_Type" onchange="javascript:setTimeout('__doPostBack(\'ddlSearch_Type\',\'\')', 0)" id="ddlSearch_Type" style="height:18px;">
                              <optgroup label="InBox-OutBox">
                                <option selected="selected" value="all_IO">ทั้งหมด (In-Out)
                                </option>
                                <option value="IO1">ทะเบียนรถ
                                </option>
                                <option value="IO2">เลขเคลม
                                </option>
                                <option value="IO3">เลขรับแจ้ง
                                </option>
                                <option value="IO4">เลขที่ e-Claim
                                </option>
                                <option value="IO5">Job No.
                                </option>
                              </optgroup>
                              <optgroup label="ข้อมูลใบรับรถ">
                                <option value="all_Car">ทั้งหมด (ใบรับรถ)
                                </option>
                                <option value="C1">ทะเบียนรถ
                                </option>
                                <option value="C2">เลขเคลม
                                </option>
                                <option value="C3">เลขรับแจ้ง
                                </option>
                                <option value="C4">เลขที่ใบรับรถ
                                </option>
                              </optgroup>
                            </select>
                          </div>
                        </td>
                        <td>
                          <div id="UpdatePanel2">
                            <select name="ddlSearch_Status" onchange="javascript:setTimeout('__doPostBack(\'ddlSearch_Status\',\'\')', 0)" id="ddlSearch_Status">
                              <option selected="selected" value="IO0">--- ทั้งหมด ---
                              </option>
                              <option value="1">สร้างใหม่
                              </option>
                              <option value="11">แก้ไข
                              </option>
                              <option value="13">เพิ่มเติมรายการ
                              </option>
                              <option value="4">อนุมัติแล้ว
                              </option>
                              <option value="6">ดำเนินการซ่อม
                              </option>
                              <option value="7">เสร็จสมบูรณ์
                              </option>
                              <option value="8">เคลมถูกยกเลิก
                              </option>
                              <option value="3">รออนุมัติ
                              </option>
                              <option value="12">รออนุมัติแก้ไข
                              </option>
                              <option value="14">รออนุมัติเพิ่มเติม
                              </option>
                            </select>
                          </div>
                        </td>
                        <td>
                          <div id="UpdatePanel3">
                            <select name="ddlSearch_Other" id="ddlSearch_Other">
                              <option value="0">--- ทั้งหมด ---
                              </option>
                              <option value="1">ประกันจัดอะไหล่
                              </option>
                              <option value="2">สาขาจัดอะไหล่
                              </option>
                              <option value="3">อู่/ศูนย์จัดอะไหล่
                              </option>
                              <option value="4">รถเสียหายหนัก
                              </option>
                              <option value="5">ไม่ได้ส่งเข้า e-PVP
                              </option>
                              <option value="6">มีการจัดอะไหล่
                              </option>
                            </select>
                          </div>
                        </td>
                        <td>
                          <input name="txtSearch_Word" type="text" id="txtSearch_Word" class="txt">
                        </td>
                        <td>
                          <input type="submit" name="btnSearch" value="ค้นหาข้อมูล" id="btnSearch">
                          <div id="Show">
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td width="150px">
                  หน้า
                  <select name="ddlPage" onchange="javascript:setTimeout('__doPostBack(\'ddlPage\',\'\')', 0)" id="ddlPage" style="height:22px;">
                    <option selected="selected" value="0">0
                    </option>
                  </select>
                  /
                  <span id="lblTotal_Page">0
                  </span>
                </td>
                <td width="150px">
                  <select name="ddlSort" onchange="javascript:setTimeout('__doPostBack(\'ddlSort\',\'\')', 0)" id="ddlSort">
                    <option value="ASC">เก่าไปใหม่
                    </option>
                    <option selected="selected" value="DESC">ใหม่ไปเก่า
                    </option>
                  </select>
                </td>
                <td width="10px">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <br>
        <div style="position:absolute;left:210px; bottom:0px; top:150px ;width:83.5%">
          <div>
          </div>
        </div>
        <!-- InOutCarBox -->
        <div style="position:absolute;left:210px; bottom:0px; top:150px;">
          <div>
          </div>
        </div>
        <br>
      </td>
    </tr>
  </tbody>
</table>
<h4>kuy
</h4>
@stop
