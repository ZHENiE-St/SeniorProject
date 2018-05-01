@extends('layouts.main')
@section('page_title', 'Customers')

@section('activeUrl')
<h4>Sombat .J Auto Center
</h4>
<ul class="nav nav-pills nav-stacked">
  <li >
    <a href= "homepage">Home
    </a>
  </li>
  <li >
    <a href="customers">ข้อมูลลูกค้า
    </a>
  </li>
  <li >
    <a href= "work">ข้อมูลงานซ่อม
    </a>
  </li>
  <li ><a href= "work2">ข้อมูลงานซ่อม2</a></li>
  <li class="active"><a href= "work3">ค่าแรง</a></li>
  <li>
    <a href= "">Photos
    </a>
  </li>
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
<td valign="top">
  <table class="style2">
    <tbody>
      <tr>
        <td align="center">
          <table id="wuMenuPage_tb_Menu" align="center" cellpadding="0" cellspacing="5" width="800px">
            <tbody>
              <tr>
                <td>
                </td>
                <td>
                  <a id="wuMenuPage_lkbGeneral_Data" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage$lkbGeneral_Data','')" style="display:inline-block;height:25px;width:125px;">ข้อมูลทั่วไป
                  </a>
                </td>
                <td>
                  <a id="wuMenuPage_lkbLabor_Cost" disabled="disabled" class="menuPage_Select_Cont125" style="display:inline-block;height:25px;width:125px;">ค่าแรง
                  </a>
                </td>
                <td>
                  <a id="wuMenuPage_lkbPart_Cost" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage$lkbPart_Cost','')" style="display:inline-block;height:25px;width:125px;">ค่าอะไหล่
                  </a>
                </td>
                <td>
                  <a id="wuMenuPage_lkbOther_Cost" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage$lkbOther_Cost','')" style="display:inline-block;height:25px;width:125px;">ค่าใช้จ่ายอื่น ๆ
                  </a>
                </td>
                <td>
                  <a id="wuMenuPage_lkbImage" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage$lkbImage','')" style="display:inline-block;height:25px;width:125px;">รูปประกอบ
                  </a>
                </td>
                <td>
                  <a id="wuMenuPage_lkbSummary" class="menuPage_Base_Cont125" href="javascript:__doPostBack('wuMenuPage$lkbSummary','')" style="display:inline-block;height:25px;width:125px;">สรุป
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td align="center">
        </td>
      </tr>
      <tr>
        <td>
          <table align="center" width="960" cellpadding="0" cellspacing="0" style="border: 1px solid #0066AA;">
            <tbody>
              <tr>
                <td bgcolor="#99CCFF" colspan="2" style="height: 30px;">
                  &nbsp;
                  <a name="#g01">
                  </a>
                  <img src="images/Pages/icon_document_small.png" align="absmiddle">
                  <font class="headDtg"> ค่าแรง
                  </font>
                  <input name="hd_view" type="hidden" id="hd_view" value="A">
                  <input name="hd_selectpoint" type="hidden" id="hd_selectpoint">
                  <input name="hidRefresh" type="hidden" id="hidRefresh">
                  <input name="hidLaborType" type="hidden" id="hidLaborType">
                </td>
              </tr>
              <tr valign="top" align="left" bgcolor="#6699CC">
                <td>
                  <table style="width: 140px" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td>
                          <div id="menuLabor1" class="menuItemLabor1">
                            <a id="lnkChoosePoint" class="txtLnk" href="javascript:__doPostBack('lnkChoosePoint','')" style="display:inline-block;width:100%;">เลือกจุดเกิดเหตุ
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div id="menuLabor2" class="menuItemLabor0">
                            <a id="lnkLaborMajor" class="txtLnk1" href="javascript:__doPostBack('lnkLaborMajor','')" style="display:inline-block;width:100%;">ค่าแรงหลัก
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div id="menuLabor3" class="menuItemLabor0">
                            <a id="lnkLabor" class="txtLnk1" href="javascript:__doPostBack('lnkLabor','')" style="display:inline-block;width:100%;">ค่าแรงทั่วไป
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div id="menuLabor4" class="menuItemLabor0">
                            <a id="lnkLaborOther" class="txtLnk1" href="javascript:__doPostBack('lnkLaborOther','')" style="display:inline-block;width:100%;">ค่าแรงอื่นๆ
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div id="menuLabor5" class="menuItemLabor0">
                            <a id="lnkLaborNosys" class="txtLnk1" href="javascript:__doPostBack('lnkLaborNosys','')" style="display:inline-block;width:100%;">ค่าแรงไม่อยู่ในระบบ
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div id="menuLabor6" class="menuItemLabor0">
                            <a id="lnkLaborCancel" class="txtLnk1" href="javascript:__doPostBack('lnkLaborCancel','')" style="display:inline-block;width:100%;">รายการยกเลิก/ไม่อนุมัติ
                            </a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          &nbsp;
                        </td>
                      </tr>
                      <tr>
                        <td>
                          &nbsp;
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td>
                  <table cellpadding="0" cellspacing="0" style="height: 260px; width: 800px;">
                    <tbody>
                      <tr style="background-color: White;">
                        <td>
                          <table align="left" width="820px">
                            <tbody>
                              <tr>
                                <td align="center">
                                  <div id="divLaborPic" style="padding-left: 0px;">
                                    <div style="position: absolute; padding-left: 180px;">
                                      <img id="imgPicCar" src="images/labor/point_car.jpg" style="border-width:0px;">
                                    </div>
                                    <div style="position: relative; left: 0px; top: 0px; width: 450px; height: 200px;">
                                      <table id="rdo_Point" border="0">
                                        <tbody>
                                          <tr>
                                            <td>
                                              <span class="point01">
                                                <input id="rdo_Point_0" type="radio" name="rdo_Point" value="01" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$0\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point02">
                                                <input id="rdo_Point_1" type="radio" name="rdo_Point" value="02" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$1\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point03">
                                                <input id="rdo_Point_2" type="radio" name="rdo_Point" value="03" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$2\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point12">
                                                <input id="rdo_Point_3" type="radio" name="rdo_Point" value="04" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$3\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point04">
                                                <input id="rdo_Point_4" type="radio" name="rdo_Point" value="05" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$4\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point11">
                                                <input id="rdo_Point_5" type="radio" name="rdo_Point" value="06" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$5\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point05">
                                                <input id="rdo_Point_6" type="radio" name="rdo_Point" value="07" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$6\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point10">
                                                <input id="rdo_Point_7" type="radio" name="rdo_Point" value="08" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$7\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point06">
                                                <input id="rdo_Point_8" type="radio" name="rdo_Point" value="09" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$8\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point09">
                                                <input id="rdo_Point_9" type="radio" name="rdo_Point" value="10" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$9\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point07">
                                                <input id="rdo_Point_10" type="radio" name="rdo_Point" value="11" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$10\',\'\')', 0)">
                                              </span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <span class="point08">
                                                <input id="rdo_Point_11" type="radio" name="rdo_Point" value="12" onclick="javascript:setTimeout('__doPostBack(\'rdo_Point$11\',\'\')', 0)">
                                              </span>
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
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td style="height: 15px;">
          <input name="hdfClaimid" type="hidden" id="hdfClaimid" value="RYD018051008">
          <input name="hdfInsurerid" type="hidden" id="hdfInsurerid" value="822">
          <input name="hdfurl" type="hidden" id="hdfurl">
          <input name="hdBrowser" type="hidden" id="hdBrowser">
        </td>
      </tr>
      <tr>
        <td style="height: 40px;">
          <table id="tbSumLabor" cellpadding="0" cellspacing="0" style="border: 1px solid #0066AA;
                                                                        width: 100%; border-bottom-color: #0066AA;">
            <tbody>
              <tr>
                <td style="background-color: #99CCFF; height: 25px;">
                  <a name="#g02">
                  </a>
                  <table class="style5">
                    <tbody>
                      <tr>
                        <td style="width: 40%">
                          <img src="images/Pages/icon_document_small.png" align="absmiddle">
                          &nbsp;
                          <span id="lbLaborCartype" class="headDtg">รายการค่าแรง (อู่กลาง)รถเก๋งเอเชีย ขนาดกลาง
                          </span>
                          &nbsp;&nbsp;&nbsp;
                          <span id="lbLabortypedesc" class="itemDtg" style="color:#006600;">20% Exclude Vat
                          </span>
                          &nbsp;
                          <span id="lbLaborAlert" class="headDtg" style="color:Red;">
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <div>
                    <table cellspacing="0" cellpadding="4" rules="all" border="1" id="gvLaborDetail" style="color:#333333;width:100%;border-collapse:collapse;">
                      <tbody>
                        <tr class="headDtg" style="background-color:#D5D6D7;border-color:#5D7B9D;border-width:1px;border-style:solid;font-weight:bold;">
                          <td class="headTopDtgL" colspan="5">
                            <img src="Images/Labor/pic.gif" style="border-width:0px;">
                            <a id="gvLaborDetail_ctl01_DisplayAll" href="frmDspImage.aspx?src=labor&amp;claimid=" target="_blank">ดูรูปทั้งหมด
                            </a>
                          </td>
                          <td class="headTopDtg" colspan="2">อู่ / ศูนย์
                          </td>
                          <td class="headTopDtg" colspan="2">ประกัน
                          </td>
                          <td class="headTopDtgR" colspan="4">
                          </td>
                        </tr>
                        <tr class="headDtg" style="background-color:#D5D6D7;border-color:#5D7B9D;border-width:1px;border-style:solid;font-weight:bold;">
                          <th scope="col">No.
                          </th>
                          <th scope="col">
                            <input type="checkbox" id="cbHdCb1" onclick="CheckAllDataGridCheckBoxes('cb',document.forms[0].cbHdCb1.checked)">
                          </th>
                          <th valign="middle" scope="col" style="width:200px;">
                            <span id="gvLaborDetail_ctl02_lbHead">รายการ
                            </span>
                            &nbsp;
                            <input type="image" name="gvLaborDetail$ctl02$imgEditgv" id="gvLaborDetail_ctl02_imgEditgv" title="คลิกแสดงช่องความคิดเห็น หลังจากใส่เครื่องหมายถูกหน้ารายการที่ต้องการแก้ไข" src="Images/Labor/comment1.gif" style="border-width:0px;">
                          </th>
                          <th scope="col">ราคาเต็ม
                          </th>
                          <th scope="col">%
                          </th>
                          <th scope="col">ระดับเสียหาย
                          </th>
                          <th scope="col">ราคาเสนอ
                            <br>(ก่อนVAT)
                          </th>
                          <th scope="col">ระดับเสียหาย
                          </th>
                          <th scope="col">ราคาอนุมัติ
                            <br>(ก่อนVAT)
                          </th>
                          <th scope="col">อนุมัติ
                            <br>ครั้งที่
                          </th>
                          <th scope="col">ไม่อนุมัติ
                          </th>
                          <th scope="col">สถานะ
                          </th>
                          <th scope="col">&nbsp;
                          </th>
                        </tr>
                        <tr class="itemDtg" align="center" style="color:#333333;background-color:#ECEDEE;border-color:#5D7B9D;border-width:1px;border-style:solid;">
                        </tr>
                        <tr align="center" height="5px">
                          <td colspan="14" bgcolor="Silver">ไม่มีข้อมูลรายการค่าแรง
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="height: 10px;">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td bgcolor="#F2F2F2" align="center">
                  <table class="style5">
                    <tbody>
                      <tr>
                        <td style="width:50%; text-align:center; vertical-align:top;">
                          <input class="itemDtg" align="center" type="submit" name="bntEditLabordetail" value="  แก้ไขข้อมูลที่เลือก" id="bntEditLabordetail" style="color:#333333;background-color:#ECEDEE;border-color:#5D7B9D;border-width:1px;border-style:solid;width: 150px;
