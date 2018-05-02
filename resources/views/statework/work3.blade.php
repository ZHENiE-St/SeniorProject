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
  <li class="active"><a href= "work3">ค่าแรง</a></li>
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
        <td>
          <table width="100%">
            <tbody>
              <tr>
                <td colspan="4">
                  <a name="#g01">
                  </a>
                  <table border="0" cellspacing="0" cellpadding="0" style="width: 100%; height: 25px;">
                    <tbody>
                      <tr>
                        <td bgcolor="#2277D4" align="left">
                          &nbsp;
                          <span id="Label1" class="g1" style="color:#F9FBEE;">:: รายละเอียดรถยนต์
                          </span>&nbsp;
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

                              <!-- add-----------------Button----------- -->
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
    </table>
  </td>



@stop
