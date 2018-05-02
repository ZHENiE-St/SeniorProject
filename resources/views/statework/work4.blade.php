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
  <li class="active"><a href= "work4">ค่าอะไหล่</a></li>
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
<tr style="vertical-align:top;">
<td>
  <table style="WIDTH: 100%" cellspacing="0" cellpadding="0" align="center">
    <tbody>
      <tr style="text-align:left;">
        <td style="text-align:left;" colspan="4">
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
                  <a id="wuMenuPage1_lkbPart_Cost" disabled="disabled" class="menuPage_Select_Cont125" style="display:inline-block;height:25px;width:125px;">ค่าอะไหล่
                  </a>
                </td>
                <td>
                  <a id="wuMenuPage1_lkbOther_Cost" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage1$lkbOther_Cost','')" style="display:inline-block;height:25px;width:125px;">ค่าใช้จ่ายอื่น ๆ
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
      <tr>
        <td>
          <a name="l01">
          </a>
          <table align="center" width="1132px" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #0066AA;">
            <tbody>
              <tr class="subHeader">
                <td colspan="2">
                  <img src="images/Pages/icon_document_small.png" align="absmiddle">
                  เลือกค่าอะไหล่
                </td>
              </tr>
              <tr valign="top">
                <td width="140" bgcolor="#6699CC">
                  <table width="100%" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td align="center">
                          <div id="menuPart1" class="menuItemPart1">
                            <input type="submit" name="btn_menuPart1" value="จุดที่เกิดอุบัติเหตุ" id="btn_menuPart1" class="menuItemPart1" style=" width:100%; height:100%; border:0;">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                          <div id="menuPart2" class="menuItemPart0">
                            <input type="submit" name="btn_menuPart2" value="รายการอะไหล่อื่น ๆ" id="btn_menuPart2" class="menuItemPart0" style=" border-style: none; border-color: inherit; border-width: 0; width:100%; ">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                          <div id="menuPart5" class="menuItemPart0">
                            <input type="submit" name="btn_menuPart5" value="รายการอะไหล่ตกแต่ง" id="btn_menuPart5" class="menuItemPart0" style=" width:100%; height:100%; border:0;">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td>
                  <!-- divPart2 -->
                  <div id="divPart1_All">
                    <div id="divPart1" style="padding-left:80px;">
                      <div id="div_point_car">
                        <div style="position:absolute;">
                          <img alt="" src="images/Pages/point_car.jpg">
                        </div>
                        <div style="position:relative; left:0px; top:0px; width:400px; height:200px;">
                          <table id="rdo_Point_car" border="0">
                            <tbody>
                              <tr>
                                <td>
                                  <span class="c_point01">
                                    <input id="rdo_Point_car_0" type="checkbox" name="rdo_Point_car$0">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point02">
                                    <input id="rdo_Point_car_1" type="checkbox" name="rdo_Point_car$1">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point03">
                                    <input id="rdo_Point_car_2" type="checkbox" name="rdo_Point_car$2">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point04">
                                    <input id="rdo_Point_car_3" type="checkbox" name="rdo_Point_car$3">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point05">
                                    <input id="rdo_Point_car_4" type="checkbox" name="rdo_Point_car$4">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point06">
                                    <input id="rdo_Point_car_5" type="checkbox" name="rdo_Point_car$5">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point07">
                                    <input id="rdo_Point_car_6" type="checkbox" name="rdo_Point_car$6">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point08">
                                    <input id="rdo_Point_car_7" type="checkbox" name="rdo_Point_car$7">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point09">
                                    <input id="rdo_Point_car_8" type="checkbox" name="rdo_Point_car$8">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point10">
                                    <input id="rdo_Point_car_9" type="checkbox" name="rdo_Point_car$9">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point11">
                                    <input id="rdo_Point_car_10" type="checkbox" name="rdo_Point_car$10">
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span class="c_point12">
                                    <input id="rdo_Point_car_11" type="checkbox" name="rdo_Point_car$11">
                                  </span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- divPart2 -->
                  <!-- divPart3 -->
                  <!-- divPart4 -->
                  <!-- divPart5 -->
                  <!-- divPart6 -->
                  <!-- divPart7 -->
                  <!-- divPart8 -->
                </td>
              </tr>
              <tr id="trPartListControl">
                <td bgcolor="#6699CC">&nbsp;
                </td>
                <td bgcolor="#CCCCCC" align="center">
                  <input type="submit" name="btnNext_Step" value="ขั้นตอนถัดไป" id="btnNext_Step">
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr style=" width:950px;">
        <td>
          <a name="l02">
          </a>
          <table align="center" width="1132px" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #0066AA;">
            <tbody>
              <tr class="subHeader">
                <td>
                  <img src="images/Pages/icon_document_small.png" align="absmiddle">
                  รายการค่าอะไหล่ที่เลือก
                </td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC">
                  <div style="width:1132px; ">
                    <!-- Comment Section -->
                    <div id="PnlAssign" style="width:1132px;text-align:center;">
                      <table border="0" width="1132px" cellspacing="0" cellpadding="0" bgcolor="#ecedee">
                        <tbody>
                          <tr width="100%">
                            <td style="HEIGHT: 25px" width="100%" colspan="2">
                              <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                <tbody>
                                  <tr>
                                    <td bgcolor="#2277d4">
                                      <font face="Tahoma">&nbsp;&nbsp;
                                      </font>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr valign="top" align="center">
                            <td valign="top" width="100%" colspan="2" align="center">
                              <div style="width:1132px; z-index:100; text-align:left; overflow-x:scroll; overflow-y:auto;">
                                <table cellspacing="0" cellpadding="0" align="Left" rules="all" border="1" id="DtgAddEdit" style="width:1132px;height:50px;font-size:X-Small;font-family:Microsoft Sans Serif;color:#404040;border-width:1px;border-style:solid;border-color:White;background-color:#ECEDEE;border-collapse:collapse;">
                                  <tbody>
                                    <tr class="headDtg" align="center" valign="top" style="color:Black;border-style:None;">
                                      <td height="30px" colspan="7" align="\center" \="" bgcolor="#99ccff">
                                      </td>
                                      <td height="30px" colspan="2" align="\center" \="" bgcolor="#99ccff">
                                        <font class="headDtg">ศูนย์/อู่ซ่อม
                                        </font>
                                      </td>
                                      <td height="30px" colspan="8" align="\center" \="" bgcolor="#99ccff">
                                        <font class="headDtg">บริษัทประกัน
                                        </font>
                                      </td>
                                    </tr>
                                    <tr class="headDtg" align="center" valign="top" style="color:Black;border-style:None;">
                                      <td style="width:5px;">No.
                                      </td>
                                      <td align="left" style="width:5px;">
                                        <input type="checkbox" id="cbHdcb1" onclick="CheckAllDataGridCheckBoxes('Cb1',document.forms[0].cbHdcb1.checked)">
                                      </td>
                                      <td valign="top">หมายเลขอะไหล่
                                      </td>
                                      <td valign="top">รายการ
                                      </td>
                                      <td valign="top" style="width:32px;">
                                        <input type="image" name="DtgAddEdit$ctl01$btnShow_Comment" id="DtgAddEdit_ctl01_btnShow_Comment" title="คลิกแสดงช่องความคิดเห็น หลังจากใส่เครื่องหมายถูกหน้ารายการที่ต้องการแก้ไข" onmouseover="this.src='Images/Labor/comment1.gif';" onmouseout="this.src='Images/Labor/comment1.gif';" src="Images/Labor/comment1.gif" style="border-width:0px;">
                                      </td>
                                      <td style="width:60px;">ราคาเต็ม
                                      </td>
                                      <td valign="top" style="width:20px;">จำนวน
                                      </td>
                                      <td valign="top" style="width:100px;">ประเภท
                                      </td>
                                      <td valign="top" style="width:80px;">ราคาเสนอ (ก่อนVAT)
                                      </td>
                                      <td valign="top">ประเภท
                                      </td>
                                      <td style="width:35px;">%
                                      </td>
                                      <td valign="top">ราคาอนุมัติ (ก่อนVAT)
                                      </td>
                                      <td valign="top" style="width:50px;">ผู้จัด
                                        <br>อะไหล่
                                        <input id="rdoIns" onclick="setSelectPartShip(this);" value="ประกัน" name="rdoSelectAll" type="radio">
                                        <span style="font-size:9pt;color:Blue;">ประกัน
                                        </span>
                                        <input id="rdoRep" onclick="setSelectPartShip(this);" value="อู่" name="rdoSelectAll" type="radio">
                                        <span style="font-size:9pt;color:Blue;">อู่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </span>
                                      </td>
                                      <td valign="top" style="width:50px;">อนุมัติ
                                        <br>ครั้งที่
                                      </td>
                                      <td style="width:50px;">ไม่
                                        <br>อนุมัติ
                                      </td>
                                      <td valign="top" style="width:80px;">สถานะ
                                      </td>
                                      <td style="width:50px;">
                                        <input style="Z-INDEX: 0" id="cbHdcbBP" disabled="" onclick="CheckAllDataGridCheckBoxes('backPart',document.forms[0].cbHdcbBP.checked)" width="50px" type="checkbox">
                                        <br>
                                        <font face="microsoft sansarief">คืนซาก
                                        </font>
                                      </td>
                                    </tr>
                                    <tr align="right" valign="middle" style="height:10px;font-weight:bold;font-size:X-Small;font-family:Microsoft Sans Serif;color:Black;border-width:1px;border-style:Solid;border-color:Black;background-color:WhiteSmoke;">
                                    </tr>
                                    <tr align="center">
                                      <td colspan="17" align="center">
                                        <font face="Microsoft" sans="" serif="" color="#cc0033" size="2">
                                          <strong>ไม่มีรายการค่าอะไหล่
                                          </strong>
                                        </font>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr align="right" valign="middle" style="height:10px;font-weight:bold;font-size:X-Small;font-family:Microsoft Sans Serif;color:Black;border-width:1px;border-style:Solid;border-color:Black;background-color:WhiteSmoke;height:10px;font-weight:bold;font-size:X-Small;font-family:Microsoft Sans Serif;color:Black;border-width:1px;border-style:Solid;border-color:Black;background-color:WhiteSmoke;">
                          </tr>
                          <tr>
                            <td colspan="5">
                              <!-- Control -->
                              <div align="center" style="padding:4px;width:100%">
                              </div>
                            </td>
                          </tr>
                          <tr id="trEditPrice" bordercolorlight="#cccccc" bordercolordark="#ffffff">
                            <td>
                              <table width="100%">
                                <tbody>
                                  <tr>
                                    <td width="50%">
                                      <p align="right">
                                        <span id="Label2" class="headDtg" style="text-align:right;">ราคาเสนอ(ก่อน VAT) :
                                        </span>
                                      </p>
                                    </td>
                                    <td width="50%">
                                      <p align="right">
                                        <font size="2" face="MS Sans Serif">&nbsp;
                                          <span id="lbl_dbREditPrice">0
                                          </span>&nbsp;บาท
                                        </font>
                                      </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td>
                              <table width="100%">
                                <tbody>
                                  <tr>
                                    <td width="50%">
                                      <p align="right">
                                        <span id="Label7" class="headDtg" style="text-align:right;">ราคาอนุมัติ(ก่อน VAT):
                                        </span>
                                      </p>
                                    </td>
                                    <td width="50%">
                                      <p align="right">
                                        <font size="2" face="MS Sans Serif">&nbsp;
                                          <span id="lbl_dbIEditPrice">0
                                          </span>&nbsp;บาท
                                        </font>
                                      </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr id="trSalePartPrice" bordercolorlight="#cccccc" bordercolordark="#ffffff">
                            <td>
                              <table width="100%">
                                <tbody>
                                  <tr>
                                    <td width="50%">
                                      <p align="right">
                                        <font class="headDtg">หักส่วนลดค่าอะไหล่เหมา :
                                        </font>
                                      </p>
                                    </td>
                                    <td width="50%">
                                      <p align="right">
                                        <font size="2" face="MS Sans Serif">
                                          <span id="LbREP_SALE_PART_PRICE" style="text-align:right;">0.00
                                          </span>&nbsp;บาท
                                        </font>
                                      </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td>
                              <table width="100%">
                                <tbody>
                                  <tr>
                                    <td width="50%">
                                      <p align="right">
                                        <font class="headDtg">หักส่วนลดค่าอะไหล่เหมา :
                                        </font>
                                      </p>
                                    </td>
                                    <td width="50%">
                                      <p align="right">
                                        <font size="2" face="MS Sans Serif">
                                          <span id="LbINS_SALE_PART_PRICE" style="text-align:right;">0.00
                                          </span>&nbsp;บาท
                                        </font>
                                      </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr id="trTotal" bordercolorlight="#cccccc" bordercolordark="#ffffff">
                            <td>
                              <table width="100%">
                                <tbody>
                                  <tr>
                                    <td width="50%">
                                      <p align="right">
                                        <span id="Label3" class="headDtg" style="text-align:right;">คงเหลือราคาเสนอ(ก่อน VAT) :
                                        </span>
                                      </p>
                                    </td>
                                    <td width="50%">
                                      <p align="right">
                                        <font size="2" face="MS Sans Serif">
                                          <span id="lbrepTotal">0
                                          </span>&nbsp;บาท
                                        </font>
                                      </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td>
                              <table width="100%" height="10">
                                <tbody>
                                  <tr>
                                    <td width="50%">
                                      <p align="right">
                                        <span id="Label1" class="headDtg" style="text-align:right;">คงเหลือราคาอนุมัติ(ก่อน VAT):
                                        </span>
                                      </p>
                                    </td>
                                    <td width="50%">
                                      <p align="right">
                                        <font size="2" face="MS Sans Serif">
                                          <span id="lbinsTotal">0
                                          </span>&nbsp;บาท
                                        </font>
                                      </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td style="WIDTH: 50%; HEIGHT: 25px" align="right">
                              <font face="Tahoma">
                                <font face="Tahoma">
                                  <font face="Tahoma">
                                  </font>
                                </font>
                              </font>
                            </td>
                            <td style="WIDTH: 50%; HEIGHT: 25px" valign="middle" align="center">
                              <font face="Tahoma">
                                <table id="Table1" border="0" cellspacing="1" cellpadding="1" width="100%">
                                  <tbody>
                                    <tr>
                                      <td valign="bottom">
                                      </td>
                                      <td valign="bottom" align="center">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </font>
                            </td>
                          </tr>
                          <tr id="trcomment1">
                            <td style="WIDTH: 50%; HEIGHT: 17px" align="center">
                              <font face="Microsoft Sans Serif" size="2">
                                <strong>
                                  <span id="lbRepDis0" class="headDtg" style="color:#0066CC;text-decoration:underline;">ความคิดเห็นจาก อู่
                                  </span>
                                </strong>
                              </font>
                            </td>
                            <td style="HEIGHT: 17px" align="center">
                              <font size="2" face="Microsoft Sans Serif">
                                <strong>
                                  <span id="lbRepDis1" class="headDtg" style="color:#0066CC;text-decoration:underline;">ความคิดเห็นจาก บริษัทประกัน
                                  </span>
                                </strong>
                              </font>
                            </td>
                          </tr>
                          <tr id="trcomment2">
                            <td style="WIDTH: 50%; HEIGHT: 16px" align="center">
                              <div style="overflow: auto; height: 150px; width: 430px;">
                                <div>
                                  <table cellspacing="0" cellpadding="4" rules="cols" border="1" id="grvRep_Comment" style="color:Black;background-color:White;border-color:#DEDFDE;border-width:1px;border-style:None;width:405px;border-collapse:collapse;">
                                    <tbody>
                                      <tr style="color:White;background-color:#6B696B;font-weight:bold;">
                                        <th scope="col">ลำดับ
                                        </th>
                                        <th scope="col">รายการ
                                        </th>
                                        <th scope="col">ข้อความ
                                        </th>
                                      </tr>
                                      <tr style="background-color:#F7F7DE;">
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
                              </div>
                            </td>
                            <td style="WIDTH: 50%; HEIGHT: 16px" valign="middle" align="center">
                              <div style="overflow: auto; height: 150px; width: 430px;">
                                <div>
                                  <table cellspacing="0" cellpadding="4" rules="cols" border="1" id="grvIns_Comment" style="color:Black;background-color:White;border-color:#DEDFDE;border-width:1px;border-style:None;width:405px;border-collapse:collapse;">
                                    <tbody>
                                      <tr style="color:White;background-color:#6B696B;font-weight:bold;">
                                        <th scope="col">ลำดับ
                                        </th>
                                        <th scope="col">รายการ
                                        </th>
                                        <th scope="col">ข้อความ
                                        </th>
                                      </tr>
                                      <tr style="background-color:#F7F7DE;">
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
                              </div>
                            </td>
                          </tr>
                          <tr height="10">
                            <td height="10" colspan="2">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- Comment Part -->
  <div class="ix" id="px2" style="position:fixed; top:150px; left:250px; z-index:20; border:1px solid #666666;overflow:scroll;
                                  display:none; width:60%; height:400px; background-color:White;">
    <table width="100%" cellpadding="4" cellspacing="1" border="0">
      <tbody>
        <tr>
          <td>
            <b class="popHeader">ความคิดเห็นค่าอะไหล่
            </b>
          </td>
          <td align="right">
            <a href="#" onclick="viewInfo('px2',false)">
              <img src="images/Pages/x1.gif">
            </a>
          </td>
        </tr>
        <tr>
          <td colspan="2">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</td>
</tr>
@stop