background-image: url(images/Labor/icon_edit.gif); background-repeat: no-repeat;
background-position: 5% 65%;">
                          &nbsp;&nbsp;
                          <input type="submit" name="bntDeleteLabordetail" value="ลบรายการที่เลือก" onclick="if (typeof(Page_ClientValidate) == 'function') {if (Page_ClientValidate() == false) { return false; }} if (confirm('คุณต้องการ ลบ รายการค่าแรง ?') == false) { return false; } this.value = 'Please wait...';this.disabled = true;__doPostBack('bntDeleteLabordetail','');" id="bntDeleteLabordetail" align="absmiddle" style="width: 150px;
background-image: url(images/Labor/icon_delete.gif); background-repeat: no-repeat;
background-position: 5% 65%;">
                          &nbsp;&nbsp;
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr bgcolor="#F2F2F2">
                <td align="center">
                  <table>
                    <tbody>
                      <tr id="trPrice">
                        <td class="stytdSum1">
                          <span id="lbRepexcVat" class="headDtg">ราคาเสนอก่อน (VAT) :
                          </span>
                        </td>
                        <td class="stytdSum2">
                          <span id="lbRepPriceexcVat" class="itemDtg">0.00
                          </span>
                          <font class="itemDtg"> บาท
                          </font>
                        </td>
                        <td class="stytdSum3">
                          <span id="lbInsexcVat" class="headDtg">ราคาอนุมัติก่อน (VAT) :
                          </span>
                        </td>
                        <td class="stytdSum4">
                          <span id="lbInsPriceexcVat" class="itemDtg">0.00
                          </span>
                          <font class="itemDtg"> บาท
                          </font>
                        </td>
                        <td class="stytdSum5">
                          &nbsp;
                        </td>
                      </tr>
                      <tr id="trDis">
                        <td class="stytdSum1">
                          <span id="lbRepDis" class="headDtg">ส่วนลดค่าแรงเหมา :
                          </span>
                        </td>
                        <td class="stytdSum2">
                          <span id="lbRepPriceDis" class="itemDtg">0.00
                          </span>
                          <font class="itemDtg"> บาท
                          </font>
                        </td>
                        <td class="stytdSum3">
                          <span id="lbInsDis" class="headDtg">ส่วนลดค่าแรงเหมา :
                          </span>
                        </td>
                        <td class="stytdSum4">
                          <span id="lbInsPriceDis" class="itemDtg">0.00
                          </span>
                          <font class="itemDtg"> บาท
                          </font>
                        </td>
                        <td class="stytdSum5">
                          &nbsp;
                        </td>
                      </tr>
                      <tr id="trEditPrice">
                        <td class="stytdSum1">
                          <span id="lbRepIncvat" class="headDtg">คงเหลือราคาเสนอก่อน(ก่อน VAT) :
                          </span>
                        </td>
                        <td class="stytdSum2">
                          <span id="lbRepPriceTotal" class="itemDtg">0.00
                          </span>
                          <font class="itemDtg"> บาท
                          </font>
                        </td>
                        <td class="stytdSum3">
                          <span id="lbInsIncvat" class="headDtg">คงเหลือราคาอนุมัติ (ก่อน VAT) :
                          </span>
                        </td>
                        <td class="stytdSum4">
                          <span id="lbInsPriceTotal" class="itemDtg">0.00
                          </span>
                          <font class="itemDtg"> บาท
                          </font>
                        </td>
                        <td class="stytdSum5">
                          &nbsp;
                        </td>
                      </tr>
                      <tr>
                        <td colspan="5" style="height: 20px;">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" style="width: 50%; text-align: center;">
                          <span id="lbRepDis0" class="headDtg" style="color:#0066CC;text-decoration:underline;">ความคิดเห็นจาก อู่
                          </span>
                        </td>
                        <td colspan="3" style="width: 50%; text-align: center;">
                          <span id="lbRepDis1" class="headDtg" style="color:#0066CC;text-decoration:underline;">ความคิดเห็นจาก บริษัทประกัน
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" colspan="2" style="width: 50%;">
                          <div style="overflow: auto; height: 150px; width: 430px;">
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
                          </div>
                        </td>
                        <td align="center" colspan="3" style="width: 50%;">
                          <div style="overflow: auto; height: 150px; width: 430px;">
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
                                  <tr class="itemDtg" style="background-color:#F7F7DE;">
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
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</td>

@stop
