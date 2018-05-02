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
  <li class="active"><a href= "work5">ค่าใช้จ่ายอื่นๆ</a></li>
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
<table align="left" cellpadding="0" cellspacing="0" width="1200px">
  <tbody>
    <tr style="vertical-align:top;">

<div>
  <table cellspacing="0" cellpadding="0" width="650" align="center" bgcolor="#ecedee">
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
                  <a id="wuMenuPage1_lkbOther_Cost" disabled="disabled" class="menuPage_Select_Cont125" style="display:inline-block;height:25px;width:125px;">ค่าใช้จ่ายอื่น ๆ
                  </a>
                </td>
                <td>
                  <a id="wuMenuPage1_lkbImage" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage1$lkbImage','')" style="display:inline-block;height:25px;width:125px;">รูปประกอบ
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
      <tr>
        <td style="HEIGHT: 25px">
        </td>
      </tr>
      <tr style="background-color:#f9fbee;height:10px;">
        <td>
          <font face="Tahoma">
          </font>
        </td>
      </tr>
      <tr style="height:25px;">
        <td>
          <table style="height:25px;" cellspacing="0" cellpadding="0" width="100%" border="0">
            <tbody>
              <tr width="100%">
                <td bgcolor="#2277d4" valign="middle">
                  <font color="#2277d4">&nbsp;
                    <span id="lbhead" class="g1" style="color:White;">
                    </span>
                  </font>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr valign="top">
        <td bgcolor="whitesmoke">
          <div id="PnlInsert">
            <table id="Table1" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>
                <tr>
                  <td>
                    <table cellspacing="0" rules="all" border="1" id="DtgEtc" style="font-family:Microsoft Sans Serif;font-size:X-Small;width:648px;border-collapse:collapse;">
                      <tbody>
                        <tr class="headDtg" align="center" valign="middle" style="background-color:LightSkyBlue;">
                          <td>รายชื่อรายการภาษาไทย
                          </td>
                          <td>ราคาเสนอ (บาท)
                          </td>
                          <td>ความคิดเห็น
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl02$txtDes" type="text" value="ค่าลากรถ" id="DtgEtc_ctl02_txtDes" class="txt" style="height:23px;">
                          </td>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl02$txtsPrice" type="text" id="DtgEtc_ctl02_txtsPrice" class="txt" onkeypress="return KeyPressDecimal(this, event,2)" onblur="BlurDecimal(this, event,2)" style="height:23px;">
                          </td>
                          <td>
                            <textarea name="DtgEtc$ctl02$txtComment" rows="2" cols="20" id="DtgEtc_ctl02_txtComment" class="txt" style="height:23px;width:200px;max-height:23px; min-height: 23px; max-width:200px; min-width:200px;">
                            </textarea>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl03$txtDes" type="text" id="DtgEtc_ctl03_txtDes" class="txt" style="height:23px;">
                          </td>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl03$txtsPrice" type="text" id="DtgEtc_ctl03_txtsPrice" class="txt" onkeypress="return KeyPressDecimal(this, event,2)" onblur="BlurDecimal(this, event,2)" style="height:23px;">
                          </td>
                          <td>
                            <textarea name="DtgEtc$ctl03$txtComment" rows="2" cols="20" id="DtgEtc_ctl03_txtComment" class="txt" style="height:23px;width:200px;max-height:23px; min-height: 23px; max-width:200px; min-width:200px;">
                            </textarea>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl04$txtDes" type="text" id="DtgEtc_ctl04_txtDes" class="txt" style="height:23px;">
                          </td>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl04$txtsPrice" type="text" id="DtgEtc_ctl04_txtsPrice" class="txt" onkeypress="return KeyPressDecimal(this, event,2)" onblur="BlurDecimal(this, event,2)" style="height:23px;">
                          </td>
                          <td>
                            <textarea name="DtgEtc$ctl04$txtComment" rows="2" cols="20" id="DtgEtc_ctl04_txtComment" class="txt" style="height:23px;width:200px;max-height:23px; min-height: 23px; max-width:200px; min-width:200px;">
                            </textarea>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl05$txtDes" type="text" id="DtgEtc_ctl05_txtDes" class="txt" style="height:23px;">
                          </td>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl05$txtsPrice" type="text" id="DtgEtc_ctl05_txtsPrice" class="txt" onkeypress="return KeyPressDecimal(this, event,2)" onblur="BlurDecimal(this, event,2)" style="height:23px;">
                          </td>
                          <td>
                            <textarea name="DtgEtc$ctl05$txtComment" rows="2" cols="20" id="DtgEtc_ctl05_txtComment" class="txt" style="height:23px;width:200px;max-height:23px; min-height: 23px; max-width:200px; min-width:200px;">
                            </textarea>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl06$txtDes" type="text" id="DtgEtc_ctl06_txtDes" class="txt" style="height:23px;">
                          </td>
                          <td align="center" style="font-weight:normal;font-style:normal;text-decoration:none;">
                            <input name="DtgEtc$ctl06$txtsPrice" type="text" id="DtgEtc_ctl06_txtsPrice" class="txt" onkeypress="return KeyPressDecimal(this, event,2)" onblur="BlurDecimal(this, event,2)" style="height:23px;">
                          </td>
                          <td>
                            <textarea name="DtgEtc$ctl06$txtComment" rows="2" cols="20" id="DtgEtc_ctl06_txtComment" class="txt" style="height:23px;width:200px;max-height:23px; min-height: 23px; max-width:200px; min-width:200px;">
                            </textarea>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr id="divPartListControl">
                  <td bgcolor="#CCCCCC">
                    <div style="float:left; padding:5px;">
                      <font face="Tahoma">
                      </font>
                    </div>
                    <div style="float:right; padding:5px;">
                      <input type="submit" name="BntInsert" value="เพิ่มรายการ" id="BntInsert" class="itemDtg" style=" width:100px;color: #006633; background:url(images/Pages/icon_insert.gif);
                                                                                                                      background-repeat:no-repeat; background-position:5px 6px; ">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </td>
      </tr>
      <!--END KEYIN--->
      <!--STRAT DtgAsign--->
      <!--END DtgAsign--->
      <!--Start DtgCanCle--->
      <tr id="trCancle" valign="top">
        <td>
        </td>
      </tr>
      <tr style="height:25px;">
        <td>
          <table height="25" cellspacing="0" cellpadding="0" width="100%" border="0">
            <tbody>
              <tr width="100%">
                <td valign="middle" bgcolor="#2277d4">
                  <font color="#2277d4">&nbsp; footer
                  </font>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <!--END DtgCanCle--->
      <!--START DtgAddEdit--->
      <tr style="background-color:#f9fbee;height:10px;">
        <td>
        </td>
      </tr>
      <tr>
        <td style="background-color:White;">
          <table style="width:100%;">
            <tbody>
              <tr width="100%">
                <td style="HEIGHT: 25px" width="100%" colspan="2">
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tbody>
                      <tr>
                        <td bgcolor="#2277d4">
                          <font class="g1">
                            <span id="lblETC" class="g1" style="color:White;">
                            </span>
                          </font>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <table cellspacing="0" cellpadding="2" rules="all" border="1" id="DtgAddEdit" style="background-color:WhiteSmoke;border-color:#CCCCCC;border-width:1px;border-style:None;font-family:Microsoft Sans Serif;font-size:X-Small;width:100%;border-collapse:collapse;">
                    <tbody>
                      <tr class="headDtg" align="center" valign="middle" style="background-color:LightSkyBlue;">
                        <td style="width:20px;">
                          <font face="Tahoma">
                            <input type="checkbox" style="Z-INDEX: 0" id="cbHdcb1" width="10px" onclick="CheckAllDataGridCheckBoxes('CbAdd_edit',document.forms[0].cbHdcb1.checked)">
                          </font>
                        </td>
                        <td style="width:20px;">&nbsp;
                        </td>
                        <td style="width:148px;">รายการ
                        </td>
                        <td>
                          <input type="image" name="DtgAddEdit$ctl01$ctl00" title="คลิกแสดงช่องความคิดเห็น หลังจากใส่เครื่องหมายถูกหน้ารายการที่ต้องการแก้ไข" src="Images/Labor/comment1.gif" style="border-width:0px;">
                        </td>
                        <td style="width:70px;">ราคาเสนอ
                        </td>
                        <td style="width:70px;">ราคาอนุมัติ
                        </td>
                        <td style="width:70px;">อนุมัติครั้งที่
                        </td>
                        <td>ไม่อนุมัติ
                        </td>
                        <td style="width:50px;">สถานะ
                        </td>
                      </tr>
                      <tr class="itemDtg" style="color:#4A3C8C;background-color:WhiteSmoke;">
                      </tr>
                      <tr align="center">
                        <td colspan="9" align="center">
                          <font face="Microsoft" sans="" serif="" color="#cc0033" size="2">
                            <strong>ไม่มีรายการค่าใช้จ่ายอื่นๆ
                            </strong>
                          </font>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr class="itemDtg" style="color:#4A3C8C;background-color:WhiteSmoke;color:#4A3C8C;background-color:WhiteSmoke;">
              </tr>
              <tr>
                <td>
                  <div align="center" style="padding:4px;width:100%">
                    <div id="div_ref_code">
                    </div>
                  </div>
                </td>
              </tr>
              <tr id="trcomment1" class="bt" align="center">
                <td style="WIDTH: 332px; HEIGHT: 21px">
                  <font size="2">
                    <span id="lbRepDis0" class="headDtg" style="color:#0066CC;text-decoration:underline;">ความคิดเห็นจาก อู่
                    </span>
                  </font>
                </td>
                <td style="WIDTH: 450px; HEIGHT: 21px">
                  <span id="lbRepDis1" class="headDtg" style="color:#0066CC;text-decoration:underline;">ความคิดเห็นจาก บริษัทประกัน
                  </span>
                </td>
              </tr>
              <tr id="trcomment2" class="bt" align="center">
                <td style="WIDTH: 332px; HEIGHT: 20px">
                  <div>
                    <table cellspacing="0" cellpadding="4" rules="cols" border="1" id="grvRep_Comment" style="color:Black;background-color:White;border-color:#DEDFDE;border-width:1px;border-style:None;width:405px;border-collapse:collapse;">
                      <tbody>
                        <tr class="headDtg" style="color:White;background-color:#6B696B;font-weight:bold;">
                          <th scope="col">ลำดับ
                          </th>
                          <th scope="col">รายการ
                          </th>
                          <th scope="col">ข้อความ
                          </th>
                        </tr>
                        <tr class="itemDtg" style="background-color:#F7F7DE;">
                          <td align="center" style="width:5px;">&nbsp;
                          </td>
                          <td align="left" style="width:150px;">&nbsp;
                          </td>
                          <td align="left" style="width:250px;">&nbsp;
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
                <td style="WIDTH: 450px; HEIGHT: 20px">
                  <font face="Tahoma">
                    <div>
                      <table cellspacing="0" cellpadding="4" rules="cols" border="1" id="grvIns_Comment" style="color:Black;background-color:White;border-color:#DEDFDE;border-width:1px;border-style:None;width:405px;border-collapse:collapse;">
                        <tbody>
                          <tr class="headDtg" style="color:White;background-color:#6B696B;font-weight:bold;">
                            <th scope="col">ลำดับ
                            </th>
                            <th scope="col">รายการ
                            </th>
                            <th scope="col">ข้อความ
                            </th>
                          </tr>
                          <tr class="txt" style="background-color:#F7F7DE;">
                            <td align="center" style="width:5px;">&nbsp;
                            </td>
                            <td align="left" style="width:250px;">&nbsp;
                            </td>
                            <td align="left" style="width:350px;">&nbsp;
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </font>
                </td>
              </tr>
              <tr>
                <td align="right" colspan="2">
                  <font face="Tahoma">&nbsp;&nbsp;
                  </font>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <!--END DtgAddEdit--->
      <tr style="height:25px;">
        <td>
          <table height="25" cellspacing="0" cellpadding="0" width="100%" border="0">
            <tbody>
              <tr width="100%">
                <td valign="middle" bgcolor="#2277d4">
                  <font color="#2277d4">footer
                  </font>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</tr>
</tbody>
</table>
@stop
